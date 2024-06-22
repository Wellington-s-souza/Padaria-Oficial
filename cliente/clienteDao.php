<?php

include_once 'cliente.php';
include_once 'controleCliente.php';
include_once 'formCliente.php';
include '../conexao/conexao.php';

class ClienteDao
{

    public function cadastrar(Cliente $c){
        
        

        $sql = "insert into cliente (cpf, nome, nascimento, email, senha) values (?, ?, ?, ?, ?)";

        $bd = new Conexao();
        $con = $bd->getConexao();
        
        $stm = $con->prepare($sql);
        $stm->bindValue(1, $c->getCpf());
        $stm->bindValue(2, $c->getNome());
        $stm->bindValue(3, $c->getNascimento());
        $stm->bindValue(4, $c->getEmail());
        $stm->bindValue(5, $c->getSenha());
        
        $resultado = $stm->execute();

        if($resultado){
            echo '<script language="javascript">';   
            echo 'alert("Cadastrado com Sucesso!");';
            echo 'location.href="../site/cadastro.html";';    
            echo '</script>';
        }else{
            echo '<script language="javascript">';   
            echo 'alert("Não Cadastrado!");';
            echo 'location.href="../site/cadastro.html";';    
            echo '</script>';
        }

    }
    
    public function alterar(Cliente $c){

        

        $sql = "update cliente set nome=?, nascimento=?, email=?, senha=? where cpf=?";

        $bd = new Conexao();
        $con = $bd->getConexao();
        
        $stm = $con->prepare($sql);
        $stm->bindValue(1, $c->getNome());
        $stm->bindValue(2, $c->getNascimento());
        $stm->bindValue(3, $c->getEmail());
        $stm->bindValue(4, $c->getSenha());
        $stm->bindValue(5, $c->getCpf());
        
        $resultado = $stm->execute();

        if($resultado){
            echo "<script>alert('Alterado com Sucesso')</script>";
        }else{
            echo "<script>alert('Não Alterado')</script>";
        }

    }

     public function excluir(Cliente $c){

        

        $sql = "delete from cliente where cpf=?";

        $bd = new Conexao();
		$con = $bd->getConexao();
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $c->getcpf());
		$resultado = $stm->execute();

        if($resultado){
            echo "<script>alert('Deletado com Sucesso')</script>";
        }else{
            echo "<script>alert('Não foi Deletado')</script>";
        }

    }

    public function consultar(Cliente $c){
        
        
 
        $bd = new Conexao();
        $con = $bd->getConexao();

        if ($c->getcpf()==" ")
        {
            $sql = 'select * from cliente';
        }
        else
        {
            $sql = 'select * from cliente where cpf=?';
        }
        
        $Matriz = $con->prepare($sql);
        $Matriz->bindValue(1, $c->getcpf());
        
        if($Matriz->execute()){
            $resultado = $Matriz->fetchall(PDO::FETCH_OBJ);
            return $resultado;
        }
    }

   
}