<?php

include_once 'observacao.php';

$email = $_POST['email'];
$nome = $_POST['nome'];
$assunto = $_POST['assunto'];
$observacao = $_POST['observacao'];

$botao = $_POST['botao'];

//------------------------------------------------------------------------------------------------------------------------------------------

if ($botao == "enviar")
{

    include '../conexao/conexao.php';

    $sql = "insert into obs (email, nome, assunto, observacao) values (?, ?, ?, ?)";
    $bd = new Conexao();
    $con = $bd->getConexao();
    $Comando = $con->prepare($sql);

    $Comando->bindParam(1, $email);
    $Comando->bindParam(2, $nome);
    $Comando->bindParam(3, $assunto);
    $Comando->bindParam(4, $observacao);

    $Comando->execute();

    if ($Comando)
    {
        echo "<script>alert('Enviado com Sucesso!')</script>";
    }else{
        echo "Tente Novamente!";
    }

}

//------------------------------------------------------------------------------------------------------------------------------------------

if ($botao == "consultar")
{

    include '../conexao/conexao.php';

    $sql = "select * from obs where email=?";
    $bd = new Conexao();
    $con = $bd->getConexao();
    $Comando = $con->prepare($sql);

    $Comando->bindValue(1, $email);

    if ($Comando->execute())

        while ($Resultado = $Comando->fetch(PDO::FETCH_OBJ))
        {
            echo 'Email: '. $Resultado->email. "<br>";
            echo 'Nome: '. $Resultado->nome. "<br>";
            echo 'Assunto Retratado : '. $Resultado->assunto. "<br>";
            echo 'Observação : '. $Resultado->observacao. "<br>";
        }

}

//------------------------------------------------------------------------------------------------------------------------------------------

if ($botao == "excluir")
{

    include '../conexao/conexao.php';

    $sql = "delete from obs where email=?";
    $bd = new Conexao();
    $con = $bd->getConexao();
    $Comando = $con->prepare($sql);

    $Comando->bindParam(1, $email);

    $Comando->execute();

    // Ver se é possivel usar while nessa condição //
    if ($Comando->rowCount() > 0)
    {
        echo "<script>alert('Deletado com sucesso!')</script>";
    }

}