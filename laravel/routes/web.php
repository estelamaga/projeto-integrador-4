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
    return redirect('/home');
});

Route::get('/about', 'AboutController@about');
Route::post('/cadastro/pessoa-fisica', 'CadastroController@cadastroPessoaFisica');
Route::post('/cadastro/pessoa-juridica', 'CadastroController@cadastroPessoaJuridica');
Route::get('/comingsoon', 'ComingsoonController@comingsoon');
Route::get('/contato', 'ContatoController@contato');
Route::get('/esqueciminhasenha', 'EsqueciMinhaSenhaController@esqueciminhasenha');
Route::get('/faq', 'FaqController@faq');
Route::get('/logados', 'LogadosController@logados');
Route::get('/login', 'LoginController@login');


Route::get('/produtos/exibir/{id}', 'ProdutosController@produto'); //funciona
Route::get('/produtos', 'ProdutosController@produtos');//funciona


Route::get('/produtos/adicionar', 'ProdutosController@novo'); // create --funciona
Route::post('/produtos/adicionar', 'ProdutosController@AdicionarProduto'); // create post --funciona
Route::get('/produtos/atualizar/{id}', 'ProdutosController@atualizar');// funciona
Route::put('/produtos/atualizar/{id}', 'ProdutosController@atualizarProduto');// funciona
Route::get('/produtos/excluir/{id}', 'ProdutosController@excluir');//funciona
Route::delete('/produtos/excluir/{id}', 'ProdutosController@excluirProduto');//funciona


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
