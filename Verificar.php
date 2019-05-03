<html>
<head>
<link  rel="stylesheet" type="text/css" href=https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css>
<script src=https://code.jquery.com/jquery-3.3.1.js></script>
<script src=https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js></script>
<script>
$(document).ready(function() {
    $('#tabela').DataTable();
} );
</script>
<style>
  td {text-align:center}
</style>
</head>
<body>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
    <link rel=stylesheet href=https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css>

    <style>
      .letra{
            font-family: 'Bowlby One SC', cursive;
            font-size: 50px;
        }

    </style>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

    <title>Verificar Cadastro</title>
  </head>
  <body style="background-color: #DCDCDC;">
          <br>
          <div class="btn-group" style="float: right;">
            
            <a href="perfil.html"><button type="button" class="btn btn-danger"><img src="http://www.absabastecimentos.com.br/wp-content/uploads/2017/05/manager-512.png" width="30px" height="30px">ADMIN</button></a>
            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item btn btn-danger" href="#">Configuração</a>
              <a class="dropdown-item btn btn-danger" href="suporte.html">Suporte</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item btn btn-danger" href="login.html">Sair</a>
            </div>
          </div>
            <br>
            <br>
        <div style="background-color: #B22222;">

            <center><h1 class="letra">Verificação de cadastro</h1></center>

        </div>
        <br>
        <table id="example" class="display" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>SobreNome</th>
                <th>Data de Nascimento</th>
                <th>Email</th>
                <th>Enderço</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Cep</th>
                <th>Sintomas</th>
                <th>Gravidade</th>
                
            </tr>
        </thead>
        <tbody>
<?php
$dsn = 'mysql:dbname=banco;host=127.0.0.1';//mysql
$user = 'root';//root
$password = ''; //senha vazia
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$sql = 'SELECT * FROM cadastro ';
foreach ($dbh->query($sql) as $row) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['nome']."</td>";
    echo "<td>".$row['sobrenome']."</td>";
    echo "<td>".$row['dnascimento']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['endereco']."</td>";
    echo "<td>".$row['cidade']."</td>";
    echo "<td>".$row['estado']."</td>";
    echo "<td>".$row['cep']."</td>";
    echo "<td>".$row['sintomas']."</td>";
    if($row['op']=='baixa'){
      echo "<td style='background-color:#008000; font-weight:bold;'>Baixa</td>";
    }if($row['op']=='media'){
      echo "<td style='background-color:#FFD700; font-weight:bold;'>Media</td>";
    }if($row['op']=='alta'){
      echo "<td style='background-color:#B22222; font-weight:bold;'>Alta</td>";
    }
    //echo "<td>".$row['op']."</td>";
    echo "<td><a href=editar.php?id=".$row['id']."><span class='badge badge-danger'>Editar</span></a></td>";
    echo "<td><a href=excluir.php?id=".$row['id']."><span class='badge badge-danger'>Excluir</span></a></td>";
    echo "</tr>";
}
?>
</tbody>
    </table>
              <br>
              <hr>
                                        <center><p style="font-size:20px;">Deseja voltar ao Painel?  <a href="painel.html"><button type="button" class="btn btn-danger">Voltar</button></a></p></center>
              <br>
              


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src=https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js></script>
  </body>
</html>