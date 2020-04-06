<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>HONKER BURGUER</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CSS/reset.css">
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/hovermenup.js"></script>
        <script type="text/javascript" src="js/hovermenuv.js"></script>
        <script type="text/javascript" src="js/biblioteca.js"></script>
        <script type="text/javascript" src="js/cycle.js"></script>
        <script type="text/javascript" src="js/slide.js"></script>
        
<!--        JS Mobile-->
        
    </head>
    <body>
        <header>
            <div class="alinhar centraliza">
                <div id="logo">
                    <a href="homeHamburgueria.php" title="home" target="_parent">
                        <img class="imgLogo centraliza" src="imagens/logoHamburgueria.png">
                    </a>
                </div>
<!--                Menu mobile-->
                <nav id="containerMenuMobile">
                    <div id="iconeMenu"></div>
                    <div id="menuMobile">
                        <ul class="menu">
                            <li>
                                <a href="curiosidades.php" title="curiosidades" target="_blank" class="formatItem">
                                    CURIOSIDADES
                                </a>
                            </li>
                            <li>
                                <a href="empresa.php" title="empresa" target="_blank" class="formatItem">
                                    EMPRESA 
                                </a>
                            </li>
                            <li>
                                <a href="promocoes.php" title="promocoes" target="_blank" class="formatItem">
                                    PROMOÇÕES
                                </a>
                            </li>
                            <li>
                                <a href="loja.php" title="lojas" target="_blank" class="formatItem">
                                    LOJAS 
                                </a>
                            </li>
                            <li>
                                <a href="produtomes.php" title="produtomes" target="_blank" class="formatItem">
                                    PRODUTO DO MÊS 
                                </a>
                            </li>
                            <li>
                                <a href="contato.php" title="contato" target="_blank" class="formatItem">
                                    CONTATO 
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
<!--menu Desktop-->
                <nav id="containerMenu">
                    <ul class="menu">
                        <li class="menuItem">
                            <a href="curiosidades.php" title="curiosidades" target="_blank" class="formatItem">
                                CURIOSIDADES
                            </a>
                        </li>
                        <li class="menuItem">  
                            <a href="empresa.php" title="empresa" target="_blank" class="formatItem">
                                EMPRESA 
                            </a>
                        </li>
                        <li class="menuItem"> 
                            <a href="promocoes.php" title="promocoes" target="_blank" class="formatItem">
                                PROMOÇÕES
                            </a>
                        </li>
                        <li class="menuItem">
                            <a href="loja.php" title="lojas" target="_blank" class="formatItem">
                                LOJAS 
                            </a>
                        </li>
                        <li class="menuItem">  
                            <a href="produtomes.php" title="produtomes" target="_blank" class="formatItem">
                                PRODUTO DO MÊS 
                            </a>
                        </li>
                        <li class="menuItem"> 
                            <a href="contato.php" title="contato" target="_blank" class="formatItem">
                                CONTATO 
                            </a>
                        </li>
                    </ul>
                </nav>
<!--Autenticação CMS-->
                <div id="autenticacaoCMS">
                    <form name="frmAutenticacao" method="POST" action="homeHamburgueria.php">
                        <div class="login">
                            <label class="login texto">Usuário</label>
                        </div>
                        <div class="login center">
                            <label class="login texto center">Senha</label>
                        </div>
                        <div>    
                            <input class="input" type="text" name="txtUsuario">

                            <input class="input" type="text" name="txtUsuario">
                            
                            <input class="button" type="submit" name="btnEnviar" value="Ok">
                        </div>
                    </form>
                </div>
            </div>
        </header>
        
        
        <div id="containerGeral" class="centraliza">
            <div id="redesSociais">
            <div class="facebook">
                <a href="https://www.facebook.com/" title="facebook" target="_blank">
                    <img class="iconeRs" src="./imagens/facebook.ico">
                </a>
            </div>
            <div class="Instagram">
                <a href="https://www.instagram.com/?hl=pt-br" title="instagram" target="_blank">
                    <img class="iconeRs" src="./imagens/instragram.ico">
                </a>
            </div>
            <div class="Whatsapp">
                <a href="https://web.whatsapp.com/" title="whatsapp" target="_blank">
                    <img class="iconeRs" src="./imagens/whatsapp.ico">
                </a>
            </div>
        </div>
