<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller
{
    public function produtos(){
      $produtos = Produto::paginate(1);

      return view('produtos')->with('produtos', $produtos);
    }
    public function produto($id){
      $produto = Produto::find($id);

      return view('produto')->with('produto', $produto);
    }
}
