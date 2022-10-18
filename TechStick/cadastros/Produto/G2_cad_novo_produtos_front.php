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
            <div class="form-container">
                <div class="form-image">
                    <img src="../../imagens/capa_form.png" alt="">
                </div>
                <div class="form">
                    <form action="G2_cad_novo_produtos_back.php" method="post">
                        <div class="form-header">
                            <div class="title">
                                <h1>Cadastro de produtos</h1>
                            </div>
                            <div class="login-button">
                                <button><a href="../../venda/G2_selecao_produtos_front.php">PRODUTOS</a></button>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="input-box">
                                <label for="nome_prod">Nome <b>*</b></label>
                                <input type="text" name="nome_produto"  id="nome_pro" maxlength="60" size="20" placeholder="Digite o nome do produto" required>
                            </div>
                            <div class="input-box">
                                <label for="descricao">Descrição <b>*</b></label>
                                <input type="text" id="descricao" name="descricao" maxlength="60" size="20" placeholder="Digite a descrição" required>
                            </div>
                            <div class="input-box">
                                <label for="estoque_produto">Estoque </label>
                                <input type="text" name="estoque_produto" id="estoque" maxlength="3" size="20" placeholder="Digite o estoque" required pattern="[0-9]+$" title="Insira apenas números">
                            </div>
                            <div class="input-box">
                                <label for="preco">Preço <b>*</b></label>
                                <input type="text" name="preco" id="preco" maxlength="5"  size="20" placeholder="Digite o preço" pattern="[0-9]+$" title="Insira apenas números" required>
                            </div>
                            <div class="input-box">
                                <label for="codigo">Código visual <b>*</b></label>
                                <input type="text" name="codvisual" id="codigo" maxlength="12" size="20" placeholder="Digite o código Visual" pattern="[0-9]+$" title="Insira apenas números" required>
                            </div>
                            <div class="input-box">
                                <label for="custo">Custo <b>*</b></label>
                                <input type="text" name="custo_produto" id="custo" maxlength="5" size="20" placeholder="Digite o custo do Produto" pattern="[0-9]+$" title="Insira apenas números" required>
                            </div>
                            <div class="input-box">
                                <label for="lucro">Margem de lucro <b>*</b></label>
                                <input type="text" name="margem_lucro" id="lucro" size="20" placeholder="Digite a margem de lucro" pattern="[0-9]+$" title="Insira apenas números" required>
                            </div>
                            <div class="input-box">
                                <label for="icms">ICMS <b>*</b></label>
                                <input type="text" name="icms_produto" id="icms" size="20" placeholder="Digite o ICMS" pattern="[0-9]+$" title="Insira apenas números" required>
                            </div>
                            <div class="input-box">
                                <label for="imagem">Imagem do produto <b>*</b></label>
                                <input type="text" name="campo_imagem" id="imagem" maxlength="35" size="20" placeholder="Digite o nome do arquivo" required>
                            </div>
                        </div>

                        <div class="gender-inputs">
                        <div class="input-box">
                            <label>Tipo de produto <b>*</b></label>
                        </div>

                        <div class="gender-group">
                            <div class="gender-input">
                                <input type="radio" checked="checked" name="tipo_produto" id="boton" value="boton">
                                <span class="checkmark"></span>
                                <label for="boton">Boton</label>
                            </div>

                            <div class="gender-input">
                                <input type="radio" id="stick" name="tipo_produto" value="stick">
                                <span class="checkmark"></span>
                                <label for="stick">Adesivo</label>
                            </div>
                        </div>
                    </div>

                        <div class="continue-button">
                            <button><input type="submit" value="CADASTRAR"></button>
                        </div>
                    </form> 
                </div>
            </div>      
            <input type="button" value="Voltar" onclick="history.back()">
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