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
			//session_start();
			$idusuario = 1; // Depois precisamos alterar para pegar da $_SESSION
			include "G2_confirmacao_compra_back.php";
		?>

		<hr>
		<h2>Resumo da compra</h2>
		<hr>

		<div class='table_prod'>
			<div class='row_prod'>
				<div class='cell_prod cellDescricao_prod cellHeader_prod'>
					Nome
				</div>
				<div class='cell_prod cellPreco_prod cellHeader_prod'>
					Preço
				</div>
				<div class='cell_prod cellPreco_prod cellHeader_prod'>
					Qtde.
				</div>
				<div class='cell_prod cellPreco_prod cellHeader_prod'>
					Subtotal
				</div>
			</div>

			<?php
				$total = 0.0;

				// Criar linhas com os dados dos produtos

				foreach ((array)$resultado_lista as $linha)
				{ 
					$idprod = $linha['id_produto'];
					$total += floatval($linha['subtotal']);
			?>
					<div class='row_prod'>
						<div class='cell_prod cellDescricao_prod'>
							<?php echo $linha['nome']; ?>
						</div>
						<div class='cell_prod cellPreco_prod'>
							<?php echo $linha['preco']; ?>
						</div>
						<div class='cell_prod cellPreco_prod'>
							<?php echo $linha['quantidade']; ?>
						</div>
						<div class='cell_prod cellPreco_prod'>
							<?php echo $linha['subtotal']; ?>
						</div>
					</div>
			<?php 
				}  
				echo "<h3>Total: R$ ".number_format($total, 2, ',', '.');".</h3>";
			?>

			<br><br>
			<hr>

			<h3>Deseja confirmar?</h3>
			<a href="G2_finalizacao_compra_front.php" class="comp">Finalizar</a>
			<a href="G2_carrinho_front.php" class="comp">Cancelar</a>&nbsp;&nbsp;
		</div>
		</div>
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
                    <a href="../index.html" ><ion-icon name="home-outline"></ion-icon></a>
                    <a href="G2_selecao_produtos_front.php" ><ion-icon name="bag-handle-outline"></ion-icon></a>
                    <a href="../cadastros/Usuario/login_front.php"><ion-icon name="person-add-outline"></ion-icon></a>
                    <a href="#topo" class="vt">Voltar ao topo</a>
                    </div>	
			</div>
        </footer>
	</body>
</html>