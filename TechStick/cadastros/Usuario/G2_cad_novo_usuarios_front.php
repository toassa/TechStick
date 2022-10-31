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
            <div class="voltar_btn" id="volta_pos">
                <ion-icon name="return-down-back-outline" type="button" onclick="history.back()"></ion-icon>
                <!-- <input type="button" value="Voltar" onclick="history.back()"> -->
            </div>
            <div class="form-container">
                <div class="form-image">
                    <img src="../../imagens/capa_form.png" alt="">
                </div>
                <div class="form">
                    <form action="G2_cad_novo_usuarios_back.php" method="post" class="novo_usu">
                        <div class="form-header">
                            <div class="title">
                                <h1>Cadastre-se</h1>
                            </div>
                            <div class="login-button">
                                <button><a href="login_front.php">ENTRAR</a></button>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="input-box">
                                <label for="nome_usu">Nome <b>*</b></label>
                                <input type="text" name="nome_usuario" placeholder="Digite seu nome" id="nome_usu" maxlength="60" size="20"  required>
                            </div>
                            <div class="input-box">
                                <label for="email">E-mail <b>*</b></label>
                                <input type="email" name="email" id="email" placeholder="Digite seu e-mail" maxlength="60" size="20"  required>
                            </div>
                            <div class="input-box">
                                <label for="senha">Senha <b>*</b></label>
                                <input type="password" name="senha" id="senha" placeholder="Digite sua senha" maxlength="20" size="20"  required>
                            </div>
                            <div class="input-box">
                                <label for="ddd">DDD <b>*</b></label>
                                <input type="text" name="ddd" id="ddd" placeholder="Digite seu DDD" maxlength="2" size="20" pattern="[0-9]+$" title="Insira apenas números" required>
                            </div>
                            <div class="input-box">
                                <label for="tel">Telefone <b>*</b></label>
                                <input type="text" name="telefone" id="tel" placeholder="Digite seu telefone" maxlength="9" size="20" pattern="[0-9]+$" title="Insira apenas números" required>
                            </div>
                            <div class="input-box">
                                <label for="cpf">CPF</label>
                                <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" maxlength="14" size="20" pattern="[0-9]+$" title="Insira apenas números">
                            </div>
                        </div>

                        <div class="continue-button">
                            <button><input type="submit" value="CADASTRAR"></button>
                        </div>
                    </form> 
                </div>
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
        </div>
    </body>
</html>