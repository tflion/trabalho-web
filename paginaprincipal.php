<?php
//abre a sessão
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$senhasecreta = "45321";

if($usuario == 'Felipe' && $senha == $senhasecreta){
    //seta os dados da sessão
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha']= $senha;

    echo "<h1> Você acessou a página sr. ". $usuario . "</h1><br>"; 
    echo "<a href='paginaprincipal.php'> Entrar na página </a>";
}else{

    //limpa a sessão
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    echo 'Usuário e senha desconhecidos';
}

?>