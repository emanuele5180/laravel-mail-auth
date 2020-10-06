<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller {

  public function index(){

    $tab = Post::all();
    return view ('home', compact('tab'));
  }

  public function show($id){

    $xxx = Post::findOrFail($id);

     return view ('show', compact('xxx'));
  }
}
