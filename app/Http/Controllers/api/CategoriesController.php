<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
class CategoriesController extends Controller
{
  public function index(){
    return response()->json([
      'response'=> Category::all()
    ]);
  }
}
