<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Auth;
use DB;

class BlogCategoryController extends Controller
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
        $blog_cats = DB::table('process_blog_category')
                    ->select('process_blog_category.*')
                    ->where('CATEGORY_NAME', 'LIKE', '%'.$request->get('blog_category').'%')
                    ->orderBy('BLOG_CATEGORY_ID', 'DESC')
                    ->paginate(10);
        //
        return view('admin.blog_category_list')->with('blog_cats', $blog_cats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.blog_category_create');
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
            'blog_category' => 'required'
        ]);


        // Primary Key Generator
        $primary_key = DB::table('process_blog_category')
                    ->select('process_blog_category.BLOG_CATEGORY_ID')
                    ->max('BLOG_CATEGORY_ID');

        if (isset($primary_key)) {
            $blog_cat_id = $primary_key + '1';
        }
        else {
            $blog_cat_id = '20190001';
        }


        //
        $insert = DB::table('process_blog_category')
                    ->insert([
                        'BLOG_CATEGORY_ID' => $blog_cat_id,
                        'CATEGORY_NAME' => $request->get('blog_category'),
                        'ACTIVE_STATUS' => '1',
                        'ENTERED_BY' => Auth::user()->id,
                        'ENTRY_TIMESTAMP' => Carbon::now()
                    ]);

        Session::flash('success', 'Blog Category Created Successfully!'); 
        //
        return redirect()->route('blogcate.create');
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
        $blog_cats = DB::table('process_blog_category')
                    ->select('process_blog_category.*')
                    ->where('BLOG_CATEGORY_ID', $id)
                    ->get();
        //
        return view('admin.blog_category_edit')->with('blog_cats', $blog_cats);
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
            'blog_category' => 'required'
        ]);

        //
        $update = DB::table('process_blog_category')
                    ->where('BLOG_CATEGORY_ID', $id)
                    ->update([
                        'CATEGORY_NAME' => $request->get('blog_category'),
                        'UPDATED_BY' => Auth::user()->id,
                        'UPDATE_TIMESTAMP' => Carbon::now()
                    ]);

        Session::flash('success', 'Blog Category Updated Successfully!');

        //
        return redirect()->route('blogcate.edit', [$id]);
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
        $blog_cats = DB::table('process_blog_category')
                ->select('process_blog_category.*')
                ->where('process_blog_category.BLOG_CATEGORY_ID', '=', $id)
                ->get();

        foreach( $blog_cats as $blog_cat ){
            if ($blog_cat->ACTIVE_STATUS == '1') {
                $update = DB::table('process_blog_category')
                        ->where('BLOG_CATEGORY_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '0'
                        ]);
            }
            elseif ($blog_cat->ACTIVE_STATUS == '0') {
                $update = DB::table('process_blog_category')
                        ->where('BLOG_CATEGORY_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '1'
                        ]);
            }
        }

        
        //
        $blog_cats = DB::table('process_blog_category')
                    ->select('process_blog_category.*')
                    ->where('BLOG_CATEGORY_ID', $id)
                    ->orderBy('BLOG_CATEGORY_ID', 'DESC')
                    ->paginate(1);
        //
        return view('admin.blog_category_list')->with('blog_cats', $blog_cats);

    }
}
