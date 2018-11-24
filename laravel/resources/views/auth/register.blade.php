@extends('layouts.master')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12"><!-- Container Geral -->
      <div class="col-xs-12">
        <!-- @if($errors->any())
        <div class="alert alert-danger" role="alert">
          <ul>
            @foreach ($errors->all() as $erro)
            <li>{{$erro}}</li>
            @endforeach
          </ul>
        </div>
        @endif -->
        <h1>Cadastro</h1>
      </div>
      <div class="col-xs-12">
        <ul  class="nav nav-pills">
    			<li class="active">
            <a  href="#pessoa-fisica" data-toggle="tab">Pessoa Fisica</a>
    			</li>
    			<li><a href="#pessoa-juridica" data-toggle="tab">Pessoa Jurídica</a>
    			</li>
    		</ul>
        <div class="tab-content clearfix">
  			  <div class="tab-pane active" id="pessoa-fisica">
            <form id="pessoa_fisica" action="/cadastro/pessoa-fisica" method="post" enctype="multipart/form-data" class="row"><!-- Inicio Form -->
              {{ csrf_field() }}
              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username_pf" maxlength="40"  name="username" placeholder="Insira seu username" required><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                  <label for="ex1">Nome*</label>
                  <input type="text" class="form-control" id="name_pf" maxlength="40"  name="name" placeholder="Insira seu nome" required><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                  <label for="ex1">Sobrenome*</label>
                  <input type="text" class="form-control" id="sobrenome_pf" maxlength="40"  name="sobrenome" placeholder="Insira seu sobrenome" required><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                  <label for="ex1">Data de Nascimento</label>
                  <input type="date" class="form-control" id="data_de_nascimento_pf" maxlength="40"  name="data_de_nascimento" placeholder="Ex: 01/01/1999"><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                  <label for="ex1">CPF*</label>
                  <input type="text" class="form-control" id="cpf_pf" maxlength="40"  name="cpf" placeholder="Ex: 123.456.789-12" required><br>
                </div>
              </div><!-- Fim Div -->


              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                  <label for="ex2">Email*</label>
                  <input type="email" class="form-control" id="email_pf" maxlength="50"  name="email" placeholder="usuario@usuario.com" required><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                  <label for="ex1">Sexo</label>
                  <input type="text" class="form-control" id="sexo_pf" maxlength="40"  name="sexo" placeholder="Insira seu sexo"><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                  <label for="ex2">Telefone*</label>
                  <input type="text" class="form-control" id="telefone_pf" maxlength="50"  name="telefone" placeholder="Ex: (99) 99999-9999" required><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                  <label for="ex3">Senha*</label>
                  <input type="password" class="form-control" id="password_pf" maxlength=15  name="password" placeholder="Informe sua senha" required><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                  <label for="ex4">Confirmar Senha*</label>
                  <input type="password" class="form-control" id="confirma_senha_pf" maxlength=15  name="confirma_senha" placeholder="Confirme sua senha" required><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                  <div class="erros"></div>
                  <label for="camposObrigadtorios">* Campos obrigatórios</label><br><br>
                  <label for="ex1">Faça upload da sua foto de perfil</label>
                  <input type="file" name="fotoPerfil"><br>
                </div>
              </div>

              <div class="col-lg-5 col-md-12 col-sm-12 text-center"><!-- Inicio Button -->
                <div class="col-lg-2 col-md-6 col-sm-3">
                  <button id="botaocad1" type="button" onclick="validarFormulario(document.forms['pessoa_fisica'])" name="button" class="btn btn-success">Cadastrar</button>
                </div>
              </div><!-- Fim Button -->

            </form><!-- Fim Form -->
  				</div>
  				<div class="tab-pane" id="pessoa-juridica">
            <form  id="pessoa_juridica" action="/cadastro/pessoa-juridica" method="post" enctype="multipart/form-data" class="row"><!-- Inicio Form -->
              {{ csrf_field() }}
              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                  <label for="ex1">Username</label>
                  <input type="text" class="form-control" id="username_pj" maxlength="40"  name="username" placeholder="Insira seu username" required><br>
                </div>
              </div><!-- Fim Div -->
              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                  <label for="ex1">Nome da Empresa*</label>
                  <input type="text" class="form-control" id="name_pj" maxlength="40"  name="name" placeholder="Insira seu nome" required><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                  <label for="ex1">CNPJ*</label>
                  <input type="text" class="form-control" id="cnpj_pj" maxlength="40"  name="cnpj" placeholder="Insira seu cnpj" required><br>
                </div>
            </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                  <label for="ex2">Email*</label>
                  <input type="email" class="form-control" maxlength="50"  name="email" id="email_pj" placeholder="usuario@usuario.com" required ><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                  <label for="ex3">Senha*</label>
                  <input type="password" class="form-control" id="senha_pj" maxlength=15  name="password" placeholder="Informe sua senha" required><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                  <label for="ex4">Confirmar Senha*</label>
                  <input type="password" class="form-control" id="confirma_senha_pj" maxlength=15  name="confirma_senha" placeholder="Confirme sua senha" required><br>
                </div>
              </div><!-- Fim Div -->



              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                  <div class="erros"></div>
                  <label for="camposObrigadtorios">* Campos obrigatórios</label><br><br>
                  <label for="ex1">Faça upload da sua foto de perfil</label>
                  <input type="file" name="fotoPerfil"><br>
                </div>
              </div>

              <div class="col-md-12 text-center">
                <div class="col-lg-5 col-md-12 col-sm-12"><!-- Inicio Button -->
                    <button id="botaocad2" type="button" onclick="validarFormulario(document.forms['pessoa_juridica'])" name="button" class="btn btn-success">Cadastrar</button>
                </div><!-- Fim Button -->

            </form><!-- Fim Form -->
  				</div>
        </div>
      </div>


    </div><!-- Fim Panel Panel-Default -->
  </div><!-- Fim Conteiner Geral -->
</div> <!-- Fim da Row -->
</div>
<script src = "/js/validacao.js"></script>


@stop
