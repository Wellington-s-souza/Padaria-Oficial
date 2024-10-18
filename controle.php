<?php
session_start();

header("Content-type:text/css");
header("Content-type: text/html; charset=utf-8");
"[html] '<link rel='stylesheet' type='text/css' href='../css/csspaginas.css' /> '[/html]";



include 'conexao/conexao.php';
include_once 'produto/produto.php';
include_once 'formProduto.php';

$id = $_POST["id"];
$descricao = $_POST["descricao"];
$quantidade = $_POST["quantidade"];
$preco = $_POST["preco"];
$vencimento = $_POST["vencimento"];

$botao = $_POST["botao"] ;

$ArquivoAtual = $_FILES['arquivo']['name'];
$ArquivoTmp = $_FILES['arquivo']['tmp_name'];
$Destino = 'Imagens' .$ArquivoAtual;

//-------------------------------------------------------------------------------------------------------------------------------------------------->

if ($botao == "incluir")
{
    move_uploaded_file($ArquivoTmp, $Destino);

    $sql = "insert into produto(id, quantidade, descricao, preco, vencimento, imagem) values ( ?, ?, ?, ?, ?, ?)";
    $bd = new Conexao();
    $con = $bd->getConexao();
    $Comando = $con->prepare($sql);

    $Comando->bindParam(1, $id);
    $Comando->bindParam(2, $quantidade);
    $Comando->bindParam(3, $descricao);
    $Comando->bindParam(4, $preco);
    $Comando->bindParam(5, $vencimento);
    $Comando->bindParam(6, $ArquivoAtual);

    $Comando->execute();

    if ($Comando->rowCount() > 0)
    {
        echo "<script>alert('Cadastrado com Sucesso!')</script>";
    }

}

//-------------------------------------------------------------------------------------------------------------------------------------------------->

if ($botao == "excluir")
{

    $sql = "delete from produto where id=?";
    $bd = new Conexao();
    $con = $bd->getConexao();
    $Comando = $con->prepare($sql);

    $Comando->bindParam(1, $id);

    $Comando->execute();

    if ($Comando->rowCount() > 0)
    {
        echo "<script>alert('Deletado com sucesso!')</script>";
    }else{
        echo "<script>alert('Nenhum Produto Encontrado')</script>";
    }

}

//-------------------------------------------------------------------------------------------------------------------------------------------------->

if ($botao == "alterar")
{

    move_uploaded_file($ArquivoTmp, $Destino);

    $sql = "update produto set quantidade=?, descricao=?, preco=?, vencimento=?, imagem=? where id=?";
    $bd = new Conexao();
    $con = $bd->getConexao();
    $Comando = $con->prepare($sql);

    $Comando->bindParam(1, $quantidade);
    $Comando->bindParam(2, $descricao);
    $Comando->bindParam(3, $preco);
    $Comando->bindParam(4, $vencimento);
    $Comando->bindParam(5, $ArquivoAtual);
    $Comando->bindParam(6, $id);

    $Comando->execute();

    if ($Comando->rowCount() > 0)
    {
        echo "<script>alert('Alterado com Sucesso!')</script>";
    }else{
        echo "<script>alert('Produto não Encontrado para Alteração')</script>";
    }

}

//-------------------------------------------------------------------------------------------------------------------------------------------------->

if ($botao == "consultar")
{

    $sql = "select * from produto where id=?";
    $bd = new Conexao();
    $con = $bd->getConexao();
    $Comando = $con->prepare($sql);

    $Comando->bindValue(1, $id);

    if ($Comando->execute())

        while ($Linha = $Comando->fetch(PDO::FETCH_OBJ))
        {
            echo '<div class=controle>'.'Cod da Mercadoria:'. $Linha->id. "<br>";
            echo 'Descrição:'. $Linha->descricao. "<br>";
            echo 'Quantidade de Estoque:'. $Linha->quantidade. "<br>";
            echo 'preco $:'. $Linha->preco. "<br>";
            echo 'Vencimento:'. $Linha->vencimento."<br>" ;
            echo '<img src="Imagens' . $Linha->imagem . '" width="300px" height="300px">' . '<br>' . "<hr>";'</div>';
        }

}
?>