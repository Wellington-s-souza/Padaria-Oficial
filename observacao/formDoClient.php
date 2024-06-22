<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<div class="formulario">
	<form action="controleObs.php" method="post" enctype="multipart/form-data">
	<link href="../css/obs.css" rel="stylesheet" type="text/css" />
	<section class="formulario">	
	<h2>Observações</h2>
		
		<label for="email">Email:</label >
		<p><input type="text" name="email" placeholder="Email"></p>


		<label for="nome">Nome:</label>
		<p><input type="text" name="nome" placeholder="Nome"></p>

		<label for="assunto">Assunto:</label>
		<p><input type="text" name="assunto" placeholder="Assunto"></p>

		<label for="observacao">Observação:</label>
		<p><input type="text" name="observacao" placeholder="Observação"></p>

		<p><input type="submit" name="botao" value="enviar"></p>
	</form>
	</div>

</section>
</div>
</body>
</html>
