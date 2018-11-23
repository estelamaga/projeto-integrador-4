<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller
{
    public function listaProduto(){
      $produtos = Produto::all();
      
      return view('produtos')->with('listaProduto', $produtos);
    }

    public function novo(){
      return view('novoProduto');
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
      $produtos = Produto::paginate(3);

      return view('produtos')->with('produtos', $produtos);
    }
    // CRUD (Read) - é executar um SELECT.



    public function atualizar($id){
      $produto = Produto::find($id);
      return view('produtos')->with('produtos', $produto);
    }

    public function atualizarProduto(Request $request, $id){
      $request->validate([
        'cor'=> 'required',
        'tamanho'=>'required',
        'SKU'=> 'required',
        'EAN'=>'required',
        'preco'=> 'required',
        'estoque'=> 'required',
        'nome'=> 'required',
        'descricao'=> 'required',
        'peso'=> 'required',
        'largura'=> 'required',
        'altura'=> 'required',
        'comprimento'=> 'required',
        'data_validade'=> 'required',
        'lote_num'=> 'required',
        'tipo_de_produto'=> 'required',
        'fornecedor'=>'required',
        'fk_categoria_id'=>'required'
      ]);

      $produto = Produto::find($id);
      $produto->cor = $request->input('cor');

    }


    public function excluir($id){
      $produto = Produto::find($id);
      return view('produtosExcluir')->with('produtos',$produto);
    }

    public function excluirProduto(Request $request,$id){
      $produto = Produto::find($id);
      $produto->delete();

      return redirect('/produtos');
    }
    // CRUD (Delete) - é executar um DELETE.
}
