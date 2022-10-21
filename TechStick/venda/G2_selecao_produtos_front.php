<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <script>function cliqui() {
            document.getElementById("check").click();
          }</script>
        <meta charset="utf-8" />
        <title>Tech Stick</title>
        <link rel="stylesheet" href="../css/style.css">
        <script src="../utils/javas.js"> </script>
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
            <h1>Seleção de produtos</h1>
            <div class="produtos_visual">
                <?php 
                    include "G2_selecao_produtos_back.php";

                    // <!--<img src='img/".$linha['imagem']."' height=250 width=250>-->

                    if ($qtde == 0) {
                        echo "Não foi encontrado nenhum produto !!!<br><br>";
                        return;
                    }


                /* <select name="tipo_produto" onchange="reloadWithParam()" id="tipo_produto">
                    <option value="todos">Todos</option>
                    <option value="boton" id="botons">Botons</option>
                    <option value="stick">Adesivos</option>
                </select>  -->
                <!-- <option value="-->*/
                $valor;


                echo "<select name='tipo_produto' onchange='reloadWithParam()' id='tipo_produto'>";
                echo "<option value='boton|stick'"; if ($final=="boton|stick" || $final!="boton" && $final !="stick"){ echo "selected";} echo ">Todos</option>";
                echo "<option value='boton'"; if ($final=="boton"){ echo "selected";} echo ">Botons</option>";
                echo "<option value='stick'"; if ($final=="stick"){ echo "selected";} echo ">Adesivos</option>";
                echo "</select>"; ?>
           

                </div>
                <div class="prod_select">
                <?php
                
                    //display:grid --> display em grade, o esquema fica dinâmico
                  //  echo '<div style="display:grid; 
                                 //   grid-template-columns: repeat(3,300px); 
                                  //  grid-column-gap: 10px;
                                   // grid-row-gap: 10px;
                                   // width=1250px">';
                    //colocar % no width
                    //'repeat(3,300px);' = repete 3 colunas de 300px

                    // Criar linhas com os dados dos produtos
                    if($resultado_lista)
                    foreach ($resultado_lista as $linha)
                    {
                        $preco= number_format($linha['preco'], 2, ',', '.');
                        if ($final == $linha['tipo']){
                            echo "
                            <div class='selecao_prod'>
                                <div>
                                    <br>
                                    <a href='G2_selecao_detalhes_front.php?id=".$linha['id_produto']."'> 
                                    <img src='../imagens/".$linha['campo_imagem'].".png'/>
                                    </a>
                                </div>

                                <div>
                                    <div><p>".$linha['nome']."</p></div>
                                    <div><p>R$ ".$preco."</p></div>";

                                if ($linha['estoque']<=0)
                                {
                                    echo "
                                    <div><span style='color:red'>Produto esgotado</span></div>";
                                    echo "<br> <a href='G2_carrinho_front.php?acao=add&id_produto=".$linha['id_produto']."' class='btn_prod' id='esgotado' disabled>COMPRAR</a>";
                                }
                                else
                                {
                                    echo "
                                    <div><p>".$linha['estoque']." em estoque</p></div>";
                                    echo "<br> <a href='G2_carrinho_front.php?acao=add&id_produto=".$linha['id_produto']."' class='btn_prod'>COMPRAR</a>";
                                }
                                
                                //chamada do carrinho
                                // echo "<br> <a href='G2_carrinho_front.php?acao=add&id_produto=".$linha['id_produto']."' class='btn_prod'>COMPRAR</a>";
                            echo "</div><br>";
                        echo "</div>";
                    }
                    else if ($final=="boton|stick" || $final!="boton" && $final !="stick")
                    {
                        echo "
                        <div class='selecao_prod'>
                            <div>
                                <br>
                                <a href='G2_selecao_detalhes_front.php?id=".$linha['id_produto']."'> 
                                <img src='../imagens/".$linha['campo_imagem'].".png'/>
                                </a>
                            </div>

                            <div>
                                <div><p>".$linha['nome']."</p></div>
                                <div><p>R$ ".$preco."</p></div>";

                            if ($linha['estoque']<=0)
                            {
                                echo "
                                <div><span style='color:red'>Produto esgotado</span></div>";
                                echo "<br> <a href='G2_carrinho_front.php?acao=add&id_produto=".$linha['id_produto']."' class='btn_prod' id='esgotado' disabled>COMPRAR</a>";
                            }
                            else
                            {
                                echo "
                                <div><p>".$linha['estoque']." em estoque</p></div>";
                                echo "<br> <a href='G2_carrinho_front.php?acao=add&id_produto=".$linha['id_produto']."' class='btn_prod'>COMPRAR</a>";
                            }
                            
                            //chamada do carrinho
                            // echo "<br> <a href='G2_carrinho_front.php?acao=add&id_produto=".$linha['id_produto']."' class='btn_prod'>COMPRAR</a>";
                     
                            echo "</div><br>";
                    echo "</div>";
                    }

                   // echo "</div>";
                }
                        
                ?>
            </div>
            </div>
             <?php
                session_start();
                if (isset($_SESSION['adm']) && $_SESSION['adm']=='t')
                {
                    ?>
                    <div class="ver_mais" id="cadastro">
                        <a href="../cadastros/Produto/G2_cad_pesq_produtos_front.php" class="login">CADASTRO</a>
                    </div>
               <?php
                }
                ?>
              
             
            <!-- <div class="ver_mais" id="cadastro"> -->
                <!-- <a href="../cadastros/Produto/G2_cad_pesq_produtos_front.php" class="login">CADASTRO</a> -->
            <!-- </div> -->
        </div>
 		<br><br><br><br><br><br>
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
          
        <script src="utils/javas.js"></script>
    </body>
</html>