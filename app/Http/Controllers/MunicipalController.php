<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Directory;
use App\Office;
use DB;

class MunicipalController extends Controller
{
    public function index()
    {
        $directory = Directory::with('office')->get();
        $offices = Office::all(); 
        return view('directories.municipal', compact('directory', 'offices'));
    }

    public function show(Request $request)
    {
        $directories = Directory::where('office_id', $request->office)->get();
        return view('directories.show', compact('directories'));
    }
}
