<style media="screen">
  body{
  background-color: black;
  color: white;
  font-size: 20px;
  }
</style>

<?php

    /* Connect to a MySQL database using driver invocation */
    $dsn = 'mysql:dbname=fake_instagram;host=localhost;port=3306';
    $user = 'root';
    $password = '';

    try {
        $db = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }

    echo("executando...");
    $sql = 'INSERT INTO usuarios (nome, email, senha, username, foto) VALUES ("Sérgio","sergio@teste","123123","sergio",null)';
    if($db->query($sql)){
       echo("executado!");
    } else {
       echo "<pre>";
       print_r($db->errorInfo());
       echo "</pre>";
    }
