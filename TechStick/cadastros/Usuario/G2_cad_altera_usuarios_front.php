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

              <?php
                     $id_usuario = $_GET["id_usuario"];
                     include "G2_cad_getinfo_usuario_back.php"; 
              ?>

            <div class="form-container">
                <div class="form-image">
                    <img src="../../imagens/capa_form.png" alt="">
                </div>
                <div class="form">
                    <form action="G2_cad_altera_usuarios_back.php" method="post" class="novo_usu">
                        <div class="form-header">
                            <div class="title">
                                <h1>Cadastre-se</h1>
                            </div>
                            <div class="login-button">
                                <button><a href="G2_cad_exlui_usuarios_front.php?id_usuario=<?php echo $id_usuario; ?>">EXCLUIR</a></button>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="input-box">
                                <label for="id_usu">ID do usuário</label>
                                <input type="text" name="id_usuario" 
                                   id="id_usu" value="<?php echo $lacuna['id_usuario']; ?>" 
                                   readonly>
                            </div>
                            <div class="input-box">
                                <label for="nome_usu">Nome</label>
                                <input type="text" id="nome_usu" name="nome_usuario" 
                                   value="<?php echo $lacuna['nome']; ?>">
                            </div>
                            <div class="input-box">
                                <label for="email">E-mail</label>
                                <input type="text" id="email" name="email" 
                                   value="<?php echo $lacuna['email']; ?>">
                            </div>
                            <!-- <div class="input-box">
                                <label for="senha">Senha</label>
                                <input type="text" id="senha" name="Senha" 
                                   value="<?php echo $lacuna['senha']; ?>">
                            </div> -->
                            <div class="input-box">
                                <label for="ddd">DDD</label>
                                <input type="text" name="ddd" 
                                   value="<?php echo $lacuna['ddd']; ?>" 
                                   id="ddd" readonly>
                            </div>
                            <div class="input-box">
                                <label for="tel">Telefone</label>
                                <input type="text" name="telefone" 
                                   id="tel" value="<?php echo $lacuna['telefone']; ?>">
                            </div>
                            <div class="input-box">
                                <label for="cpf">CPF</label>
                                <input type="text" id="cpf" name="cpf" 
                                   value="<?php echo $lacuna['cpf']; ?>">
                            </div>
                        </div>

                        <div class="continue-button">
                            <button><input type="submit" value="ALTERAR"></button>
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
 <script src="utils/javas.js"></script>

    </body>
</html>