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

        <main class="main2">
            <section class="marmita">
                <div class="m1">
                <?php
                    if (isset($_GET['id']) && !empty ($_GET['id'])) {
                    
                    $id = $_GET['id'];

                    foreach($marmitas as $key => $value){
                        if ($value['id'] == $id){
                ?>

                    <header class="marmita_titulo">
                        <h1>A <?=$value['nome'];?></h1>
                        <p>Tamanho: <span><?=$value['tamanho'];?> | Preço:</span> <?=$value['preco'];?></p>
                    </header>
                    <div class="img">
                        <img src="<?=$value['img'];?>" class="marmita-img">
                    </div>
                    <div class="conteudo">
                        <h3>Ingredientes:</h3>
                        <p><?=$value['ing'];?></p>
                    </div>
                <?php
                        }
                    }
                }else {
                    echo "Erro! Essa página não existe!";
                }
                ?>
            </div>
            </section>
        </main>

        <section class="tel">
            <h2> Contato: 12 34567-8910 </h2>
        </section>
        <hr>

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