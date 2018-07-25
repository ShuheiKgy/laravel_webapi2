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
        return view('rest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Restdata $restdata, Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        $restdata->fill($form)->save();
        return redirect()->route('rest.index');
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
    public function edit(Restdata $restdata, $id)
    {
        $item = Restdata::find($id);
        return view('rest.edit')->with(['rest' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restdata  $restdata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $restdata = Restdata::find($request->id);
        if ($request->input('name')) {
            $restdata->name = $request->input('name');
        }
        if ($request->input('message')) {
            $restdata->message = $request->input('message');
        }

        $restdata->update();

        return redirect()->route('rest.index');
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
