<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ViewServiceController extends Controller
{
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
                    ->orderBy('SL_NO', 'ASC')
                    ->get();

        //
        return view('services')->with('services', $services);
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
        $services = DB::table('process_service')
                    ->select('process_service.*')
                    ->where('process_service.SERVICE_ID', $id)
                    ->where('process_service.ACTIVE_STATUS', '1')
                    ->get();

        $sub_services = DB::table('process_service')
                    ->select('process_service.*')
                    ->where('ACTIVE_STATUS', '1')
                    ->where('PARENT_SERVICE_ID', '=', $id)
                    ->orderBy('SL_NO', 'ASC')
                    ->get();

        //
        $images = DB::table('process_service_image')
                    ->select('process_service_image.*')
                    ->where('process_service_image.SERVICE_ID', $id)
                    ->where('process_service_image.ACTIVE_STATUS', '1')
                    ->orderBy('SL_NO', 'ASC')
                    ->get();

        //
        return view('service-details')->with('services', $services)
                                    ->with('sub_services', $sub_services)
                                    ->with('images', $images);
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
