<?php

namespace App\Http\Controllers;
use App\Article;
use App\Category;
use App\Tag;
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
      $tags = Tag::all();

      return view('articoli.create', compact('categories','tags'));
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
          'titolo' => 'required',
          'autore' => 'required',
          'contenuto' => 'required',
          'category_id' =>'exists:categories,id',
          'tags' => 'exists:tags,id'
      ]);


      $newArticle = new Article;
      $newArticle->titolo = $request->titolo;
      $newArticle->contenuto = $request->contenuto;
      $newArticle->autore = $request->autore;
      $newArticle->category_id = $request->categoria;
      $newArticle->img = 'https://placeimg.com/640/480/tech'.rand(1,100);
      $newArticle->x = rand(-9, 20);
      $newArticle->y = rand(-9, 20);
      $newArticle->save();
      $newArticle->tags()->attach($request->tags);

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
      $tags = Tag::all();

      return view('articoli.edit', compact('articletarget','categories','tags'));

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

      $request->validate([
          'titolo' => 'required',
          'autore' => 'required',
          'contenuto' => 'required',
          'category_id' =>'required | exist:categories,id',
          'category_id' =>'required | exist:categories,id',
          'tags' => 'exist:tags,id'
      ]);


      $articletarget = Article::find($article);
      $articletarget->titolo = $request->titolo;
      $articletarget->contenuto = $request->contenuto;
      $articletarget->autore = $request->autore;
      $articletarget->category_id = $request->categoria;
      $articletarget->img = 'https://placeimg.com/640/480/tech'.rand(1,100);
      $articletarget->update();
      $articletarget->tags()->sync($request->tags);
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
