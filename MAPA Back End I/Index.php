<?php
    include("info.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Mapa1</title>
    </head>

    <body>
        <div class="menu">
            <nav>
                <div class="logo">
                    <img src="imgs/logo.png">
                </div>

                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Conheça a Dona Rita</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
        </div>

        <section class="banner">
            <div class="texto">
                <h1 class="titulo">Venha para a casa da Dona Rita, e escolha a sua marmita!!!</h1>
                <h2 class="sub">Marmitas saudaveis e deliciosas</h2>
                <div class="btn1">
                    <button class="A">Saiba Mais</button>
                </div>
            </div>
        </section>
    
        <header class="cardapio-titulo">
            <div class="ht">
                <h2>Confira nossas marmitas</h2>
                <p>Aqui você encontra o nosso cardápio das marmitas</p>
            </div>
        </header>

        <main>
            <section class="cardapio">
                <?php
                    foreach($marmitas as $key => $value){
                ?>
                <article>                   
                    <img src= <?=$value['img'];?> class="art-img">
                    <h3><?=$value['nome']?></h3>
                    <a href="pag2.php?id=<?=$value['id'];?>"><button class="btn2">Ver Mais</button></a>
                </article>
                <?php
                    }
                ?>
            </section>
            <br>
        </main>

        <footer>
            <div class="container">
                <div class="footer-titulo"><h3>Quer saber mais?</h3></div>
                <div class="row">

                    <div class="col">
                        <h4>Nossas Páginas</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Conheça a Dona Rita</a></li>
                            <li><a href="#">Contato</a></li>
                        </ul>
                    </div>
                    
                    <div class="col">
                        <h4>Links Úteis</h4>
                        <ul>
                            <li><a href="#">Política de Privacidade</a></li>
                            <li><a href="#">Aviso Legal</a></li>
                            <li><a href="#">Termos de Uso</a></li>
                        </ul>
                    </div>

                    <div class="col">
                        <h4>Sobre o Projeto</h4>
                        <ul>
                            <li><a href="#">Projeto de Divulgação das marmitas da Dona Rita</a></li>
                        </ul>
                    </div>

                </div>
                <hr>
                <div class="signature">
                    <center><h5>Desenvolvido por Kevin Yudi Motoyama</h5></center>
                </div>
            </div>
        </footer>
    </body>
</html>