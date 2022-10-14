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
        <div class="novo">
                <!-- <img src="../../imagens/img_form.jpg" style="width: 450px; height: 500px;"> -->
                <form action="G2_cad_novo_usuarios_back.php" method="post" class="novo_usu">
                <div class="top_form">
                    <h1>Cadastro de Usuarios</h1>
                    <!-- <input type="button" value="ENTRAR"> -->
                </div>
                <!-- <div class="form_txt">
                <br>    
                    <div class="form_left">
                        <p>Nome do Usuario:</p><br>
                        <input type="text" name="nome_usuario" placeholder="Nome" id="nome_usu" maxlength="60" size="20"  required>
                        <br><br>
                        <p>E-mail:</p><br>
                        <input type="email" name="email" id="email" placeholder="E-mail" maxlength="60" size="20"  required>
                        <p>Senha:</p><br>
                        <input type="password" name="senha" id="senha" placeholder="Senha" maxlength="20" size="20"  required>
                    </div>
                    <br>
                    <div class="form_right">
                        
                    </div> 
                                   <p>Nome do Usuario:</p>
                                   <br><br><p>E-mail:</p>
                                   <br><br><p>Senha:</p>
                                   <br><br><p>DDD:</p>
                                   <br><br><p>Telefone:</p>
                                   <br><br><p>CPF:</p>
                    </div>-->
                       
                      <div class="form_campos">
                        <p>*</p>
                        <input type="text" name="nome_usuario" placeholder="Nome" id="nome_usu" maxlength="60" size="20"  required>
                        <br><br><br>
                        <p>*</p>
                        <input type="email" name="email" id="email" placeholder="E-mail" maxlength="60" size="20"  required>
                        <br><br><br>
                        <p>*</p>
                        <input type="password" name="senha" id="senha" placeholder="Senha" maxlength="20" size="20"  required>
                        <br><br><br>
                        <p>*</p>
                        <input type="text" name="ddd" placeholder="DDD" maxlength="2" size="20"  required>
                        <br><br><br>
                        <p>*</p>
                        <input type="text" name="telefone" placeholder="Telefone" maxlength="9" size="20"  required>
                        <br><br><br>
                        
                        <input type="text" name="cpf" placeholder="CPF" maxlength="14" size="20"  required>
                        
                </div>
                 
                <div class="form_btn">
                        <input type="submit" name="button" id="button" value="Enviar">  
                      
                        <input type="reset" name="btn" id="btn" value="Limpar"> 
				 </div>
                <br><br><br><br>  <br><br><br><br>
                </form> 
            </div>
            <!-- <input type="button" value="Voltar" onclick="history.back()"> -->
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
    </body>
</html>