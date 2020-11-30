<?php
    $id = $_GET["id"];
    include_once 'conexao.php';

    // $sql = "delete from tb_agendamento where id = ".$id;
    $smt = $conn->prepare("DELETE FROM tb_agendamento WHERE id = ".$id );

    $smt->execute();

    $conn = null;

    Header("Location: administrador.php")

?>