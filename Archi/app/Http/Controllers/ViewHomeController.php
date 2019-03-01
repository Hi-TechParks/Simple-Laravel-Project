<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class ViewHomeController extends Controller
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
    public function index()
    {
        //
        $services = DB::table('process_service')
                    ->select('process_service.*')
                    ->where('ACTIVE_STATUS', '1')
                    ->where('PARENT_SERVICE_ID', '=', NULL)
                    ->where('HOME_PAGE_SHOW', '1')
                    ->orderBy('SL_NO', 'ASC')
                    ->take(4)
                    ->get();
        //
        $blogs = DB::table('process_blog')
                ->select('process_blog.*')
                ->where('ACTIVE_STATUS', '1')
                ->where('PUBLISH_START_DATE', '<=', $this->dateFormat())
                ->where('PUBLISH_END_DATE', '>=', $this->dateFormat())
                ->orderBy('BLOG_ID', 'DESC')
                ->take(6)
                ->get();

        //
        $events = DB::table('process_event')
                ->select('process_event.*')
                ->where('ACTIVE_STATUS', '1')
                ->where('PUBLISH_START_DATE', '<=', $this->dateFormat())
                ->where('PUBLISH_END_DATE', '>=', $this->dateFormat())
                ->orderBy('EVENT_ID', 'DESC')
                ->take(6)
                ->get();

        //
        return view('index')->with('services', $services)
                            ->with('blogs', $blogs)
                            ->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
