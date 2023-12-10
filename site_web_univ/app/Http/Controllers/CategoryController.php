<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $categories = Category::all();
        return view('categories.index',compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //
        $categories= Category::all();
        return view('categories.create',compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name'=>'required'
        ]);
        Category::create($validated);
         return redirect()->back()->with("success","categorie ajouter avec succès !");
    }
    /**
     *
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //

    }
    /**
     * Show the form for editing the specified resource.
     */
     public function edit(Category $category)
     {
        //
        $categories= Category::all();

         return view('categories.edit',compact("category","categories"));
     }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
        $validated = $request->validate([
            'name'=>'required'
        ]);

        $category->update($validated);
        return redirect()->route('categories.index')->with("success","le categorie a été modifié!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
         $category->delete();
         return redirect()->route('categories.index')->with("success","la categorie a été suprimé !");
    }
}
