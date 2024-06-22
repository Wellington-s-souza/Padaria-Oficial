<link href="../css/csscarrinho.css" rel="stylesheet" type="text/css" />
<?php
session_start();

    foreach($_SESSION['dados'] as $produtos)
    {
        $conexao = new PDO('mysql:host=localhost;dbname=padaria; charset=utf8', 'root', '');
        $insert = $conexao->prepare("insert into pedido () values (NULL,?,?,?,?,NULL)");
        $insert->bindParam(1, $produtos['idProduto']);
        $insert->bindParam(2, $produtos['quantidade']);
        $insert->bindParam(3, $produtos['preco']);
        $insert->bindParam(4, $produtos['total']);
        $insert->execute();

        if($insert)
        {
            
              echo '<div class=boto>'.'<a href="../produto/indexlogado.php">Voltar ao Início </a>';'</div>';
              echo '<div class=foto>'.'<a href="../css/csscarrinho.css"></a>';'</div>';
              echo '<a>Compra Realizada</a>';

        }

    
    }
    
session_destroy();
