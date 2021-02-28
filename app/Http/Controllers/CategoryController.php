<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = Category::all();

      return view('categorie.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorie.create');
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
          'categoria' => 'required',
          'descrizione' => 'required',
      ]);


      $newCategory = new Category;
      $newCategory->categoria = $request->categoria;
      $newCategory->descrizione = $request->descrizione;
      $newCategory->save();
      return redirect()->route('categorie.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show( $category)
    {
      $categorytarget = Category::find($category);

      return view('categorie.show', compact('categorytarget'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit( $category)
    {
      $categorytarget = Category::find($category);

      return view('categorie.edit', compact('categorytarget'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $category)
    {
      $request->validate([
          'categoria' => 'required',
          'descrizione' => 'required',
      ]);


      $categorytarget = Category::find($category);
      $categorytarget->categoria = $request->categoria;
      $categorytarget->descrizione = $request->descrizione;
      $categorytarget->update();
      return redirect()->route('categorie.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
      $categorytarget = Category::find($category);
      $categorytarget->delete();
      return redirect()->route('categorie.index');

    }
}
