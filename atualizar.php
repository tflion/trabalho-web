<?php

    $nome = $_GET["nome"];
    $horario = $_GET["horario"];
    $dia = $_GET["dia"];
    $tipo_servico = $_GET["tipo_servico"];
    $id = $_GET["id"];

    include_once 'conexao.php';

    // $sql = "update tb_agendamento set
    //         nome = '".$nome."', horario = '".$horario."',dia = '".$dia."',tipo_servico = '".$tipo_servico."',descricao = '".$descricao."'
    //         where id = ".$id;

    // $conn = null;

    // Header("Location: administrador.php")

    try {
        $smt = $conn->prepare("UPDATE tb_agendamento SET nome = ".$nome." horario = ".$horario." dia = ".$dia."tipo_servico = ".$tipo_servico." WHERE  id = ".$id);

        
        $smt->execute();

        $conn = null;

        // Header("Location: index.html");

        // if(mysql_query($smt,$conn)){
        //     $msg = "Atualizado com sucesso!";
        // }else{
        //     $msg = "Erro ao atualizar!";
        // }
        // mysql_close($conn);

    }catch (PDOException $e ) {
        echo "Erro ao inserir ".$e->getMessage();
    }catch(Execpetion $e){
        echo "Erro ".$e->getMessage();
    }


    ?>