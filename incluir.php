<?php
    include_once 'conexao.php';

    $nome = $_POST['nome'];
    $dia = $_POST['dia'];
    $horario = $_POST['horario'];
    $servico = $_POST['servico'];
    $mensagem = $_POST['mensagem'];

    try {
        $smt = $conn->prepare("INSERT INTO tb_agendamento (nome, dia, horario, tipo_servico, descricao) VALUES (:nome, :dia, :horario, :servico, :mensagem)");
        $smt->bindParam(':nome', $nome);
        $smt->bindParam(':dia', $dia);
        $smt->bindParam(':horario', $horario);
        $smt->bindParam(':servico', $servico);
        $smt->bindParam(':mensagem', $mensagem);

        $smt->execute();

        $conn = null;

        Header("Location: agendamento.html");
    }catch (PDOException $e ) {
        echo "Erro ao inserir ".$e->getMessage();
    }catch(Execpetion $e){
        echo "Erro ".$e->getMessage();
    }
?>