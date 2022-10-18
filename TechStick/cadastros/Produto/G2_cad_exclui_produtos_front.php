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
                     <a href="../../venda/G2_selecao_produtos_front.php"><ion-icon name="bag-handle-outline"></ion-icon><span>Produtos</span></a>
                     <a href="../Usuario/login_front.php"><ion-icon name="person-add-outline"></ion-icon><span>Usuário</span></a>
                     <a href="../../venda/G2_carrinho_front.php"><ion-icon name="cart-outline"></ion-icon><span>Carrinho</span></a>
                     <a href="../../utils/devs.html"><ion-icon name="people-circle-outline"></ion-icon><span>Devs</span></a>
                     <a href="../../utils/estast.html"><ion-icon name="stats-chart-outline"></ion-icon><span>Estatisticas</span></a>
                     </div>
                     <!--sidebar final-->
                     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

              <div class="content">    
              <a href="topo"></a>
              <div class="form-container">
                     <div class="form-image">
                            <img src="../../imagens/capa_form.png" alt="">
                     </div>
                     <div class="form">
                     <!-- Recuperando as informações do produto -->
                     <?php
                            $id_produto = $_GET["id_produto"];
                            include "G2_cad_getinfo_produto_back.php"; 
                     ?>

                     <form action="G2_cad_exclui_produtos_back.php" method="post">
                            <div class="form-header">
                                   <div class="title">
                                   <h1>Confirmação: Exclusão dos Produtos</h1>
                                   </div>
                                   <div class="login-button">
                                   <button><a href="G2_cad_altera_produtos_front.php?id_produto=<?php echo $id_produto; ?>">EDITAR</a></button>
                                   </div>
                            </div>

                            <div class="input-group">
                                   <div class="input-box">
                                   <label for="id_prod">ID do produto</label>
                                   <input type="text" id="id_prod" name="id_produto" 
                                   value="<?php echo $lacuna['id_produto']; ?>" 
                                   readonly>
                                   </div>
                                   <div class="input-box">
                                   <label for="nome_prod">Nome</label>
                                   <input type="text" id="nome_prod" name="nome_produto" 
                                          value="<?php echo $lacuna['nome']; ?>" readonly  >
                                   </div>
                                   <div class="input-box">
                                   <label for="descricao">Descrição</label>
                                   <input type="text" id="descricao" name="descricao" 
                                          value="<?php echo $lacuna['descricao']; ?>" readonly  >
                                   </div>
                                   <div class="input-box">
                                   <label for="estoque_produto">Estoque </label>
                                   <input type="text" id="estoque_produto" name="estoque_produto" 
                                          value="<?php echo $lacuna['estoque']; ?>" readonly >
                                   </div>
                                   <div class="input-box">
                                   <label for="preco">Preço  </label>
                                   <input type="text" id="preco" name="preco" 
                                          value="<?php echo $lacuna['preco']; ?>" readonly>
                                   </div>
                                   <div class="input-box">
                                   <label for="codigo">Código visual  </label>
                                   <input type="text" name="codvisual" 
                                          value="<?php echo $lacuna['codigovisual']; ?>" id="codigo" readonly>
                                   </div>
                                   <div class="input-box">
                                   <label for="custo">Custo  </label>
                                   <input type="text" id="custo" name="custo_produto" 
                                          value="<?php echo $lacuna['custo']; ?>" readonly>
                                   </div>
                                   <div class="input-box">
                                   <label for="lucro">Margem de lucro  </label>
                                   <input type="text" id="lucro" name="margem_lucro" 
                                          value="<?php echo $lacuna['margem_lucro']; ?>" >
                                   </div>
                                   <div class="input-box">
                                   <label for="icms">ICMS  </label>
                                   <input type="text" id="icms" name="icms_produto" 
                                          value="<?php echo $lacuna['icms']; ?>" readonly>
                                   </div>
                                   <div class="input-box">
                                   <label for="imagem">Imagem do produto  </label>
                                   <input type="text" id="imagem" name="campo_imagem" 
                                          value="<?php echo $lacuna['campo_imagem']; ?>" readonly>
                                   </div>
                            </div>

                            <div class="gender-inputs">
                            <div class="input-box">
                                   <label>Tipo de produto  </label>
                            </div>

                            <div class="gender-group">
                                   <div class="gender-input">
                                   <input type="radio" name="tipo_produto" id="boton" value="boton"
                                   <?php if($lacuna['tipo'] == 'boton'){?>
                                          checked="checked"
                                   <?php } ?>
                                   >
                                   <span class="checkmark"></span>
                                   <label for="boton">Boton</label>
                                   </div>

                                   <div class="gender-input">
                                   <input type="radio" id="stick" name="tipo_produto" value="stick"
                                   <?php if($lacuna['tipo'] == 'stick'){?>
                                          checked="checked"
                                   <?php } ?>
                                   >
                                   <span class="checkmark"></span>
                                   <label for="stick">Adesivo</label>
                                   </div>
                            </div>
                            </div>

                                   <div class="continue-button">
                                          <button><input type="submit" value="EXCLUIR"></button>
                                   </div>
                            </form> 
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
                        <a href="../Usuario/login_front.php"><ion-icon name="person-add-outline"></ion-icon></a>
                        <a href="#topo" class="vt">Voltar ao topo</a>
                    </div>
                </div>    
            </div>	
        </footer>
       </body>
</html>