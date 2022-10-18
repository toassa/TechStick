<!DOCTYPE html>
<html lang="pt-br">
       <head>
       <script>function cliqui() {
            document.getElementById("check").click();
          }</script>
              <meta charset="utf-8" />
              <title>Tech Stick</title>
              <link rel="stylesheet" href="../../css/style.css">
              <link rel="shortcut icon" type="imagem/x-icon" href="../../imagens/logo_techstick.png">
       </head>
       <body onload="cliqui()">
            <input type="checkbox" id="check">
                    <!--header de começo-->
                    <header>
                    <div class="right">
                        <label for="check">
                                <ion-icon name="menu-outline" id="sidebar_btn"></ion-icon>
                        </label>
                        <a href="../../index.html"><ion-icon name="home-outline"></ion-icon></a>
                    </div>
                    <div class="left">
                        <a href="../../index.html"><img src="../../imagens/icone_techstick.svg"></a>
                    </div>
                    <!-- <div class="right">
                        <a href="#" class="sair_btn">Sair</a>
                    </div> -->
                    </header>
                    <!--header final-->

                    <!--sidebar começo-->
                    <div class="sidebar">
                    <center>
                        <img src="../../imagens/icone_techstick.svg" class="image" alt="">
                        <h2>TECK STICK</h2>
                    </center>
                    <!-- <a href="../../index.html"><ion-icon name="home-outline"></ion-icon><span>Home</span></a> -->
            <!-- <a href="../Produto/G2_cad_pesq_produtos_front.php"><ion-icon name="pencil-outline"></ion-icon><span>Cadastro</span></a> -->
            <a href="../../venda/G2_selecao_produtos_front.php"><ion-icon name="bag-handle-outline"></ion-icon><span>Produtos</span></a>
            <a href="login_front.php"><ion-icon name="person-add-outline"></ion-icon><span>Usuário</span></a>
            <a href="../../venda/G2_carrinho_front.php"><ion-icon name="cart-outline"></ion-icon><span>Carrinho</span></a>
            <a href="../../utils/devs.html"><ion-icon name="people-circle-outline"></ion-icon><span>Devs</span></a>
            <a href="../../utils/estast.html"><ion-icon name="stats-chart-outline"></ion-icon><span>Estatisticas</span></a>
            
        </div>
        <!--sidebar final-->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <div class="content">
       

            <a href="topo"></a>
            <div class="login_dec">
                <center>
                    <h1>Login</h1>
                    <form action="login_back.php" method="post">
                        <input type="text" name="nome_usuario" id="nome_usu" maxlength="60" size="20" placeholder="E-mail" required>
                        <br><br>                       
                        
                     <input type="password" name="senha" id="senha" maxlength="20" size="20" placeholder="Senha" required>
                     <!-- <input type="checkbox" onclick="mostrarOcultarSenha()" id="ok">  -->
            <!-- <label id="ic" for="ok"><ion-icon name="eye-outline" id="olho"></ion-icon> </label> -->
                     <!-- <script type="text/javascript" src="javas.js"></script> -->
                        
                        <br><br>
                        <div class="btn_login">
                            <input type="submit" name="button" id="button" value="Entrar"> 
                            <input type="reset" name="btn" id="btn" value="Limpar">
                        <!-- </div>
                        <div class="links_login"> -->
                            <br><br>
                        <p>Ainda não tem uma conta? <a href="G2_cad_novo_usuarios_front.php" class="login">Cadastre-se</a></p>
                        <!-- <p>Confira os usuários já cadastrados: <a href="G2_cad_pesq_usuarios_front.php" class="login">Acessar</a></p> -->
                        <!-- <br><br><button><a href="login_out.php" class="logout">SAIR</a></button> -->
                        <br><button><a href="login_out.php">SAIR</a></button>
                        
                    </div>
                    </form>
                </center>
            </div>
        </div>
        <footer>
            <div class="autores_footer">
                <div class="autor">
                    <p>03 - Breno Bizeli</p>
                </div>
                <div class="autor">
                    <p>04 - Bruna Moura</p>
                </div>
                <div class="autor">
                    <p>19 - Letícia de Castro</p>
                </div>
                <div class="autor">
                    <p>21 - Marcela Amorin</p>
                </div>
                <div class="autor">
                    <p>29 - Raissa Toassa</p>
                </div>
            </div>
            <br> 
            <div class="sub_footer">
                <div class="sub_footer">
                    <div class="icone_footer">
                        <a href="../../index.html" ><ion-icon name="home-outline"></ion-icon></a>
                        <a href="../../venda/G2_selecao_produtos_front.php" ><ion-icon name="bag-handle-outline"></ion-icon></a>
                        <a href="login_front.php"><ion-icon name="person-add-outline"></ion-icon></a>
                        <a href="#topo" class="vt">Voltar ao topo</a>
                    </div>
                </div>    
            </div>	
        </footer>    
    </body>
</html>