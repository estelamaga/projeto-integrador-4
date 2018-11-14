<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;

class CadastroController extends Controller
{
    public function cadastro(){
      return view('cadastro');
    }
    public function cadastroPessoaFisica(Request $request){
      $usuario = Usuarios::create([
        'nome' => $request->input('nome'),
        'sobrenome' => $request->input('sobrenome'),
        'data_de_nascimento' => $request->input('data_de_nascimento'),
        'telefone' => $request->input('telefone'),
        'email' => $request->input('email'),
        'senha' => $request->input('senha'),
        'cpf_cnpj' => $request->input('cpf'),
        'sexo' => $request->input('sexo')
      ]);


      $usuario->save();
    }
}
