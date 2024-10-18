<!DOCTYPE html>
<script>document.getElementById("input").addEventListener("change", function(){
   		this.value = parseFloat(this.value).toFixed(2);
});</script>

<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="css/csspaginas.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<body>
<div class="formulario">
	<form action="controle.php" method="post" enctype="multipart/form-data">
		<h2>Produtos</h2>
		<label for="codigo do produto">Código do Produto:</label>
		<p><input type="number" name="id" placeholder="Código do Produto"></p>

		<label for="quantidade do estoque">Quantidade do Estoque:</label>
		<p><input type="number" name="quantidade" placeholder="Quantidade do Estoque"></p>

		<label for="descriçao">Descrição:</label>
		<p><input type="text" name="descricao" placeholder="Descrição"></p>

		<label for="valor">Valor R$:</label>
		<p><input type="number" name="preco" step="0.010" placeholder="Valor R$"></p>

		<label for="vencimento">Vencimento:</label>
		<p><input type="date" name="vencimento"></p>

		<label>Imagem:</label>
		<input type="file" name="arquivo"><br><br>

		<p><input type="submit" name="botao" value="incluir"></p>
		<p><input type="submit" name="botao" value="excluir"></p>
		<p><input type="submit" name="botao" value="alterar"></p>
		<p><input type="submit" name="botao" value="consultar"></p>
	</form>
</div>
</body>
</html>
