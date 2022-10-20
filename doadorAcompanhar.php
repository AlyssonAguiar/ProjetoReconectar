<?php
session_start();
include('conexao.php');
include("protect.php");

if(!empty($_GET['search']))
{
  $data = $_GET['search'];
    $sql = "SELECT * FROM vagas WHERE upper(id_vaga) LIKE upper('%$data%') or UPPER(empresa) LIKE UPPER('%$data%') or UPPER(cargo) LIKE UPPER('%$data%') ORDER BY id_vaga DESC";  
}
else
{
  $sql = "SELECT * FROM vagas ORDER BY id_vaga DESC";
}
$result = $mysqli->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
  <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Página de vagas</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/vagas.css" />
  <link href="css/bulma.min.css" />
</head>
<body>
<header>
    <div class="caixa">
      <nav>
        <img src="imagens\log1.png" alt="logo-white.png" style="width:180px;height:180px;"> 
        <ul class="nav-list">
        <h5><a href="doadorHome.php">Voltar ao Painel</a></h5>  
        <h5><a href="index.php">Sair</a></h5>
        </ul>
      </nav>
    </header>
      </div>
      <div>
</div>  
      <main>
        <h2 class="titleAcompanhar has-text-grey">Acompanhar doações</h2> 
        <div id="container">
        <table class="table-bg">
          <thead>
                <tr>
                  <th scope="col">Código</th>
                  <th scope="col">Item</th>
                  <th scope="col">Endereço</th>
                  <th scope="col">Assistência Técnica</th>
                  <th scope="col">Status</th>
                  <th scope="col">ONG</th>
                </tr>
          </thead>      
          <tbody>
            <?php
               while ($user_data = mysqli_fetch_assoc($result)) 
               {
                echo "<tr>";
                echo "<td>".$user_data['id_vaga']."</td>";
                echo "<td>".$user_data['empresa']."</td>";
                echo "<td>".$user_data['cargo']."</td>";
                echo "<td>".$user_data['atividade']."</td>";
                echo "<td>".$user_data['local']."</td>";
                echo "<td>".$user_data['cargah']."</td>";
                echo "</tr>";
               }
            ?>
          </tbody>
        </table>
        </div>
      </main>
    </body>
  <script>
      var search = document.getElementById('pesquisar');

      search.addEventListener("keydown", function(event) {
        if (event.key === "Enter")
        {
          searchData();
        }
      });

      function searchData()
      {
        window.location = 'pagina_vagas.php?search='+search.value;
      }
  </script>
</html>