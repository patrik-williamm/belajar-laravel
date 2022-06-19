<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.categories.index', [
            'title' => 'Categories',
            'categories' => Categories::all() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create', [
            'title' => 'Create Category'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name_categories' => 'required|unique:Categories|max:255'
        ]);

        $validateData['slug'] = Str::of($request->name_categories)->upper()->slug('-');

        Categories::create($validateData);
        return redirect('dashboard/categories')->with('status', 'Data added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $Categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories)
    {
        return view('dashboard.categories.update', [
            'title' => 'Update Categories',
            'category' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $Categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $Categories)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $Categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $Categories)
    {
        //
    }
}
