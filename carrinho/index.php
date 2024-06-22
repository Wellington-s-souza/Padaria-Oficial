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

$conexao = new PDO('mysql:host=localhost;dbname=padaria; charset=utf8', 'root', '');

    $select = $conexao->prepare("select * from produto");
    $select->execute();
    $fetch = $select->fetchAll();

foreach($fetch as $produto) 
{
    echo '<div class="container">
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
						Nome do Produto: ' .$produto['descricao'].'&nbsp;
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
							Preço: '.number_format($produto['preco'],2,",",".").'
                                </div>
							<div class="col-xs-6">
							Quantidade: ' .$produto['quantidade'].' &nbsp;
							</div>
							<div class="col-xs-2">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="text-center">
							<div class="col-xs-5">	
							</div>
							<div class="col-xs-5">
						  </div>
                        </div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">	
						</div>
						<div class="col-xs-6">
						 <a href="carrinho.php?add=carrinho&id='.$produto['id'].'">
						 <button type="button" class="btn btn-success btn-block">
							Adicionar ao Carrinho
							</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>';
}
?>