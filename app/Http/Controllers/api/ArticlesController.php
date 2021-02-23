<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
class ArticlesController extends Controller
{
    public function index(){
      return response()->json([
        'response'=> Article::all()
      ]);
    }
}
