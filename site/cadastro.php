<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Formulário de Login e Registro com HTML5 e CSS3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link href="../css/cadastro.css" rel="stylesheet" type="text/css" /></head>
<body>
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
      
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form action="../cliente/controleCliente.php" method="get">
          <h1>Cadastro</h1> 
          <p> 
            <label for="cpf">Seu CPF sem pontos e traços</label>
            <input id="cpf" name="cpf" required="required" type="numeric" placeholder="Exemplo: 00011122234"/> 
          </p>
          <p> 
            <label for="nome_cad">Seu Nome</label>
            <input id="nome_cad" name="nome" required="required" type="text" placeholder="nome" />
          </p>
           
          <p> 
            <label for="nascimento">Seu Nascimento</label>
            <input id="nascimento" name="nascimento" required="required" type="date" placeholder="ex. ano/mes/dia"/>
          </p>

          <p> 
            <label for="email">Seu E-mail</label>
            <input id="email" name="email" required="required" type="email" placeholder="Exemplo: padaria@gmail.com"/> 
          </p>
           
          <p> 
            <label for="senha_cad">Sua Senha</label>
            <input id="senha_cad" name="senha" required="required" type="password" placeholder="ex. 1234"/>
          </p>

          <p> 
            <input type="submit" name="botao" value="cadastrar"/> 
          </p>

    

          <p class="link">  
            Já tem conta?
            <a href="login.html"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div>  
</body>
</html>