<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Office;


class AddofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $office = Office::orderBy('office','asc')->get();
        return view('addoffice.index', compact('office'));
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
        $request->validate([
            'office'  =>  'required',
            'category_id'  =>  'required',
        ]);
        $add = Office::create($request->all());
        return $add;
    }

    public function edit_office(Request $request)
    {
        return  Office::where ('id', $request->id)->first();
    }

    public function update_office(Request $request)
    {
        $request->validate([
            'category_id'  =>  'required',
        ]);

        $request['office'] = $request->office_id;
            $add = Office::findOrFail($request->id);
            $add->update($request->all());
            return $add;

    }


    // public function delete_office(Request $request)
    //     {
    //         $addoffice = Office::where ('id', $request->id)->first();
    //         $addoffice->delete();
    //         return $addoffice;

    //     }

   
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
