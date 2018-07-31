<?php
require "../cnx.php";

  $email = $_POST['login'];
  $entrar = $_POST['entrar'];
  $pass = md5($_POST['senha']);
 
    if (isset($entrar)) {
             
      $verifica = mysql_query("SELECT * FROM usuario WHERE email = '$email' AND senha = '$pass'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$email);
          header("Location:pagInicial.php");
        }
    }

?>