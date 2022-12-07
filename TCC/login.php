<?php

include "conexaobd.php";

$email_login = $_POST['email_login'];
$entrar = $_POST['entrar'];
$senha_login = md5($_POST['senha_login']);
  if (isset($entrar)) {

    $verifica = mysqli_query($conexao, "SELECT * FROM Login WHERE usuario =
    '$email_login' AND senha = '$senha_login'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("email_login",$email_login);
        header("Location:index.html");
      }
  }
?>
