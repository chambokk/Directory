<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Directory;
use App\Office;
use App\User;

class DirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $office = Office::all();
        $directory = Directory::with('office')->paginate(15);
        // dd($directory);
        return view ('create.index', compact('office', 'directory'));
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
            'contact_name'  =>  'required',
            'directory_no'  =>  'required',
            
        ]);
        $add = Directory::create($request->all());
        return $add;
    }

    public function edit_directory(Request $request)
        {
            return  Directory::where ('id', $request->id)->first();
        }
    
        public function update_directory(Request $request)
        {
           
            $request->validate([
                'office_id'  =>  'required',
                'contact_name'  =>  'required',
                'directory_no'  =>  'required',
            ]);

                $create = Directory::findOrFail($request->id);
                $create->update($request->all());
                return $create;

        }

    public function delete_directory(Request $request)
    {
        $create = Directory::where ('id', $request->id)->first();
        $create->delete();
        return $create;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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

    public function update_password(Request $request) 
    {
        $user = User::findOrFail(auth()->user()->id);
        $old = $request->password;
        $request['password'] = bcrypt($request->password);
        $user->update($request->all());
        return "Password successfully changed!";

    }
}
