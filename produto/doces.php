<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Padaria</title>
 <meta charset="UTF-8">
 <link href="../css/indexSite.css" rel="stylesheet" type="text/css" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="topnav">
  <a class="active" href="../produto/index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
   <div class="subnav">
    <button class="subnavbtn">Categorias <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="./doces.php">Doces</a>
      <a href="./salgados.php">Salgados</a>
    </div>
</div>
  <a href="#"><i class="fa fa-fw fa-envelope"></i> Contato</a>
  <form class="example" action="/action_page.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
  <div class="login1">
  <a href="../site/login.html"><i class="fa fa-fw fa-user"></i> Login</a>
  <a class="btn btn-primary" href="../site/login.html" role="button">
  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
</svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Carrinho</font></font></a>
</form>
</div>
</div>
<div style="display: block; margin: 0 auto; text-align: center; margin-top: 50px">
      <script src="https://apis.google.com/js/platform.js"></script>

<div data-layout="full" data-count="hidden"></div>
   </div>

<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
<h2 class="vitrine">Doces</h2>
<ul class="product-list">

<?php

    include '../conexao/conexao.php';   

    $sql = "select * from produto order by id DESC limit 4";
    $bd = new Conexao();
    $con = $bd->getConexao();
    $Comando = $con->prepare($sql);

    if ($Comando->execute())

        while ($Linha = $Comando->fetch(PDO::FETCH_OBJ))
        {

?>
 <li class="product-item">
        <a href="../site/login.html" class="product-link">
<figure class="product-info">
                <div class="product-info-img">        
            <?php echo '<img src="Imagens' . $Linha->imagem . '" width="230px" height="230px">' . '<br>' . "<hr>";?>
        </div>
        <figcaption class="product-info-description">
        <h2 class="title">
            <?php echo 'Cód:'. $Linha->id. "<br>";?>
        </h2>
            <p class="description">
            <?php echo ''. $Linha->descricao. "<br>";?>
       
            <?php echo 'Qtd:'. $Linha->quantidade. "<br>";?>
            </p>
            <ul class="star-ranking">
                        <li><img src="https://i.ibb.co/2kW5mnM/star.png">
                        </li>
                        <li><img src="https://i.ibb.co/2kW5mnM/star.png">
                        </li>
                        <li><img src="https://i.ibb.co/2kW5mnM/star.png">
                        </li>
                        <li><img src="https://i.ibb.co/2kW5mnM/star.png">
                        </li>
                        <li><img src="https://i.ibb.co/TwYYb93/star-1.png">
                        </li>
                        <li class="qtd-votes">
                            </span>(200)</span>
                        </li>
                    </ul>
                    </figcaption>
            <div class="price-box">
            <div class="price">
            <ins><?php echo 'R$'. $Linha->preco. "<br>";?> </ins>
            <?php echo 'Vencimento:<br>'. $Linha->vencimento."<br>" ;?>
        </div>
                    <button href="carrinho/carinho.php" class="btn btn-buy">Comprar <i class="fas fa-arrow-right"></i></button>
        
        </div>
    
        </figure>
        </a>
    </li>

<?php
        }
        
?>
</ul>

<div class="content">
</div>
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                <a href="../produto/index.php"><img class="img" id="myimage" src="../img/padaria.jpg" width="90%"height="0%"><h2 class="logo"><a href=""></a></h2>
                </div></a>
                <div class="col-sm-2">
                    <h5>Inicio</h5>
                    <ul>
                        <li><a href="../produto/index.php">Home</a></li>
                        <li><a href="">Sobre</a></li>
                        <li><a href=""></a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Sobre-nós</h5>
                    <ul>
                        <li><a href="">Informações da Empresa</a></li>
                        <li><a href="">Contato</a></li>
                        <li><a href="">Blog</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Suporte</h5>
                    <ul>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Telefones</a></li>
                        <li><a href="">Chat</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="" class="instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                    <a href="">
                        <button type="button" class="btn btn-default">Contato</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2022 Copyright - Padaria KVW</p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>