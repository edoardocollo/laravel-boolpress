<?php

namespace App\Http\Controllers;
use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        return view('articoli.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::all();

      return view('articoli.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $newArticle = new Article;
      $newArticle->titolo = $request->titolo;
      $newArticle->contenuto = $request->contenuto;
      $newArticle->autore = $request->autore;
      $newArticle->category_id = $request->categoria;
      $newArticle->img = 'https://placeimg.com/640/480/tech'.rand(1,100);
      $newArticle->save();
      return redirect()->route('articoli.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show( $article)
    {
      $articletarget = Article::find($article);

      return view('articoli.show', compact('articletarget'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit( $article)
    {
      $articletarget = Article::find($article);
      $categories = Category::all();
      return view('articoli.edit', compact('articletarget','categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $article)
    {

      $articletarget = Article::find($article);
      $articletarget->titolo = $request->titolo;
      $articletarget->contenuto = $request->contenuto;
      $articletarget->autore = $request->autore;
      $articletarget->category_id = $request->categoria;
      $articletarget->img = 'https://placeimg.com/640/480/tech'.rand(1,100);
      $articletarget->update();
      return redirect()->route('articoli.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($article)
    {
      $articletarget = Article::find($article);
      $articletarget->delete();
      return redirect()->route('articoli.index');

    }
}
