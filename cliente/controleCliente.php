<link href="../css/csscontrole.css" rel="stylesheet" type="text/css" />
<?php

include_once 'cliente.php';
include_once 'clienteDao.php';


$cpf = $_GET['cpf'];
$nome = $_GET['nome'];
$nascimento = $_GET['nascimento'];
$email = $_GET['email'];
$senha = $_GET['senha'];

$botao = $_GET['botao'];

$cliente = new Cliente();
$clienteDao =  new ClienteDao();

$cliente->setCpf($cpf);
$cliente->setNome($nome);
$cliente->setNascimento($nascimento);
$cliente->setEmail($email);
$cliente->setSenha($senha);


if($botao=="cadastrar"){
    $clienteDao->cadastrar($cliente);
}else if($botao=="alterar"){
    $clienteDao->alterar($cliente);
}else if($botao=="excluir"){
    $clienteDao->excluir($cliente);
}else if($botao=="consultar"){
    $res = $clienteDao->consultar($cliente);
   
    foreach ($res as $resultado){
        echo '<div class="controle">'.'Cpf do Cliente:'. $resultado->cpf. "<br>";
        echo 'Nome:'. $resultado->nome. "<br>";
        echo 'Nascimento:'. $resultado->nascimento."<br>";
        echo 'Email:'. $resultado->email. "<br>";
        echo 'Senha:'. $resultado->senha. "<br>";'</div>';
    }
}
