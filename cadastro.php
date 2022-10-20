<?php
session_start();
include('conexao.php');
include("protect.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body> 
    <header>
    <div class="caixa">
      <nav>
        <img src="imagens\log1.png" alt="logo-white.png" style="width:180px;height:180px;"> 
        <ul class="nav-list">
        <h5><a href="painel.php">Voltar ao Painel</a></h5>
        <h5><a href="index.php">Sair</a></h5>
        </ul>
      </nav>
    </header>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Cadastro de dispositivo</h3>
                    <div class="box">
                            <div class="field">
                                <div class="control">
                                    <input name="nomecompleto" type="text" class="input is-large" placeholder="Nome completo" required>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="email" type="text" class="input is-large" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="linkedin" type="text" class="input is-large" placeholder="Tipo do dispositivo">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="competenciapro" type="text" class="input is-large" placeholder="Modelo do dispositivo">
                                </div>
                            <div class="field">
                                <div class="control" style="margin-top: 10px;">
                                    <input name="CEP" type="text" class="input is-large" placeholder="CEP">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="rua" type="text" class="input is-large" placeholder="Rua">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="bairro" type="text" class="input is-large" placeholder="Bairro">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="cidade" type="text" class="input is-large" placeholder="Cidade">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="uf" type="text" class="input is-large" placeholder="UF">
                                </div>
                            </div>
                            </div>
                            <br>
                            <div class="dropbox" style="padding-right: 60PX">
                              <label for="cars" style="font-size: 16px;">ONG:</label>
                              <select name="cars" id="cars" style="height: 30px">
                                <option value="saab">Gente Amiga</option>
                                <option value="opel">Caps Ponta do Coral</option>
                              </select>
                              <br>
                        </div>
                        <br>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script 
    type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js">
    </script>
    <script 
    type="text/javascript" src="cep.js">
    </script>
</body>

</html>