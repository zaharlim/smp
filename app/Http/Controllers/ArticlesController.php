<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Carbon\Carbon;

class ArticlesController extends Controller
{
   public function index() 
   {
   		$articles = \App\Article::latest('created_at')->Created()->get();
   		return view('articles.index', compact('articles'));
   }
   public function show($id) 
   {
   		
   		$articles = \App\Article::find($id);
   		return view('articles.show', compact('articles'));
   }
   public function create()
   {
   		//$articles = \App\Article::find($id);
   		return view('articles.create');
   }
   public function store(CreateArticleRequest $request)
   {
   		//$input = Request::all();
   		\App\Article::create($request->all());

   		return redirect('articles');
   }
}