<!--            1300 de largura. 1200wt para conteudo. 100wt para redes sociais-->
            <div id="slider">
                <ul>
                    <li><img src="imagens/SLIDER1.jpg" class="imageSlider"></li>
                    <li><img src="imagens/SLIDER2.jpg" class="imageSlider"></li>
                    <li><img src="imagens/SLIDER2.jpeg" class="imageSlider"></li>
                </ul>
                <div id="prev" class="buttons">&laquo;</div>
                <div id="next" class="buttons">&raquo;</div>
            </div>
            <ul id="menuVertical">
                <li class="texto menuVItem">ITEM 1</li>
                <li class="texto menuVItem">ITEM 2</li>
                <li class="texto menuVItem">ITEM 3</li>
                <li class="texto menuVItem">ITEM 4</li>
                <li class="texto menuVItem">ITEM 5</li>
                <li class="texto menuVItem">ITEM 6</li>
            </ul>
            
            <nav id="containerMenuMobV">
                <div id="iconeMenuV"></div>
                <div id="menuMobileV">
                    <ul id="menuMobV">
                        <li class="texto menuVItemMob">ITEM 1</li>
                        <li class="texto menuVItemMob">ITEM 2</li>
                        <li class="texto menuVItemMob">ITEM 3</li>
                        <li class="texto menuVItemMob">ITEM 4</li>
                        <li class="texto menuVItemMob">ITEM 5</li>
                        <li class="texto menuVItemMob">ITEM 6</li>
                    </ul>
                </div>
            </nav>
            
            <div id="containerHamburguer">
                <div class="containerImg centraliza">
                    <img class="imgProduto centraliza" src="imagens/hamburguer1.jpg">
                </div>
                <div class="center texto">
                    Insano Naruto<br>
                    Descrição:<br>
                    Preço: R$ 38,00
                </div>
                <div class="center texto">
                    Detalhes
                </div>
            </div>
            <div id="containerHamburguer">
                <div class="containerImg centraliza">
                    <img class="imgProduto centraliza" src="imagens/hamburguer6.jpg">
                </div>
                <div class="center texto">
                    Insano Kakashi Hatake<br>
                    Descrição:<br>
                    Preço: R$28,00
                </div>
                <div class="center texto">
                    Detalhes
                </div>
            </div>
            <div id="containerHamburguer">
                <div class="containerImg centraliza">
                    <img class="imgProduto centraliza" src="imagens/hamburguer2.jpg">
                </div>
                <div class="center texto">
                    Insano Sakura<br>
                    Descrição:<br>
                    Preço: R$26,00
                </div>
                <div class="center texto">
                    Detalhes
                </div>
            </div>
            <div id="containerHamburguer">
                <div class="containerImg centraliza">
                    <img class="imgProduto centraliza" src="imagens/hamburguer3.jpg">
                </div>
                <div class="center texto">
                    Insano Rock Lee<br>
                    Descrição:<br>
                    Preço: R$24,00
                </div>
                <div class="center texto">
                    Detalhes
                </div>
            </div>
            <div id="containerHamburguer">
                <div class="containerImg centraliza">
                    <img class="imgProduto centraliza" src="imagens/hamburguer4.jpg">
                </div>
                <div class="center texto">
                    Insano Hinata<br>
                    Descrição:<br>
                    Preço: R$34,00
                </div>
                <div class="center texto">
                    Detalhes
                </div>
            </div>
            <div id="containerHamburguer">
                <div class="containerImg centraliza">
                    <img class="imgProduto centraliza" src="imagens/hamburguer5.jpg">
                </div>
                <div class="center texto">
                    Insano Sasuke<br>
                    Descrição:<br>
                    Preço: R$38,00
                </div>
                <div class="center texto">
                    Detalhes
                </div>
            </div>
            
        </div>
        
        <footer id="rodape" class="centraliza">
<!--            1 linha 4 colunas-->
            <div class="btnClick sistemaInterno">
                <form name="frmSistemaInterno" method="POST" action="homeHamburgueria.php">
                    <input class="button btnClick" type="submit" name="btnSistemaInterno" value="Sistema Interno">
                </form>
            </div>
            <div id="endereco" class="texto">
                <label>Endereço: Av. Luis Carlos Berrini, no 666 - Centro, Embu das Artes - SP, 06803-430</label>
            </div>
            <div id="imgApk">
                <img class="apk" src="imagens/rodape.png">
            </div>
            <div class="btnClick baixarApp">
                <form name="frmBaixarApp" method="POST" action="homeHamburgueria.php">
                    <input class="button btnClick" type="submit" name="btnBaixarApp" value="Baixe o App">
                </form>
            </div>
        </footer>
        
        <footer id="rodapeMobile" class="centraliza">
            <div id="redesSociaisMobile">
                <div class="facebook">
                    <a href="https://www.facebook.com/" title="facebook" target="_blank">
                        <img class="iconeRsMob" src="./imagens/facebook.ico">
                    </a>
                </div>
                <div class="Instagram">
                    <a href="https://www.instagram.com/?hl=pt-br" title="instagram" target="_blank">
                        <img class="iconeRsMob" src="./imagens/instragram.ico">
                    </a>
                </div>
                <div class="Whatsapp">
                    <a href="https://web.whatsapp.com/" title="whatsapp" target="_blank">
                        <img class="iconeRsMob" src="./imagens/whatsapp.ico">
                    </a>
                </div>
            </div>
        </footer>
    
    </body>
</html>