<?php

    $nome = $_POST["nome"];
    $horario = $_POST["horario"];
    $dia = $_POST["dia"];
    $tipo_servico = $_POST["tipo_servico"];
    $id = $_POST["id"];

    include_once 'conexao.php';

    // $sql = "update tb_agendamento set
    //         nome = '".$nome."', horario = '".$horario."',dia = '".$dia."',tipo_servico = '".$tipo_servico."',descricao = '".$descricao."'
    //         where id = ".$id;

    // $conn = null;

    //Header("Location: administrador.php")
    
    try {
        $smt = $conn->prepare("UPDATE tb_agendamento SET nome = ".$nome." horario = ".$horario." dia = ".$dia."tipo_servico = ".$tipo_servico." WHERE  id = ".$id);

        
        $smt->execute();

        $conn = null;

        Header("Location: administrador.php");

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