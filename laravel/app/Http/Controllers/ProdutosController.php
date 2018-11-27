<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categorias;

class ProdutosController extends Controller
{
    public function novo(){
      $categoria = Categorias::all();

      return view('adicionarProduto')->with('listaDeCategorias' , $categoria);
    }

    public function adicionarProduto(Request $request){

        $produtos = Produto::create([
        'cor'=>$request->input('cor'),
        'tamanho'=>$request->input('tamanho'),
        'SKU'=>$request->input('SKU'),
        'EAN'=>$request->input('EAN'),
        'preco'=>$request->input('preco'),
        'estoque'=>$request->input('estoque'),
        'nome'=>$request->input('nome'),
        'descricao'=>$request->input('descricao'),
        'peso'=>$request->input('peso'),
        'largura'=>$request->input('largura'),
        'altura'=>$request->input('altura'),
        'comprimento'=>$request->input('comprimento'),
        'data_validade'=>$request->input('data_validade'),
        'lote_num'=>$request->input('lote_num'),
        'tipo_de_produto'=>$request->input('tipo_de_produto'),
        'fornecedor'=>$request->input('fornecedor'),
        'fk_categoria_id'=>$request->input('fk_categoria_id')
      ]);
      $produtos->save();
      return redirect('/produtos');
    }
    // CRUD (Create) é executar um INSERT.



    public function produto($id){
      $produto = Produto::find($id);

      return view('produto')->with('produto', $produto);
    }

    public function produtos(){
      $produtos = Produto::paginate(4);

      return view('produtos')->with('produtos', $produtos);
    }
    // CRUD (Read) - é executar um SELECT.



    public function atualizar($id){
      $produto = Produto::find($id);
      $categoria = Categorias::all();

      return view('atualizarProduto')->with('produtos', $produto)->with('listaDeCategorias' , $categoria);
    }

    public function atualizarProduto(Request $request, $id){

      $produto = Produto::find($id);
      $produto->cor = $request->input('cor');
      $produto->tamanho = $request->input('tamanho');
      $produto->SKU = $request->input('SKU');
      $produto->EAN = $request->input('EAN');
      $produto->preco = $request->input('preco');
      $produto->estoque = $request->input('estoque');
      $produto->nome = $request->input('nome');
      $produto->descricao = $request->input('descricao');
      $produto->peso = $request->input('peso');
      $produto->largura = $request->input('largura');
      $produto->comprimento = $request->input('comprimento');
      $produto->data_validade = $request->input('data_validade');
      $produto->lote_num = $request->input('lote_num');
      $produto->tipo_de_produto = $request->input('tipo_de_produto');
      $produto->fornecedor = $request->input('fornecedor');
      $produto->fk_categoria_id = $request->input('fk_categoria_id');
      $produto->save();

      return redirect('/produtos');

      // CRUD (Update) - é executar uma ATUALIZAÇÃO.

    }


    public function excluir($id){
      $produto = Produto::find($id);
      $categoria = Categorias::all();

      return view('excluirProduto')->with('produtos', $produto)->with('listaDeCategorias' , $categoria);
    }

    public function excluirProduto(Request $request,$id){
      $produto = Produto::find($id);
      $produto->delete();
      return redirect('/produtos');
    }
    // CRUD (Delete) - é executar um DELETE.
}
