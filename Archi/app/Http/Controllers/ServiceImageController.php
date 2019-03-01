<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Image;
use Auth;
use DB;

class ServiceImageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $images = DB::table('process_service_image')
                    ->join('process_service', 'process_service.SERVICE_ID', '=', 'process_service_image.SERVICE_ID')
                    ->select('process_service_image.*', 'process_service.SERVICE_NAME')
                    ->where('IMAGE_TITLE', 'LIKE', '%'.$request->get('image_title').'%')
                    ->orderBy('process_service_image.SERVICE_IMAGE_ID', 'DESC')
                    ->paginate(10);
        //
        return view('admin.image_list')->with('images', $images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $services = DB::table('process_service')
                    ->select('process_service.*')
                    ->where('ACTIVE_STATUS', '1')
                    ->get();
        //
        $serial_nos = DB::table('process_service_image')
                ->select('process_service_image.SL_NO')
                ->orderby('process_service_image.SL_NO', 'DESC')
                ->limit(1)
                ->get();

        //
        return view('admin.image_create')->with('services', $services)
                                        ->with('serial_nos', $serial_nos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'service_title' => 'required',
            'image_title' => 'required',
            'image_file' => 'required|image',
            'serial_no' => 'required',
        ]);


        // Primary Key Generator
        $primary_key = DB::table('process_service_image')
                    ->select('process_service_image.SERVICE_IMAGE_ID')
                    ->max('SERVICE_IMAGE_ID');

        if (isset($primary_key)) {
            $image_id = $primary_key + '1';
        }
        else {
            $image_id = '20190001';
        }


        $serial_no = DB::table('process_service_image')
                ->select('process_service_image.SL_NO')
                ->where('process_service_image.SL_NO', '=', $request->get('serial_no') )
                ->get();


        if( count($serial_no) <= 0 ){

            // image upload, fit and store inside public folder 
            if($request->hasFile('image_file')){
                $filenameWithExt = $request->file('image_file')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
                $extension = $request->file('image_file')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                //Resize And Crop as Fit image here (270 width, 343 height)
                $thumbnailpath = 'uploads/images/service/'.$fileNameToStore;
                $img = Image::make($request->file('image_file')->getRealPath())->resize(270, null, function ($constraint) { $constraint->aspectRatio(); $constraint->upsize(); })->save($thumbnailpath);

                //Upload full size images inside public folder
                $path = $request->file('image_file')->move('uploads/images/service/fullsize/', $fileNameToStore);

            }
            else{
                $fileNameToStore = 'noimage.jpg'; // if no image selected this will be the default image
            }

            //
            $insert = DB::table('process_service_image')
                        ->insert([
                            'SERVICE_IMAGE_ID' => $image_id,
                            'SERVICE_ID' => $request->get('service_title'),
                            'IMAGE_TITLE' => $request->get('image_title'),
                            'IMAGE_PATH' => $fileNameToStore,
                            'SL_NO' => $request->get('serial_no'),
                            'ACTIVE_STATUS' => '1',
                            'ENTERED_BY' => Auth::user()->id,
                            'ENTRY_TIMESTAMP' => Carbon::now()
                        ]);

            Session::forget('error');
            Session::flash('success', 'Service Image Created Successfully!');

        }
        else {
            Session::forget('success');
            Session::flash('error', 'Already Have An Image on This Serial No!');
        }

        //
        return redirect()->route('image.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $images = DB::table('process_service_image')
                    ->join('process_service', 'process_service.SERVICE_ID', '=', 'process_service_image.SERVICE_ID')
                    ->select('process_service_image.*', 'process_service.SERVICE_NAME')
                    ->where('process_service_image.SERVICE_IMAGE_ID', $id)
                    ->get();

        //
        return view('admin.image_view')->with('images', $images);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $services = DB::table('process_service')
                    ->select('process_service.*')
                    ->where('ACTIVE_STATUS', '1')
                    ->get();
        //
        $images = DB::table('process_service_image')
                    ->select('process_service_image.*')
                    ->where('SERVICE_IMAGE_ID', $id)
                    ->get();

        //
        return view('admin.image_edit')->with('services', $services)
                                        ->with('images', $images);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'service_title' => 'required',
            'image_title' => 'required',
            'image_file' => 'nullable|image',
            'serial_no' => 'required',
        ]);


        $serial_no = DB::table('process_service_image')
                ->select('process_service_image.SL_NO')
                ->where('process_service_image.SL_NO', '=', $request->get('serial_no') )
                ->where('process_service_image.SERVICE_IMAGE_ID', '!=', $id)
                ->get();


        if( count($serial_no) <= 0 ){
        
            // image upload, fit and store inside public folder 
            if($request->hasFile('image_file')){
                $filenameWithExt = $request->file('image_file')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
                $extension = $request->file('image_file')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                //Resize And Crop as Fit image here (270 width, 343 height)
                $thumbnailpath = 'uploads/images/service/'.$fileNameToStore;
                $img = Image::make($request->file('image_file')->getRealPath())->resize(270, null, function ($constraint) { $constraint->aspectRatio(); $constraint->upsize(); })->save($thumbnailpath);

                //Upload full size images inside public folder
                $path = $request->file('image_file')->move('uploads/images/service/fullsize/', $fileNameToStore);


                //
                $update = DB::table('process_service_image')
                            ->where('SERVICE_IMAGE_ID', $id)
                            ->update([
                                'SERVICE_ID' => $request->get('service_title'),
                                'IMAGE_TITLE' => $request->get('image_title'),
                                'IMAGE_PATH' => $fileNameToStore,
                                'SL_NO' => $request->get('serial_no'),
                                'UPDATED_BY' => Auth::user()->id,
                                'UPDATE_TIMESTAMP' => Carbon::now()
                            ]);
            }
            else{
                    
                //
                $update = DB::table('process_service_image')
                            ->where('SERVICE_IMAGE_ID', $id)
                            ->update([
                                'SERVICE_ID' => $request->get('service_title'),
                                'IMAGE_TITLE' => $request->get('image_title'),
                                'SL_NO' => $request->get('serial_no'),
                                'UPDATED_BY' => Auth::user()->id,
                                'UPDATE_TIMESTAMP' => Carbon::now()
                            ]);
            }

            Session::forget('error');
            Session::flash('success', 'Service Image Updated Successfully!');

        }
        else {
            Session::forget('success');
            Session::flash('error', 'Already Have An Image on This Serial No!');
        }


        //
        return redirect()->route('image.edit', [$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function status(Request $request, $id)
    {
        //
        $images = DB::table('process_service_image')
                ->select('process_service_image.*')
                ->where('process_service_image.SERVICE_IMAGE_ID', '=', $id)
                ->get();

        foreach( $images as $image ){
            if ($image->ACTIVE_STATUS == '1') {
                $update = DB::table('process_service_image')
                        ->where('SERVICE_IMAGE_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '0'
                        ]);
            }
            elseif ($image->ACTIVE_STATUS == '0') {
                $update = DB::table('process_service_image')
                        ->where('SERVICE_IMAGE_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '1'
                        ]);
            }
        }


        //
        $images = DB::table('process_service_image')
                    ->join('process_service', 'process_service.SERVICE_ID', '=', 'process_service_image.SERVICE_ID')
                    ->select('process_service_image.*', 'process_service.SERVICE_NAME')
                    ->where('process_service_image.SERVICE_IMAGE_ID', $id)
                    ->orderBy('process_service_image.SERVICE_IMAGE_ID', 'DESC')
                    ->paginate(1);
        //
        return view('admin.image_list')->with('images', $images);

    }
}
