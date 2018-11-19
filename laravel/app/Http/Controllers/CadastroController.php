<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Pessoa_fisica;
use App\Pessoa_juridica;

class CadastroController extends Controller
{
    public function cadastro(){
      return view('cadastro');
    }

    public function cadastroPessoaFisica(Request $request){

      $usuario = User::create([
        'email' => $request->input('email'),
        'password' =>  $request->input('password')
      ]);

      $usuario->save();

      $pf = Pessoa_fisica::create([
        'name' => $request->input('name'),
        'sobrenome' => $request->input('sobrenome'),
        'data_de_nascimento' => $request->input('data_de_nascimento'),
        'telefone' => $request->input('telefone'),
        'cpf' => $request->input('cpf'),
        'sexo' => $request->input('sexo'),
        'users_usuario_id' => $usuario->usuario_id
      ]);

      $pf->save();

      return redirect('/login')->with('status', 'Perfil atualizado!');
    }

    public function cadastroPessoaJuri(Request $request){

      $usuario = User::create([
        'email' => $request->input('email'),
        'password' =>  $request->input('password')
      ]);

      $usuario->save();
      $pj = Pessoa_juridica::create([
        'nome_fantasia' => $request->input('nome_fantasia'),
        'cnpj' => $request->input('cnpj'),
        'users_usuario_id' => $usuario->usuario_i
      ]);


      $pj->save();

      return redirect('/login')->with('status', 'Perfil atualizado!');
    }

}
