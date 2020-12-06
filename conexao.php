<?php
  $servidor = "fdb25.awardspace.net";
  $usuario = "2988268_dbclinicaveterinaria";
  $senha = "y[6#;bDX9{:xrlBY";
  $banco = "2988268_dbclinicaveterinaria";

  try {
    $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    $conn -> exec("set names utf-8");
  } catch(PDOException $e) {
    echo "Erro do PDO ".$e -> getMessage();
  } catch(Exception $e) {
    echo "Erro ".$e -> getMessage();
  }
  
?>