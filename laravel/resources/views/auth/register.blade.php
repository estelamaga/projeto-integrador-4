@extends('layouts.master')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12"><!-- Container Geral -->
      <div class="col-xs-12">
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
            <form  action="/cadastro/pessoa-fisica" method="post" enctype="multipart/form-data" class="row"><!-- Inicio Form -->
              {{ csrf_field() }}
              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-6">
                  <label for="ex1">Nome</label>
                  <input type="text" class="form-control" id="name" maxlength="40"  name="name" placeholder="Insira seu nome"><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-6">
                  <label for="ex1">Sobrenome</label>
                  <input type="text" class="form-control" id="sobrenome" maxlength="40"  name="sobrenome" placeholder="Insira seu nome"><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-6">
                  <label for="ex1">Data de Nascimento</label>
                  <input type="date" class="form-control" id="data_de_nascimento" maxlength="40"  name="data_de_nascimento" placeholder="Insira seu nome"><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-6">
                  <label for="ex1">CPF</label>
                  <input type="text" class="form-control" id="cpf" maxlength="40"  name="cpf" placeholder="Insira seu nome"><br>
                </div>
              </div><!-- Fim Div -->


              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-6">
                  <label for="ex2">Email</label>
                  <input type="email" class="form-control" id="email" maxlength="50"  name="email" placeholder="usuario@usuario.com"><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-6">
                  <label for="ex1">Sexo</label>
                  <input type="text" class="form-control" id="sexo" maxlength="40"  name="sexo" placeholder="Insira seu nome"><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-6">
                  <label for="ex2">Telefone</label>
                  <input type="text" class="form-control" id="telefone" maxlength="50"  name="telefone" placeholder="11962928739"><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-6">
                  <label for="ex3">Senha</label>
                  <input type="password" class="form-control" id="password" maxlength=15  name="password" placeholder="Informe sua senha"><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-6">
                  <label for="ex4">Confirmar Senha</label>
                  <input type="password" class="form-control" id="confirma_senha" maxlength=15  name="confirma_senha" placeholder="Confirme sua senha"><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-6">
                  <label for="ex1">Faça upload da sua foto de perfil</label>
                  <input type="file" name="fotoPerfil"><br>
                </div>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Button -->
                <div class="col-lg-2 col-md-6 col-sm-3">
                  <input id="espaco2" type="submit" class="btn btn-success btn-lg btn-block" style="margin-top:17px; outline:none;" value="Cadastrar">
                </div>
              </div><!-- Fim Button -->

            </form><!-- Fim Form -->
  				</div>
  				<div class="tab-pane" id="pessoa-juridica">
            <form  action="/cadastro/pessoa-juridica" method="post" enctype="multipart/form-data" class="row"><!-- Inicio Form -->
              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-6">
                  <label for="ex1">Nome da Empresa:</label>
                  <input type="text" class="form-control" id="ex1" maxlength="40"  name="nome" placeholder="Insira seu nome" value='<?php echo isset($_POST['nome']) ? ($_POST['nome']): "" ?>'><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-6">
                  <label for="ex1">CNPJ</label>
                  <input type="text" class="form-control" id="cnpj" maxlength="40"  name="cnpj" placeholder="Insira seu nome" value='<?php echo isset($_POST['nome']) ? ($_POST['nome']): "" ?>'><br>
                </div>
            </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-6">
                  <label for="ex2">Email:</label>
                  <input type="email" class="form-control" id="ex2" maxlength="50"  name="email" placeholder="usuario@usuario.com" value='<?php echo isset($_POST['email']) ? ($_POST['email']): "" ?>'><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-6">
                  <label for="ex2">Telefone:</label>
                  <input type="text" class="form-control" id="ex5" maxlength="50"  name="telefone" placeholder="11962928739" value='<?php echo isset($_POST['telefone']) ? ($_POST['telefone']): "" ?>'><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-6">
                  <label for="ex3">Senha:</label>
                  <input type="password" class="form-control" id="ex3" maxlength=15  name="senha" placeholder="Informe sua senha"><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-6">
                  <label for="ex4">Confirmar Senha:</label>
                  <input type="password" class="form-control" id="ex4" maxlength=15  name="confirma_senha" placeholder="Confirme sua senha"><br>
                </div>
              </div><!-- Fim Div -->

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Div -->
                <div class="col-lg-5 col-md-6 col-sm-6">
                  <label for="ex1">Faça upload da sua foto de perfil</label>
                  <input type="file" name="fotoPerfil"><br>
                </div>
              </div>

              <div class="col-md-12">
                <?php
                if (isset($erro) && count($erro)) {
                  ?>
                  <div class="alert alert-danger">
                    <?php
                    echo "<b>Atenção:</b> <br>";
                    echo implode ("<br>", $erro);
                    ?>
                  </div>
                <?php } ?>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12"><!-- Inicio Button -->
                <div class="col-lg-2 col-md-6 col-sm-3">
                  <input id="espaco2" type="submit" class="btn btn-success btn-lg btn-block" style="margin-top:17px; outline:none;" value="Cadastrar">
                </div>
              </div><!-- Fim Button -->

            </form><!-- Fim Form -->
  				</div>
        </div>
      </div>


    </div><!-- Fim Panel Panel-Default -->
  </div><!-- Fim Conteiner Geral -->
</div> <!-- Fim da Row -->
</div>



@stop
