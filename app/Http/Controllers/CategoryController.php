<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function __construct(Category $category)
    {
        return $this->model->where('category_name', $request->category_name)->get();
    }
}
