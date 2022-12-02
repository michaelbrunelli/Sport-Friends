<?php
include "conexaobd.php";
$email_cad = $_POST['email_cad'];
$senha_cad = MD5($_POST['senha_cad']);
$nome_cad = $_POST['nome_cad'];
$celular = $_POST['celular'];
$query_select = "SELECT email FROM usuario WHERE email = '$email_cad'";
$select = mysqli_query($query_select,$conexao);
$array = mysqli_fetch_array($select);
$logarray = $array['email_cad'];

  if($email_cad == "" || $email_cad == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    cadastro.html';</script>";

    }else{
      if($logarray == $email_cad){

        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        cadastro.html';</script>";
        die();

      }else{
        $query = "INSERT INTO usuario (nome, celular, email, senha) VALUES ('$email_cad','$senha_cad')";
        $insert = mysqli_query($query,$conexao);

        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastro.html'</script>";
        }
      }
    }
?>