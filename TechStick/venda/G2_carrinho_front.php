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
			<h1>CARRINHO</h1>
			<div class="icone_carrinho">
			<a href="G2_selecao_produtos_front.php"><ion-icon name="arrow-up-circle-outline"></ion-icon></a>&nbsp;&nbsp;
			</div>
			<?php
			/*
			Extraído de:
			http://www.davidchc.com.br/video-aula/php/carrinho-de-compras-com-php/
			vídeo aula de:https://www.youtube.com/watch?v=CBzfcl-Qk1c

			Adaptado por Profa. Ariane Scarelli para banco de dados PostgreSQL (ago/2016)
			Adaptado por Prof. Victor rodrigues (ago/2022)
			*/
				//session_start();
				$acao = $_GET['acao'] ?? '';
				$idproduto = $_GET['id_produto'] ?? 0;
				$idusuario = 1; // Depois precisamos alterar para pegar da $_SESSION

				if ($acao=='up') {
					if (is_array($_POST['prods']))
						$prods = $_POST['prods'];
					else
						$prods = array();
				}

				include "G2_carrinho_back.php";
			?>

			<!-- <div class='table_carrinho'>
				<div class='row_carrinho'>
					<div class='cell_carrinho cellNome_carrinho cellHeader_carrinho'>
						Nome
					</div>
					<div class='cell_carrinho cellPreco_carrinho cellHeader_carrinho'>
						Preço
					</div>
					<div class='cell_carrinho cellPreco_carrinho cellHeader_carrinho'>
						Qtde.
					</div>
					<div class='cell_carrinho cellPreco_carrinho cellHeader_carrinho'>
						Subtotal
					</div>
					<div class='cell_carrinho cellAcoes_carrinho'>
						&nbsp;
					</div>
				</div> -->

				<form name="myForm" id="myForm" target="_myFrame" action="?acao=up" method="post" >
					<div class="envio_carras">
						<input type="submit" value="Atualizar"/>
					</div>
					<?php
						$total = 0.0;

					if($resultado_lista)	
						// Criar linhas com os dados dos produtos
						foreach ($resultado_lista as $linhas)
						{ 
							$idprod = $linhas['id_produto'];
							$total += floatval($linhas['subtotal']);
					?>
						<div class="carrinho_front">
							<?php echo"<img src='../imagens/".$linhas['campo_imagem'].".png'/>"?>
							<!-- <img src="../imagens/boton_marvel.png"> -->
							<div class="carrinho_txt">
								<h3><?php echo $linhas['nome']; ?></h3>
								<p>R$ <?php echo $linhas['preco']; ?></p>
								<input type="text" size="3" maxlength="2" name="prods[<?php echo $idprod; ?>]"
									value="<?php echo $linhas['quantidade']; ?>" />
								<div class="link_carrinho">
									<a href='?acao=del&id_produto=<?php echo $idprod;?>' class="btn_carrinho">EXCLUIR</a>
								</div>
							</div>
						</div>
						<!-- <div class='row_carrinho'>	
							<div class='cell_carrinho cellNome_carrinho'>
								<?php echo $linhas['nome']; ?>
							</div>
							<div class='cell_carrinho cellPreco_carrinho'>
								<?php echo $linhas['preco']; ?>
							</div>
							<div class='cell_carrinho cellPreco_carrinho'>
								<input type="text" size="3" name="prods[<?php echo $idprod; ?>]"
									value="<?php echo $linhas['quantidade']; ?>" />
							</div>
							<div class='cell_carrinho cellPreco_carrinho'>
								<?php echo $linhas['subtotal']; ?>
							</div>
							<div class='cell_carrinho cellAcoes_carrinho'>
								<a href='?acao=del&id_produto=<?php echo $idprod;?>'>Excluir</a>
							</div>
						</div> -->
						<?php  
							}
							echo "<div class='total_compra'>Total da compra: R$ ".number_format($total, 2, ',', '.');".</div>";
						?>
						</div>
						<a href="G2_confirmacao_compra_front.php" class="link_carras">FINALIZAR COMPRA</a>
						
				</form>
				<!-- <script type="text/javascript">
					window.onload=function(){
						var auto = setTimeout(function(){ autoRefresh(); }, 100);

						function submitform(){
						alert('test');
						document.forms["myForm"].submit();
						}

						function autoRefresh(){
						clearTimeout(auto);
						auto = setTimeout(function(){ submitform(); autoRefresh(); }, 10000);
						}
					}
					</script> -->
			</div>	
		</div>

		<!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
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