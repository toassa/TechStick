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
            <h1>Seleção detalhes</h1>
            <div class="voltar_btn" id="volta_neg">
                <ion-icon name="return-down-back-outline" type="button" onclick="history.back()"></ion-icon>
                <!-- <input type="button" value="Voltar" onclick="history.back()"> -->
            </div>

            <!-- Recuperando as informações do produto -->
            <?php
                $id_produto = $_GET["id"];
                include "G2_cad_getinfo_produto_back.php"; 
            ?>

            <div class="selecao_detalhes">

                <div class="selecao_detalhes_img">
                    <img src="../imagens/<?php  echo $lacuna['campo_imagem']; ?>.png">
                </div>

                <div class="selecao_detalhes_txt">
                     <br><br>
                     <h1><?php echo $lacuna['nome']; ?></h1>
                     <br><br>
                     <p><?php echo $lacuna['descricao']; ?></p>
                      <br><br> 
                     <p id="preco_detalhes">R$ <?php echo number_format($lacuna['preco'], 2, ',', '.'); ?></p>
                     <br><br>
                     <?php if ($lacuna['estoque']<=0)
                            {
                                echo "
                                <div class='esgotado'><span>Produto esgotado</span></div>";
                            }
                            else
                            {
                                echo "
                                <div class='estoque'><p>".$lacuna['estoque']." em estoque</p></div>";
                            }
                            ?>
                </div>
                <div class="comp_det">
                     <?php if ($lacuna['estoque']<=0)
                            {
                                echo "<br> <a href='G2_carrinho_front.php?acao=add&id_produto=".$lacuna['id_produto']."' class='comp' id='esgotado' disabled>COMPRAR</a>";
                            }
                            else
                            {
                                echo "<br> <a href='G2_carrinho_front.php?acao=add&id_produto=".$lacuna['id_produto']."' class='comp'>COMPRAR</a>";
                            }
                            ?>
                </div>
            </div>

        <!-- <?php
            // $sql="SELECT * FROM produtos WHERE excluido_produto='false' ORDER BY nome;";
            // // $sql = "SELECT estoque from produtos where id_produto = $idproduto";
            // $res = pg_query($conecta,$sql);
            // $linha = pg_fetch_array($res);
            // $id_produto = rand(1,200);
            // $pesq = "SELECT * FROM produtos WHERE excluido_produto='false' AND id_produto=$id_produto ORDER BY nome;";
            // $res = pg_query($conecta,$pesq);
            // $linha = pg_fetch_array($res);
            // if(!$pesq){
            //     $id_produto = rand(1,200);
            //     $pesq = "SELECT * FROM produtos WHERE excluido_produto='false' AND id_produto=$id_produto ORDER BY nome;";
            //     $res = pg_query($conecta,$sql);
            //     $linha = pg_fetch_array($res);
            // }else{
            //     echo "<p>foi</p>";
            //     $img = $linha['campo_imagem'];
            //     echo $img;
            // }
        ?> -->

        <div class="novidade">
            <div class="nov1">
                <p>OUTROS PRODUTOS</p>
            </div>
            <div class="prod_novidades">
                <center>
                <div class="base_n" id="primeiro_base">
                    <div class="img_base"> 
                        <a href="G2_selecao_detalhes_front.php?id=28"> <img  src='../imagens/boton_mario.png' class="peq" ></a>
                    </div>	 
                    <div class="desc"> 
                        <p> Boton do Mário </p>                                      
                    </div>
                </div>
                <div class="base_n"  id="meio_base">
                    <div class="img_base"> 
                        <a href="G2_selecao_detalhes_front.php?id=24"><img src='../imagens/boton_info.png' class="peq" ></a>
                    </div>
                    <div class="desc"> 
                        <p>Boton de informatica</p>
                    </div>
                </div>
                <div class="base_n" id="ultimo_base">
                    <div class="img_base"> 
                        <a href="G2_selecao_detalhes_front.php?id=32"><img src='../imagens/boton_onepiece.png' class="peq" ></a>
                    </div>	 
                    <div class="desc"> 
                        <p>Boton de One Piece</p>
                    </div>
                </div>
            </center>
            </div>
        </div>
		</div>
        <br><br>
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
                    <a href="G2_selecao_produtos_front.php" ><ion-icon name="bag-handle-outline"></ion-icon></a>
                    <a href="../cadastros/Usuario/login_front.php"><ion-icon name="person-add-outline"></ion-icon></a>
                    <a href="#topo" class="vt">Voltar ao topo</a>
                    </div>	
			</div>
        </footer>


</body>
</html>