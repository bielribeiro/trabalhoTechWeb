<?php
$dsn = 'mysql:dbname=banco;host=127.0.0.1';
$user = 'root';
$password = '';
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$id=$_GET['id'];
$count = $dbh->exec("DELETE FROM cadastro WHERE id = '$id'");
echo "<script>
 
alert(' $count Cadastro Excluido !');
location.href='verificar.php';

      </script>";

?>