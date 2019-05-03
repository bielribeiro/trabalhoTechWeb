<?php
$dsn = 'mysql:dbname=banco;host=127.0.0.1';
$user = 'root';
$password = '';
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
echo "<pre>";
var_dump($_GET);
echo "</pre>";
$id = $_GET['id'];
$nome=$_GET["nome"];
$sobrenome=$_GET["sobrenome"];
$dnascimento=$_GET["dnascimento"];
$email=$_GET["email"];
$endereco=$_GET["endereco"];
$cidade=$_GET["cidade"];
$estado=$_GET["estado"];
$cep=$_GET["cep"];
$sintomas=$_GET["sintomas"];
$op=$_GET["op"];//teste


$count = $dbh->exec("update cadastro set nome='$nome', sobrenome='$sobrenome', dnascimento='$dnascimento', email='$email', endereco='$endereco', cidade='$cidade', estado='$estado', cep='$cep', sintomas='$sintomas', op='$op' where id = $id");
    
echo "<script>
 
alert(' $count Cadastro atualizado !');
location.href='verificar.php';

      </script>";

   
  
    
