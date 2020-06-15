<?php
include_once("classes/usuarios.php");
include_once("classes/db.php");
if ($_POST) {
echo "<pre>";
var_dump($_POST);
echo "<pre/>";

extract($_POST);
$usuario = new usuario($nome,$username,$email,$senha);
$usuario->save();}
session_start();
$_SESSION["logado"] = true;
header("location: index.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Fake Instagram</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/style.css'>
  </head>
  <body>
    <main class="container content-auth">
        <div id="banner">
            <img src="img/banner-login.png" alt="" srcset="">
            <p>Cadastre-se para ver fotos dos seus amigos</p>
        </div>
        <form class="form-auth card" action="" method="post">
            <div id="logo"><img src="img/logo.png" alt=""></div>
            <input type="text"  name="nome" placeholder="Digite seu nome completo">
            <input type="text"  name="username" placeholder="Digite seu nome de usuario">
            <input type="email" name="email" placeholder="Digite seu email">
            <input type="password" name="senha" placeholder="Senha">
            <button type="submit">Cadastra-se</button>
            <p>
                Ao se cadastrar, você concorda com nossos <b>Termos, Política de Dados e Política de Cookies.</b>
            </p>
            <div class="register card">
                <p> Tem uma conta? <a href="login.php"><b>Conecte-se</b></a> </p>
            </div>
        </form>

    </main>
  </body>
</html>
