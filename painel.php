<?php
session_start();

include("protect.php");
include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel do usuário</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header>
    <div class="caixa">
      <nav>
        <img src="imagens\log1.png" alt="logo-white.png" style="width:180px;height:180px;"> 
        <ul class="nav-list">
        <h5><a href="index.php">Sair</a></h5>
        </ul>
      </nav>
    </header>
    <main class="cards">
    	<section class="card contact">
    		<img src="imagens\id-card.png" alt="Usuário.">
    		<h3>Usuário</h3>
    		<span>Veja as informações ja cadastradas</span>
    		<a href="usuario.php"><button>Clique aqui</button></a>
    	</section>
    	<section class="card vagas">
    		<img src="imagens\document.png" alt="Vagas.">
    		<h3>Assistências Técnica</h3>
    		<span>Procure as assistências técnicas mais próximas de você</span>
    		<a href="pagina_vagas.php"><button>Clique aqui</button></a>
    	</section>
    	<section class="card curriculo">
    		<img src="imagens\agreement.png" alt="Cadastro de currículo.">
    		<h3>Cadastro de Dispositivo</h3>
    		<span> Cadastre seu dispositivo a ser doado </span>
    		<a href="cadastro.php"><button>Clique aqui</button></a>
    	</section>
    </main>
    <script src="mobile-navbar.js"></script>
  </body>
</html>