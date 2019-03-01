<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class ViewNewsController extends Controller
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
        $events = DB::table('process_event')
                ->select('process_event.*')
                ->where('ACTIVE_STATUS', '1')
                ->where('PUBLISH_START_DATE', '<=', $this->dateFormat())
                ->where('PUBLISH_END_DATE', '>=', $this->dateFormat())
                ->orderBy('EVENT_ID', 'DESC')
                ->paginate(9);
        //
        return view('news')->with('events', $events);
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
        $events = DB::table('process_event')
                ->select('process_event.*')
                ->where('EVENT_ID', $id)
                ->where('ACTIVE_STATUS', '1')
                ->orderBy('EVENT_ID', 'DESC')
                ->get();
        //
        return view('news-details')->with('events', $events);
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
