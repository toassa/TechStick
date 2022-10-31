<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <script>function cliqui() {
            document.getElementById("check").click();
          }</script>
        <meta charset="utf-8" />
        <title>Tech Stick</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="shortcut icon" type="imagem/x-icon" href="../imagens/logo_techstick.png">
    </head>
    <body onload="cliqui(),select()">
    <!-- <iframe src="../utils/cabecalho.html" title="cabecalho" frameBorder="0" 
        width="100%" scrolling="no" allowfullscreen>
    </iframe> -->
    <input type="checkbox" id="check">
       <!--header de começo-->
       <header>
       <div class="right">
            <label for="check">
                    <ion-icon name="menu-outline" id="sidebar_btn"></ion-icon>
            </label>
            <a href="../index.html"><ion-icon name="home-outline"></ion-icon></a>
       </div>
       <div class="left">
           <a href="../index.html"><img src="../imagens/icone_techstick.svg"></a>
       </div>
       <!-- <div class="right">
              <a href="#" class="sair_btn">Sair</a>
       </div> -->
       </header>
       <!--header final-->

       <!--sidebar começo-->
       <div class="sidebar">
       <center>
            <img src="../imagens/icone_techstick.svg" class="image" alt="">
            <h2>TECK STICK</h2>
       </center>
       <!-- <a href="../index.html"><ion-icon name="home-outline"></ion-icon><span>Home</span></a> -->
       <!-- <a href="../cadastros/Produto/G2_cad_pesq_produtos_front.php"><ion-icon name="pencil-outline"></ion-icon><span>Cadastro</span></a> -->
       <a href="G2_selecao_produtos_front.php"><ion-icon name="bag-handle-outline"></ion-icon><span>Produtos</span></a>
       <a href="../cadastros/Usuario/login_front.php"><ion-icon name="person-add-outline"></ion-icon><span>Usuário</span></a>
       <a href="G2_carrinho_front.php"><ion-icon name="cart-outline"></ion-icon><span>Carrinho</span></a>
       <a href="../utils/devs.html"><ion-icon name="people-circle-outline"></ion-icon><span>Devs</span></a>
        <a href="../utils/estast.html"><ion-icon name="stats-chart-outline"></ion-icon><span>Estatisticas</span></a>
</div>
       
       <!--sidebar final-->
       <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
       <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <div class="content">
            <a href="topo"></a>
            <?php
            session_start();
            if (!isset($_SESSION['usulogado']))
            {        
                echo "<h1>Por favor faça o login ou cadastre-se!!!</h1>";
            }
            //  $id_usuario = $_SESSION['usulogado']['id_usuario']; // Depois precisamos alterar para pegar da $_SESSION
            else {
                include "G2_finalizacao_compra_back.php";

            echo "<h1>Compra Finalizada com Sucesso!!!</h1>";
            echo "<h2>Muito obrigado por comprar na Tech Stick!</h2>";
            }
        ?>
        <center>
            <div class="masc">
                <img class="masc"src="../imagens/mascote.svg">
            </div>

            <!-- <h2>Muito obrigado por comprar na Tech Stick!</h2><br><br> -->
            <br><br>
            <a href="../index.html" class="voltar_btn">VOLTAR</a>
        </center>
<br><br>
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
                <div class="icone_footer">
                    <a href="../index.html" ><ion-icon name="home-outline"></ion-icon></a>
                    <a href="venda/G2_selecao_produtos_front.php" ><ion-icon name="bag-handle-outline"></ion-icon></a>
                    <a href="../cadastros/Usuario/login_front.php"><ion-icon name="person-add-outline"></ion-icon></a>
                    <a href="#topo" class="vt">Voltar ao topo</a>
                    </div>	
			</div>
            <script src="utils/javas.js"></script>

        </footer>
    </body>
</html>