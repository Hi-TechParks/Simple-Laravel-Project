<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Image;
use Auth;
use DB;

class BlogController extends Controller
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
        $blogs = DB::table('process_blog')
                    ->join('process_blog_category', 'process_blog_category.BLOG_CATEGORY_ID', '=', 'process_blog.BLOG_CATEGORY_ID')
                    ->select('process_blog.*', 'process_blog_category.CATEGORY_NAME')
                    ->where('BLOG_TITLE', 'LIKE', '%'.$request->get('blog_title').'%')
                    ->where('CATEGORY_NAME', 'LIKE', '%'.$request->get('blog_category').'%')
                    ->orderBy('process_blog.BLOG_ID', 'DESC')
                    ->paginate(10);
        //
        return view('admin.blog_list')->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $blog_cats = DB::table('process_blog_category')
                    ->select('process_blog_category.*')
                    ->where('ACTIVE_STATUS', '1')
                    ->get();
        //
        return view('admin.blog_create')->with('blog_cats', $blog_cats);
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
            'blog_category' => 'required',
            'blog_title' => 'required',
            'content' => 'required',
            'blog_image' => 'nullable|image',
            'blog_author' => 'required',
            'publish_start' => 'required|date|after_or_equal:today',
            'publish_end' => 'required|date|after_or_equal:publish_start',
        ]);


        // Primary Key Generator
        $primary_key = DB::table('process_blog')
                    ->select('process_blog.BLOG_ID')
                    ->max('BLOG_ID');

        if (isset($primary_key)) {
            $blog_id = $primary_key + '1';
        }
        else {
            $blog_id = '20190001';
        }

        
        // image upload, fit and store inside public folder 
        if($request->hasFile('blog_image')){
            $filenameWithExt = $request->file('blog_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $extension = $request->file('blog_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Resize And Crop as Fit image here (500 width, 280 height)
            $thumbnailpath = 'uploads/images/blog/'.$fileNameToStore;
            $img = Image::make($request->file('blog_image')->getRealPath())->fit(500, 280, function ($constraint) { $constraint->upsize(); })->save($thumbnailpath);
        }
        else{
            $fileNameToStore = 'noimage.jpg'; // if no image selected this will be the default image
        }


        //
        $insert = DB::table('process_blog')
                    ->insert([
                        'BLOG_ID' => $blog_id,
                        'BLOG_CATEGORY_ID' => $request->get('blog_category'),
                        'BLOG_TITLE' => $request->get('blog_title'),
                        'BLOG_CONTENT' => $request->get('content'),
                        'BLOG_IMAGE' => $fileNameToStore,
                        'BLOG_AUTHOR' => $request->get('blog_author'),
                        'PUBLISH_START_DATE' => $request->get('publish_start'),
                        'PUBLISH_END_DATE' => $request->get('publish_end'),
                        'ACTIVE_STATUS' => '1',
                        'ENTERED_BY' => Auth::user()->id,
                        'ENTRY_TIMESTAMP' => Carbon::now()
                    ]);

        Session::flash('success', 'Blog Created Successfully!'); 


        //
        return redirect()->route('blog.create');
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
        $blogs = DB::table('process_blog')
                    ->join('process_blog_category', 'process_blog_category.BLOG_CATEGORY_ID', '=', 'process_blog.BLOG_CATEGORY_ID')
                    ->select('process_blog.*', 'process_blog_category.CATEGORY_NAME')
                    ->where('process_blog.BLOG_ID', $id)
                    ->get();
        //
        return view('admin.blog_view')->with('blogs', $blogs);
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
        $blogs = DB::table('process_blog')
                    ->select('process_blog.*')
                    ->where('BLOG_ID', $id)
                    ->get();
        //
        $blog_cats = DB::table('process_blog_category')
                    ->select('process_blog_category.*')
                    ->where('ACTIVE_STATUS', '1')
                    ->get();
        //
        return view('admin.blog_edit')->with('blogs', $blogs)->with('blog_cats', $blog_cats);
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
            'blog_category' => 'required',
            'blog_title' => 'required',
            'content' => 'required',
            'blog_image' => 'nullable|image',
            'blog_author' => 'required',
            'publish_start' => 'required|date',
            'publish_end' => 'required|date|after_or_equal:publish_start',
        ]);


        // image upload, fit and store inside public folder 
        if($request->hasFile('blog_image')){
            $filenameWithExt = $request->file('blog_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $extension = $request->file('blog_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Resize And Crop as Fit image here (500 width, 280 height)
            $thumbnailpath = 'uploads/images/blog/'.$fileNameToStore;
            $img = Image::make($request->file('blog_image')->getRealPath())->fit(500, 280, function ($constraint) { $constraint->upsize(); })->save($thumbnailpath);

            //
            $update = DB::table('process_blog')
                        ->where('BLOG_ID', $id)
                        ->update([
                            'BLOG_CATEGORY_ID' => $request->get('blog_category'),
                            'BLOG_TITLE' => $request->get('blog_title'),
                            'BLOG_CONTENT' => $request->get('content'),
                            'BLOG_IMAGE' => $fileNameToStore,
                            'BLOG_AUTHOR' => $request->get('blog_author'),
                            'PUBLISH_START_DATE' => $request->get('publish_start'),
                            'PUBLISH_END_DATE' => $request->get('publish_end'),
                            'UPDATED_BY' => Auth::user()->id,
                            'UPDATE_TIMESTAMP' => Carbon::now()
                        ]);

        }
        else{
            
            //
            $update = DB::table('process_blog')
                        ->where('BLOG_ID', $id)
                        ->update([
                            'BLOG_CATEGORY_ID' => $request->get('blog_category'),
                            'BLOG_TITLE' => $request->get('blog_title'),
                            'BLOG_CONTENT' => $request->get('content'),
                            'BLOG_AUTHOR' => $request->get('blog_author'),
                            'PUBLISH_START_DATE' => $request->get('publish_start'),
                            'PUBLISH_END_DATE' => $request->get('publish_end'),
                            'UPDATED_BY' => Auth::user()->id,
                            'UPDATE_TIMESTAMP' => Carbon::now()
                        ]);

        }


        Session::flash('success', 'Blog Update Successfully!'); 


        //
        return redirect()->route('blog.edit', [$id]);
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
        $blogs = DB::table('process_blog')
                ->select('process_blog.*')
                ->where('process_blog.BLOG_ID', '=', $id)
                ->get();

        foreach( $blogs as $blog ){
            if ($blog->ACTIVE_STATUS == '1') {
                $update = DB::table('process_blog')
                        ->where('BLOG_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '0'
                        ]);
            }
            elseif ($blog->ACTIVE_STATUS == '0') {
                $update = DB::table('process_blog')
                        ->where('BLOG_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '1'
                        ]);
            }
        }


        //
        $blogs = DB::table('process_blog')
                    ->join('process_blog_category', 'process_blog_category.BLOG_CATEGORY_ID', '=', 'process_blog.BLOG_CATEGORY_ID')
                    ->select('process_blog.*', 'process_blog_category.CATEGORY_NAME')
                    ->where('process_blog.BLOG_ID', $id)
                    ->paginate(1);
        //
        return view('admin.blog_list')->with('blogs', $blogs);

    }
}
