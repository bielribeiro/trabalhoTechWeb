<?php


$login= "admin"; 
$senha= "admin"; 


if(isset($_POST["login"])){

  if($_POST["login"] == $login && $_POST["senha"] == $senha){

    echo "<script>
    alert('Bem vindo ao painel de administração !');
    location.href='painel.html';
  </script>  ";
  
    
  }else{
    
    echo "<script>
    alert('Login ou senha não válido');
    location.href='login.html';
  
  </script> ";

  }

}
?>

