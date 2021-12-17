<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Directory;
use App\Office;
use App\Category;
use DB;
use Illuminate\Support\Facades\Cookie;

class OfficeController extends Controller
{
    public function index()
    {
        $directory = Directory::with('office')->get();
        $offices = Office::all(); 
        $category = Category::get(); 
        return view('pages.welcome', compact('directory', 'offices','category'));

    }

    // get all filtered directories
    public function list($id)
    {
        // $directory = Directory::with('office')->get();
        $offices = Office::where('category_id', $id)->orderby('office','asc')->get(); 
        return view('directories.index', compact('offices', 'id'));
    }

   
    public function show(Request $request, $id)
    {
        $directories = Directory::where('office_id', $id)->get();
        return view('directories.show', compact('directories'));
    }
    public function print ()
    {
        $directories = Directory::with('office')->orderBy('directory_no','asc')->get(); 
        $directories = DB::table('directories')
                            ->select('directories.*', 'offices.office')
                            ->join('offices','directories.office_id','offices.id')
                            ->orderby('offices.office', 'asc')
                            ->get();
        // dd($directories);
        return view('directories.print', compact('directories'));
    }

    
   public function create()
   {
       $office = Office::orderBy('office', 'asc')->get();
       return view('directories.create', compact('office'));
   }
   
   public function store(Request $request)
    {
        $office = Directory::create($request->all());
        return redirect('/')->with('success','Successfully add');
    }
   
}
