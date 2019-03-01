<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Image;
use Auth;
use DB;

class ServiceController extends Controller
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
        $services = DB::table('process_service')
                    ->select('process_service.*')
                    ->where('SERVICE_NAME', 'LIKE', '%'.$request->get('service_title').'%')
                    ->orderBy('SERVICE_ID', 'DESC')
                    ->paginate(10);
        //
        return view('admin.service_list')->with('services', $services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $parent_services = DB::table('process_service')
                        ->select('process_service.SERVICE_ID', 'process_service.SERVICE_NAME')
                        ->get();
        //
        $serial_nos = DB::table('process_service')
                ->select('process_service.SL_NO')
                ->orderby('process_service.SL_NO', 'DESC')
                ->limit(1)
                ->get();
        //
        return view('admin.service_create')->with('serial_nos', $serial_nos)
                                    ->with('parent_services', $parent_services);
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
            'content' => 'required',
            'service_image' => 'required|image',
            'show_on_home' => 'required',
            'serial_no' => 'required',
        ]);


        // Primary Key Generator
        $primary_key = DB::table('process_service')
                    ->select('process_service.SERVICE_ID')
                    ->max('SERVICE_ID');

        if (isset($primary_key)) {
            $service_id = $primary_key + '1';
        }
        else {
            $service_id = '20190001';
        }


        $serial_no = DB::table('process_service')
                ->select('process_service.SL_NO')
                ->where('process_service.SL_NO', '=', $request->get('serial_no') )
                ->get();


        if( count($serial_no) <= 0 ){
        
            // image upload, fit and store inside public folder 
            if($request->hasFile('service_image')){
                $filenameWithExt = $request->file('service_image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
                $extension = $request->file('service_image')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                //Resize And Crop as Fit image here (500 width, 280 height)
                $thumbnailpath = 'uploads/images/service/'.$fileNameToStore;
                $img = Image::make($request->file('service_image')->getRealPath())->fit(270, 343, function ($constraint) { $constraint->upsize(); })->save($thumbnailpath);
            }
            else{
                $fileNameToStore = 'noimage.jpg'; // if no image selected this will be the default image
            }


            //
            $insert = DB::table('process_service')
                        ->insert([
                            'SERVICE_ID' => $service_id,
                            'SERVICE_NAME' => $request->get('service_title'),
                            'PARENT_SERVICE_ID' => $request->get('parent_service'),
                            'SERVICE_DESC' => $request->get('content'),
                            'THUMBNAIL_IMAGE_PATH' => $fileNameToStore,
                            'HOME_PAGE_SHOW' => $request->get('show_on_home'),
                            'SL_NO' => $request->get('serial_no'),
                            'ACTIVE_STATUS' => '1',
                            'ENTERED_BY' => Auth::user()->id,
                            'ENTRY_TIMESTAMP' => Carbon::now()
                        ]);

            Session::forget('error');
            Session::flash('success', 'Service Created Successfully!');

        }
        else {
            Session::forget('success');
            Session::flash('error', 'Already Have An Service on This Serial No!');
        }


        //
        return redirect()->route('service.create');
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
        $services = DB::table('process_service')
                    ->select('process_service.*')
                    ->where('SERVICE_ID', $id)
                    ->get();

        //
        return view('admin.service_view')->with('services', $services);
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
                    ->where('SERVICE_ID', '=', $id)
                    ->get();
        //
        $parent_services = DB::table('process_service')
                        ->select('process_service.SERVICE_ID', 'process_service.SERVICE_NAME')
                        ->where('SERVICE_ID', '!=', $id)
                        ->get();

        //
        return view('admin.service_edit')->with('services', $services)
                                ->with('parent_services', $parent_services);
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
            'content' => 'required',
            'service_image' => 'nullable|image',
            'show_on_home' => 'required',
            'serial_no' => 'required',
        ]);


        $serial_no = DB::table('process_service')
                ->select('process_service.SL_NO')
                ->where('process_service.SL_NO', '=', $request->get('serial_no') )
                ->where('process_service.SERVICE_ID', '!=', $id)
                ->get();


        if( count($serial_no) <= 0 ){
        
            // image upload, fit and store inside public folder 
            if($request->hasFile('service_image')){
                $filenameWithExt = $request->file('service_image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
                $extension = $request->file('service_image')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                //Resize And Crop as Fit image here (500 width, 280 height)
                $thumbnailpath = 'uploads/images/service/'.$fileNameToStore;
                $img = Image::make($request->file('service_image')->getRealPath())->fit(270, 343, function ($constraint) { $constraint->upsize(); })->save($thumbnailpath);


                //
                $update = DB::table('process_service')
                            ->where('SERVICE_ID', $id)
                            ->update([
                                'SERVICE_NAME' => $request->get('service_title'),
                                'PARENT_SERVICE_ID' => $request->get('parent_service'),
                                'SERVICE_DESC' => $request->get('content'),
                                'THUMBNAIL_IMAGE_PATH' => $fileNameToStore,
                                'HOME_PAGE_SHOW' => $request->get('show_on_home'),
                                'SL_NO' => $request->get('serial_no'),
                                'UPDATED_BY' => Auth::user()->id,
                                'UPDATE_TIMESTAMP' => Carbon::now()
                            ]);

            }
            else{
                
                //
                $update = DB::table('process_service')
                            ->where('SERVICE_ID', $id)
                            ->update([
                                'SERVICE_NAME' => $request->get('service_title'),
                                'PARENT_SERVICE_ID' => $request->get('parent_service'),
                                'SERVICE_DESC' => $request->get('content'),
                                'HOME_PAGE_SHOW' => $request->get('show_on_home'),
                                'SL_NO' => $request->get('serial_no'),
                                'UPDATED_BY' => Auth::user()->id,
                                'UPDATE_TIMESTAMP' => Carbon::now()
                            ]);

            }

            Session::forget('error');
            Session::flash('success', 'Service Update Successfully!');

        }
        else {
            Session::forget('success');
            Session::flash('error', 'Already Have An Service on This Serial No!');
        }


        //
        return redirect()->route('service.edit', [$id]);
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
        $services = DB::table('process_service')
                ->select('process_service.*')
                ->where('process_service.SERVICE_ID', '=', $id)
                ->get();

        foreach( $services as $service ){
            if ($service->ACTIVE_STATUS == '1') {
                $update = DB::table('process_service')
                        ->where('SERVICE_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '0'
                        ]);
            }
            elseif ($service->ACTIVE_STATUS == '0') {
                $update = DB::table('process_service')
                        ->where('SERVICE_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '1'
                        ]);
            }
        }


        //
        $services = DB::table('process_service')
                    ->select('process_service.*')
                    ->where('SERVICE_ID', $id)
                    ->orderBy('SERVICE_ID', 'DESC')
                    ->paginate(1);
        //
        return view('admin.service_list')->with('services', $services);

    }
}
