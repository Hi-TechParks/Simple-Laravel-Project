<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class ViewBlogController extends Controller
{
    public function dateFormat(){
        $today = Carbon::now();
        return $today->toDateString();
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
                ->select('process_blog.*')
                ->where('ACTIVE_STATUS', '1')
                ->where('BLOG_TITLE', 'LIKE', '%'.$request->get('blog_title').'%')
                ->orWhere('BLOG_CONTENT', 'LIKE', '%'.$request->get('blog_title').'%')
                ->where('PUBLISH_START_DATE', '<=', $this->dateFormat())
                ->where('PUBLISH_END_DATE', '>=', $this->dateFormat())
                ->orderBy('BLOG_ID', 'DESC')
                ->paginate(9);

        //
        $blog_cats = DB::table('process_blog_category')
                    ->select('process_blog_category.*')
                    ->where('ACTIVE_STATUS', '1')
                    ->orderBy('CATEGORY_NAME', 'ASC')
                    ->get();
        //
        return view('blog')->with('blogs', $blogs)->with('blog_cats', $blog_cats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category(Request $request, $cat_id)
    {
        //
        $blogs = DB::table('process_blog')
                ->select('process_blog.*')
                ->where('ACTIVE_STATUS', '1')
                ->where('process_blog.BLOG_CATEGORY_ID', $cat_id)
                ->orderBy('BLOG_ID', 'DESC')
                ->paginate(9);

        //
        $blog_cats = DB::table('process_blog_category')
                    ->select('process_blog_category.*')
                    ->where('ACTIVE_STATUS', '1')
                    ->orderBy('CATEGORY_NAME', 'ASC')
                    ->get();
        //
        return view('blog-category')->with('blogs', $blogs)->with('blog_cats', $blog_cats);
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
                ->select('process_blog.*')
                ->where('BLOG_ID', $id)
                ->where('ACTIVE_STATUS', '1')
                ->orderBy('BLOG_ID', 'DESC')
                ->get();
        //
        return view('blog-details')->with('blogs', $blogs);
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
}
