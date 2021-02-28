<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tags = Tag::all();

      return view('tags.index', compact('tags'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tags.create');
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
          'tag' => 'required',
          'descrizione' => 'required',
      ]);


      $newTag = new Tag;
      $newTag->tag = $request->tag;
      $newTag->descrizione = $request->descrizione;
      $newTag->save();
      return redirect()->route('tags.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show( $tag)
    {
      $tagtarget = Tag::find($tag);

      return view('tags.show', compact('tagtarget'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit($tag)
    {
      $tagtarget = Tag::find($tag);

      return view('tags.edit', compact('tagtarget'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $tag)
    {
      $request->validate([
          'tag' => 'required',
          'descrizione' => 'required',
      ]);


      $tagtarget = Tag::find($tag);
      $tagtarget->tag = $request->tag;
      $tagtarget->descrizione = $request->descrizione;
      $tagtarget->update();
      return redirect()->route('tags.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy( $tag)
    {
      $tagtarget = Tag::find($tag);
      $tagtarget->delete();
      return redirect()->route('tags.index');


    }
}
