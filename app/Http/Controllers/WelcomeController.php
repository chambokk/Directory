<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Directory;
use App\Office;
class WelcomeController extends Controller
{
    public function index()
    {
        $directory = Directory::with('office')->get();
        return view('Welcome', compact('directory'));  
    }
}
