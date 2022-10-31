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
       <!-- <a href="G2_cad_pesq_produtos_front.php"><ion-icon name="pencil-outline"></ion-icon><span>Cadastro</span></a> -->
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
            <div class="link_novo" id="novo_prod">
                <h1>Pesquisa de produtos</h1>
                <div class="voltar_btn" id="volta_neg">
                        <ion-icon name="return-down-back-outline" type="button" onclick="history.back()"></ion-icon>
                        <!-- <input type="button" value="Voltar" onclick="history.back()"> -->
                    </div>
                <a href='G2_cad_novo_produtos_front.php' class="link_novo">
                    <strong>+</strong> NOVO
                </a>
               
                <!-- <?php
                // session_start();
                // if (isset($_SESSION["adm"]) && $_SESSION["adm"])
                // {
                    ?>
                    <a href='G2_cad_novo_produtos_front.php' class="link_novo">
                        <strong>+</strong> NOVO
                     </a>
                <?php
                // }
            ?> -->
            </div>
            <?php
                include "G2_cad_pesq_produtos_back.php";

                if ($qtde == 0) {
                    echo  "&nbsp;&nbsp;<p>Não foi encontrado nenhum produto !!! </p><br><br>";
                    return;
                }
                

                // Começar tabela e criar o cabeçalho
                echo "
                <div class='table_prod'>
                    <div class='row_prod'>
                        <div class='cell_prod cellID_prod cellHeader_prod'>
                            ID:
                        </div>
                        <div class='cell_prod cellNome_prod cellHeader_prod'>
                            Nome Produto:
                        </div>
                        <div class='cell_prod cellDescricao_prod cellHeader_prod'>
                            Descrição:
                        </div>
                        <div class='cell_prod cellPreco_prod cellHeader_prod'>
                            Preço:
                        </div>
                    
                        <div class='cell_prod cellEstq_prod cellHeader_prod'>
                            Estoque:
                        </div>
                    </div>
                </div>";

                    // <div class='cell_prod cellCV_prod cellHeader_prod'>
                    //         Cód.Visual:
                    //     </div>
                    //     <div class='cell_prod cellCusto_prod cellHeader_prod'>
                    //         Custo  do Produto:
                    //     </div>
                    //     <div class='cell_prod cellMLucro_prod cellHeader_prod'>
                    //         Margem de Lucro:
                    //     </div>
                    //     <div class='cell_prod cellIcms_prod cellHeader_prod'>
                    //         Icms:
                    //     </div>

                    // Criar linhas com os dados dos produtos
                    if($resultado_lista)
                    foreach ($resultado_lista as $lacuna)
                    {
                        echo "
                        <div class='row_prod1'>
                            <div class='cell_prod cellID_prod'>
                                ".$lacuna['id_produto']."
                            </div>
                            <div class='cell_prod cellNome_prod'>
                                ".$lacuna['nome']."
                            </div>
                            <div class='cell_prod cellDescricao_prod'>
                                ".$lacuna['descricao']."
                            </div>
                            <div class='cell_prod cellPreco_prod'>
                                ".$lacuna['preco']."
                            </div>
                        
                            <div class= 'cell_prod cellEstq_prod'>
                                ".$lacuna['estoque']."
                            </div>
                        
                            <div class='cell_prod cellAcoes_prod'>
                                <a href='G2_cad_altera_produtos_front.php?id_produto=".$lacuna['id_produto']."' class='link_table'> Alterar</a>&nbsp;
                                <a href='G2_cad_exclui_produtos_front.php?id_produto=".$lacuna['id_produto']."' class='link_table'> Excluir</a>&nbsp;
                            </div>
                        </div> "; 
                    } 
                // Fechando a tag da tabela
                echo "</div>";
            ?>
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
