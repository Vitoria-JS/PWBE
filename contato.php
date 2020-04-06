<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>HONKER BURGUER</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CSS/reset.css">
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <script type="text/javascript" src="js/biblioteca.js"></script>
        <script type="text/javascript" src="js/cycle.js"></script>
        
<!--        JS Mobile-->
        <script src="js/jquery.js"></script>
        <script>
            $(document).ready(function(){
                $('#iconeMenu').click(function(){
                    $('#menuMobile').fadeToggle(1000);
            });
                $('.itemMenu').click(function(){
                    $('#menuMobile').fadeToggle();
                });
                });
        </script>
        <script>
            $(document).ready(function(){
                $('#iconeMenuV').click(function(){
                    $('#menuMobileV').fadeToggle(1000);
            });
                $('.itemMenuV').click(function(){
                    $('#menuMobileV').fadeToggle();
                });
                });
        </script>
    </head>
    <body>
        <header>
            <div class="alinhar centraliza">
                <div id="logo">
                    <a href="homeHamburgueria.php" title="home" target="_parent">
                        <img class="imgLogo" src="imagens/logoHamburgueria.png">
                    </a>
                </div>
<!--                Menu mobile-->
                <nav id="containerMenuMobile">
                    <div id="iconeMenu">
                    
                    </div>
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
        
        <div id="redesSociais">
            <div class="facebook">
                <img class="iconeRs" src="./imagens/facebook.ico">
            </div>
            <div class="Instagram">
                <img class="iconeRs" src="./imagens/instragram.ico">
            </div>
            <div class="Whatsapp">
                <img class="iconeRs" src="./imagens/whatsapp.ico">
            </div>
        </div>
        
        <div id="containerGeralContato" class="centraliza">
                <div class="centraliza">
               <h1 class="contato texto">CONTATE-NOS</h1>
                </div>
            <div id="cadastro" class="centraliza">
                <div id="cadastroInformacoes">
                    <form action="index.php" name="frmCadastro" method="post">
                        <div class="campos">
                            <div class="cadastroInformacoesPessoais">
                                <p> Nome: </p>
                            </div>
                            <div class="cadastroEntradaDeDados">
                                <input type="text" name="txtNome" value="">
                            </div>
                        </div>
                        <div class="campos">
                            <div class="cadastroInformacoesPessoais">
                                <p> Facebook </p>
                            </div>
                            <div class="cadastroEntradaDeDados">
                                <input type="text" name="txtEndereco" value="">
                            </div>
                        </div>
                        <div class="campos">
                            <div class="cadastroInformacoesPessoais">
                                <p> Profissão </p>
                            </div>
                            <div class="cadastroEntradaDeDados">
                                <input type="text" name="txtBairro" value="">
                            </div>
                        </div>
                        <div class="campos">
                            <div class="cadastroInformacoesPessoais">
                                <p> Telefone: </p>
                            </div>
                            <div class="cadastroEntradaDeDados">
                                <input type="text" name="txtTelefone" value="">
                            </div>
                        </div>
                        <div class="campos">
                            <div class="cadastroInformacoesPessoais">
                                <p> Celular: </p>
                            </div>
                            <div class="cadastroEntradaDeDados">
                                <input type="text" name="txtCelular" value="">
                            </div>
                        </div>
                        <div class="campos">
                            <div class="cadastroInformacoesPessoais">
                                <p> Email: </p>
                            </div>
                            <div class="cadastroEntradaDeDados">
                                <input type="text" name="txtEmail" value="">
                            </div>
                        </div>
                        <div class="campos">
                            <div class="cadastroInformacoesPessoais">
                                <p> Sexo: </p>
                            </div>
                            <div class="cadastroEntradaDeDados textoMob texto">
                                <input type="radio" name="escolha" value="Feminino"> Feminino.
                                <input type="radio" name="escolha" value="Masculino"> Masculino.
                            </div>
                        </div>
                        <div class="campos">
                            <div class="cadastroInformacoesPessoais">
                                <p> Observações: </p>
                            </div>
                            <div class="cadastroEntradaDeDados">
                                <textarea name="txtObs" cols="50" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="enviar centraliza">
                            <div class="enviar centraliza">
                                <input type="submit" name="btnEnviar" value="Salvar">
                            </div>
                        </div>
                    </form>
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