<?php
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";

  try {
    $conn = new PDO("mysql:host=$servidor;dbname=dbclinicaveterinaria", $usuario, $senha);
    $conn -> exec("set names utf-8");
    echo "Conexão Ok!";
  } catch(PDOException $e) {
    echo "Erro do PDO ".$e -> getMessage();
  } catch(Exception $e) {
    echo "Erro ".$e -> getMessage();
  }
?>