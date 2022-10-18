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
            <div class="link_novo">     
            <h1>Pesquisa de usarios</h1>
                <a href='G2_cad_novo_usuarios_front.php' class="link_novo">
                        <strong>+</strong> NOVO
                </a>
            </div>

        <?php
            include "G2_cad_pesq_usuarios_back.php";

            if ($qtde == 0) {
                echo "<p>Não foi encontrado nenhum usuario !!!</p><br><br>";
                return;
            }
            

            // Começar tabela e criar o cabeçalho
            echo "
            <div class='table'>
                <div class='row'>
                    <div class='cell cellIDU cellHeader'>
                        ID:
                    </div>
                    <div class='cell cellNomeU cellHeader'>
                        Nome Usuário:
                    </div>
                    <div class='cell cellEmail cellHeader'>
                        E-mail:
                    </div>
                    <div class='cell cellDDD cellHeader'>
                        DDD:
                    </div>
                    <div class='cell cellTele cellHeader'>
                        Telefone:
                    </div>
                    <div class='cell cellCPF cellHeader'>
                    CPF:
                    </div>
                </div>       
            </div>";

                // Criar linhas com os dados dos produtos
                if($resultado_lista)
                foreach ($resultado_lista as $lacuna)
                {
                    echo "
                    <div class='row'>
                        <div class='cell cellIDU'>
                            ".$lacuna['id_usuario']."
                        </div>
                        <div class='cell cellNomeU'>
                            ".$lacuna['nome']."
                        </div>
                        <div class='cell cellEmail'>
                            ".$lacuna['email']."
                        </div>
                        <div class='cell cellDDD'>
                            ".$lacuna['ddd']."
                        </div>
                        <div class='cell cellTele'>
                            ".$lacuna['telefone']."
                        </div>
                                <div class='cell cellCPF'>
                            ".$lacuna['cpf']."
                        </div>
                    
                        <div class='cell cellAcoes'>
                            <a href='G2_cad_altera_usuarios_front.php?id_usuario=".$lacuna['id_usuario']."' class='link_table'> Alterar</a>&nbsp;
                            <a href='G2_cad_exclui_usuarios_front.php?id_usuario=".$lacuna['id_usuario']."' class='link_table'> Excluir</a>&nbsp;
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
                        <a href="../../venda/G2_selecao_produtos_front.php"><ion-icon name="bag-handle-outline"></ion-icon></a>
                        <a href="login_front.php"><ion-icon name="person-add-outline"></ion-icon></a>
                        <a href="#topo" class="vt">Voltar ao topo</a>
                    </div>
                </div>    
            </div>	
        </footer>    
            </div>
          
            </body>
            </html>
			
		