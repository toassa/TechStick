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
                     <div class="altera">       
                            <!-- Recuperando as informações do produto -->
                            <?php
                                   $id_usuario = $_GET["id_usuario"];
                                   include "G2_cad_getinfo_usuario_back.php"; 
                            ?>

                            <!-- Formulário (após as informações serem carregadas) -->
                            <form action="G2_cad_altera_usuarios_back.php" method="post">
                            <h1>Alteração de Usuarios</h1>
                            
                            <div class="form_txt">
                                   <p>Código do produto:</p>
                                   <br><br><p>Nome do Usuario:</p>
                                   <br><br><p>Email:</p>
                                   <br><br><p>Senha:</p>
                                   <br><br><p>DDD:</p>
                                   <br><br><p>Telefone:</p>
                                   <br><br><p>CPF:</p>
                            </div>
                            
                            <div class="form_campos">
                                   <input type="text" name="id_usuario" 
                                   value="<?php echo $lacuna['id_usuario']; ?>" 
                                   readonly><br><br><br>
                                   <input type="text" name="nome_usuario" 
                                          value="<?php echo $lacuna['nome']; ?>" ><br><br><br>
                                   <input type="text" name="email" 
                                          value="<?php echo $lacuna['email']; ?>" ><br><br><br>
                                   <input type="text" name="senha" 
                                          value="<?php echo $lacuna['senha']; ?>" ><br><br><br>
                                   <input type="text" name="ddd" 
                                          value="<?php echo $lacuna['ddd']; ?>" ><br><br><br>
                                   <input type="text" name="telefone" 
                                          value="<?php echo $lacuna['telefone']; ?>" ><br><br><br>
                                   <input type="text" name="cpf" 
                                          value="<?php echo $lacuna['cpf']; ?>" ><br><br><br>
                            </div>

                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                   <div class="form_btn">
                                          <input type="submit" value="Gravar">
                                          <input type="button" value="Voltar" onclick="history.back()">
                                   </div>
                            </center>
				<br><br><br><br><br><br><br><br>
                            </form>
                     </div>
              </div>
              <br><br><br><br><br><br>
              <footer>
            <div class="autores_footer">
                <div class="autor">
                    <p>03 - Breno Piccolo Bizeli</p>
                </div>
                <div class="autor">
                    <p>04 - Bruna Raissa Corrêa Moura</p>
                </div>
                <div class="autor">
                    <p>19 - Letícia Manuela de Matos <br>Carvalho de Castro</p>
                </div>
                <div class="autor">
                    <p>21 - Marcela Amorin Peixoto</p>
                </div>
                <div class="autor">
                    <p>29 - Raissa Toassa Martinelli</p>
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