<?php
$dsn = 'mysql:dbname=banco;host=127.0.0.1';
$user = 'root'; //root
$password = '';//sem senha
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
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
$count = $dbh->exec("insert into cadastro(nome, sobrenome,dnascimento, email, endereco, cidade, estado, cep, sintomas, op) 
            values('$nome', '$sobrenome','$dnascimento', '$email','$endereco','$cidade','$estado','$cep','$sintomas','$op') ");
echo "<script>
 
alert(' $count Cadastro concluido !');
location.href='painel.html';

      </script>";

?>