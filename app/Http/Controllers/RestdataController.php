<?php

namespace App\Http\Controllers;

use App\Restdata;
use Illuminate\Http\Request;

class RestdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Restdata::all();
        return response($items->toArray());
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
    public function store(Restdata $restdata)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show(Restdata $restdata, $id)
    {
        $item = Restdata::find($id);
        return response($item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restdata  $restdata
     * @return \Illuminate\Http\Response
     */
    public function edit(Restdata $restdata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restdata  $restdata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restdata $restdata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restdata  $restdata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restdata $restdata)
    {
        //
    }
}
