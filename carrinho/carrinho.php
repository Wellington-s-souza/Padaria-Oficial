<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Padaria</title>
 <meta charset="UTF-8">
 <link href="../css/csscarrinho.css" rel="stylesheet" type="text/css" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<?php

session_start();
if (!isset($_SESSION['itens']))
{
    $_SESSION['itens'] = array();
}

//-----------------------------------------------------------------------------------------------------------------------
  
    /* Adiciona ao Carrinho */
if (isset($_GET['add']) && $_GET['add'] == "carrinho")
{
    
    $idProduto = $_GET['id'];

    if (!isset($_SESSION['itens'] [$idProduto]))
    {
        $_SESSION['itens'] [$idProduto] = 1;
    }
    else
    {
        $_SESSION['itens'] [$idProduto] += 1;
    }

}

//------------------------------------------------------------------------------------------------------------------------
  
    /* Exibição do carrinho */
if (count($_SESSION['itens']) == 0)
{
    echo '<div class=title>'.'Carrinho Vazio <br> <div class=botao> <a href="index.php">Adicionar Itens</a> ';'</div>';'</div>';

    }else{

    /* Responsavel por salvar os dados e jogar no Finalizar */
    $_SESSION['dados'] = array();

   
    foreach($_SESSION['itens'] as $idProduto => $quantidade)
    {
      $conexao = new PDO('mysql:host=localhost;dbname=padaria; charset=utf8', 'root', '');
      $select = $conexao->prepare("select * from produto where id=?");
      $select->bindParam(1, $idProduto);
      $select->execute();
      $produtos = $select->fetchAll();
      $total = $quantidade * $produtos[0]["preco"];
     
        echo 
        '<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</h5>
							</div>
							<div class="col-xs-6">
								<a href="../produto/indexlogado.php"><button type="button" class="btn btn-primary btn-sm btn-block">
									<span class="glyphicon glyphicon-share-alt"></span> Continue Comprando
								</button></a>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-0"><img class="img-responsive" src="">
						</div>
						<div class="col-xs-6">
						Nome do Produto: '.$produtos[0] ["descricao"].'<br/>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-4 text-right">
                            Preço: ' .number_format($produtos[0]["preco"],2,",",".").'<br/>
                                </div>
							<div class="col-xs-6">
                            Quantidade: '.$quantidade.'<br/>
							</div>
							<div class="col-xs-2">
                            <a href="remover.php?remover=carrinho&id=' .$idProduto.'">
									<span class="glyphicon glyphicon-trash"> </span></a>
								</button>
							</div>
						</div>
					</div>
                    <div class="row">
						<div class="text-center">
							<div class="col-xs-5">
								<h6 class="text-right">Adicionar itens?</h6>
							</div>
							<div class="col-xs-5">
								<a href="index.php"><button type="button" class="btn btn-default btn-sm btn-block">
									Atualizar Carrinho
								</button>
                                </a>
							</div>
                            </div>
					</div>
				</div>
                    <div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
                        <h4 class="text-right"> Total: ' .number_format($total,2,",",".").'<br/> </h4>
						</div>
						<div class="col-xs-6">
                        <a href="finalizar.php"><button type="button" class="btn btn-success btn-block">
                        Finalizar Compra
                        </button>
                        </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>';


          /* Serve para adicionar itens dentro de um array existente */
          array_push(
            $_SESSION['dados'],
            array('idProduto' => $idProduto,
                  'quantidade' => $produtos[0]['quantidade'],
                  'preco' => $produtos[0]['preco'],
                  'total' => $total
                  )
            );
        
    }

   /* var_dump($_SESSION['dados']);*/
   
    
}
