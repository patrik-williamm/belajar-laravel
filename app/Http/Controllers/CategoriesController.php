<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{

    public function index() {
        return view('categories', [
            'title' => 'Categories All',
            'categories' => Categories::all()
        ]);
    }
    
    public function showCategories(Categories $categories) {
        return view('category', [
            'title' => 'Category',
            'name' => $categories->name,
            'post' => $categories->posts
        ]);
    }
}
