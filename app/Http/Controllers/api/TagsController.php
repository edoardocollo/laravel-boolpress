<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tag;
class TagsController extends Controller
{
  public function index(){
    return response()->json([
      'response'=> Tag::all()
    ]);
  }
}
