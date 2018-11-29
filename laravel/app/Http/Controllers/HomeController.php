<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $produtos = Produto::orderBy('produto_id', 'desc')->take(4)->get();

       return view('home')->with('produtos', $produtos);
    }
}
