<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Pessoa_fisica;
use App\Pessoa_juridica;

class CadastroController extends Controller
{

    public function cadastroPessoaFisica(Request $request){

      $validator = Validator::make([
       'email' => 'required|string|email|max:255|unique:users'
      ])

      // $this->validate($request,[
      //   'email'=> 'required|unique:users,email',
      //   'password'=> 'required',
      //   'username'=> 'required'
      //
      // ]);

      $usuario = User::create([
        'email' => $request->input('email'),
        'password' =>  $request->input('password'),
        'username'=> $request->input('username')
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

      return redirect('/login');
    }

    public function cadastroPessoaJuridica(Request $request){

      $usuario = User::create([
        'email' => $request->input('email'),
        'password' =>  $request->input('password'),
        'username'=> $request->input('username')
      ]);

      $usuario->save();

      $pj = Pessoa_juridica::create([
        'nome_fantasia' => $request->input('name'),
        'cnpj' => $request->input('cnpj'),
        'users_usuario_id' => $usuario->usuario_id
      ]);

      $pj->save();

      return redirect('/login');
    }

}
