<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', 'AboutController@about');
Route::post('/cadastro/pessoa-fisica', 'CadastroController@cadastroPessoaFisica');
Route::post('/cadastro/pessoa-juridica', 'CadastroController@cadastroPessoaJuridica');
Route::get('/comingsoon', 'ComingsoonController@comingsoon');
Route::get('/contato', 'ContatoController@contato');
Route::get('/esqueciminhasenha', 'EsqueciMinhaSenhaController@esqueciminhasenha');
Route::get('/faq', 'FaqController@faq');
//Route::get('/home', 'HomeController@index');
Route::get('/logados', 'LogadosController@logados');
Route::get('/login', 'LoginController@login');


Route::get('/produto', 'ProdutosController@listaProduto');
Route::get('/produto/adicionar', 'ProdutosController@novo');
Route::post('/produto/adicionar', 'ProdutosController@AdicionarProduto');


Route::get('/produto/{id}', 'ProdutosController@produto'); //funciona
Route::get('/produtos', 'ProdutosController@produtos');//funciona


Route::get('/produtos/atualizar/{id}', 'ProdutosController@atualizar');
Route::get('/produtos/atualizar/{id}', 'ProdutosController@atualizarProduto');

Route::get('/produtos/excluir/{id}', 'ProdutosController@excluir');
Route::delete('/produtos/excluir/{id}', 'ProdutosController@excluirProduto');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
