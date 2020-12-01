<?php
include_once 'conexao.php';
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$complemento = $_POST['complemento'];
$email = $_POST['email'];
$senha = $_POST['senha'];

try{
$smt = $conn->prepare("INSERT INTO tb_cliente (nome,cpf,endereco,cep,complemento,email,senha) VALUES (:nome, :cpf, :endereco, :cep, :complemento, :email, :senha )");
$smt->bindParam(':nome', $nome);
$smt->bindParam(':cpf', $cpf);
$smt->bindParam(':endereco', $endereco);
$smt->bindParam(':cep', $cep);
$smt->bindParam(':complemento', $complemento);
$smt->bindParam(':email', $email);
$smt->bindParam(':senha', $senha);
$smt->execute();
$conn = null;

Header("Location: index.html");

}catch(PDOException $e){
    echo "Erro do PDO".$e->getMessage();

}catch(Exception $e){
    echo "Erro".$e->getMessage();
}
?>