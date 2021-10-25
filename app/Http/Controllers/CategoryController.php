<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function __construct(Category $category)
    {
        return $this->model->where('category', $request->category)->get();
    }
}
