<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(Category $category) {
        //引数をCategoryにすることで表示させるものを限定化させることができる
        return view('categories.index')->with(['posts' =>$category->getByCategory()]);    
    }
    
}
