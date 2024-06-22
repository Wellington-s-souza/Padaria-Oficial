<?php
session_start();

include "../conexao/conexaoLogin.php";
include "loginFunc.html";

$email = $_POST["email"];
$senha = $_POST["senha"];

$Matriz = $conexao->prepare("select * from funcionario where email = ? and senha = ?");
$Matriz->bindParam(1, $email);
$Matriz->bindParam(2, $senha);

$Matriz->execute();
$Linha = $Matriz->fetch(PDO::FETCH_OBJ);

if ($Linha > 0)
{
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;

    header('location:indexGer.html');

}
else
{
    unset ($_SESSION['email']);
    unset ($_SESSION['senha']);
    echo "<script>alert('Email ou Senha incorretos!')</script>";
    
}

