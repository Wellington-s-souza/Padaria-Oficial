<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="../css/csspaginas.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="formulario">
<form action="controleCliente.php" method="get">
	<h2>Clientes</h2>
	    <label for="cpf">Cpf:</label>
		<p><input type="number" name="cpf" placeholder="Cpf"></p>
		<label for="nome">Nome:</label>
		<p><input type="text" name="nome" placeholder="Nome"></p>
        <label for="data de nascimento">Data de nascimento:</label>
		<p><input type="date" name="nascimento" placeholder="Nascimento"></p>
		<label for="email">Email:</label>
		<p><input type="text" name="email" placeholder="Email:"></p>
		<label for="senha">Senha:</label>
		<p><input type="text" name="senha" placeholder="Senha:"></p>
		<p><input type="submit" name="botao" value="alterar"></p>
		<p><input type="submit" name="botao" value="excluir"></p>
        <p><input type="submit" name="botao" value="consultar"></p>
	</form>
</div>
</body>
</html>