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
       <a href="volta"></a>
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
            <div class="novo">
                <form action="G2_cad_novo_produtos_back.php" method="post">
                    <h1>Cadastro de Produtos</h1>
                    <!-- <div class="form_txt">
                        <p>Nome do Produto:</p>
                        <br><p>Descrição</p>
                        <br><p>Estoque:</p>
                        <br><p>Preço:</p>
                        <br><p>Código Visual do Produto:</p>
                        <br><p>Custo do Produto:</p>
                        <br><p>Margem do Lucro:</p>
                        <br><p>ICMS:</p>
                        <br><p>Tipo de produto:</p>
                        <br><br><br><br><p>Imagem do produto:</p>
                        <br>
                    </div> -->

                    <div class="form_campos">
                        <input type="text" name="nome_produto"  id="nome_produto" maxlength="60" size="20" placeholder="Nome do produto" required><br><br>
                        <input type="text" id="descricao" name="descricao" maxlength="60" size="20" placeholder="Descrição" required><br><br>
                        <input type="text" name="estoque_produto" id="estoque" maxlength="3" size="20" placeholder="Estoque" required><br><br>
                        <input type="text" name="preco" id="preco" maxlength="5"  size="20" placeholder="Preço" required ><br><br>
                        <input type="text" name="codvisual" id="codigo" maxlength="12" size="20" placeholder="Código Visual" required><br><br>
                        <input type="text" name="custo_produto" id="custo" maxlength="5" size="20" placeholder="Custo do Produto" required><br><br>
                        <input type="text" name="margem_lucro" id="lucro" size="20" placeholder="Margem do Lucro" required><br><br>
                        <input type="text" name="icms_produto" id="icms" size="20" placeholder="ICMS" required><br><br>
                        
                        <label class="container">Boton
                            <input type="radio" checked="checked" name="tipo_produto" value="boton">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Adesivo
                            <input type="radio" name="tipo_produto" value="stick">
                            <span class="checkmark"></span>
                        </label>
                        <input type="text" name="campo_imagem" id="imagem" maxlength="35" size="20" placeholder="Nome do arquivo" required><br><br> 
                    </div> 
                    <div class="form_btn">
                        <a href="pos_log.php"><input type="submit" name="button" id="button" value="Enviar"></a>
                        <input type="reset" name="btn" id="btn" value="Limpar">
                    </div>
                    <!-- <br><br><br><br><br><br><br><br> -->
                </form>    
            </div> 
            <input type="button" value="Voltar" onclick="history.back()">
        </div>
<br><br><br><br><br>

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
                        <a href="../Usuario/login_front.php"><ion-icon name="person-add-outline"></ion-icon></a>
                        <a href="#topo" class="vt">Voltar ao topo</a>
                    </div>
                </div>    
            </div>	
        </footer> 
    </body>
</html>