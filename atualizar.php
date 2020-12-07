<?php
    include_once 'conexao.php';
    $id = $_POST["fid"];
    $nome = $_POST["fnome"];
    $dia = $_POST["fdia"];
    $horario = $_POST["fhorario"];
    $tipo_servico = $_POST["fservico"];
    $descricao = $_POST["fdescricao"];

    $sql = "UPDATE tb_agendamento SET nome = :nome, dia= :dia, horario= :horario, tipo_servico = :tipo_servico, descricao = :descricao WHERE id = :id";
    $smt = $conn->prepare($sql);
    $smt->bindParam(':id',$id);
    $smt->bindParam(':nome',$nome);
    $smt-> bindParam(':dia',$dia);
    $smt-> bindParam(':horario',$horario);
    $smt-> bindParam(':tipo_servico',$tipo_servico);
    $smt-> bindParam(':descricao',$descricao);
    $smt->execute();
    $conn = null;
    Header("Location: administrador.php")



    ?>