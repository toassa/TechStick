<?php
    include "../../utils/conexao_g2.php"; 

    //dados enviados do script 
    $id_produto=$_POST["id_produto"];
    $nome_produto=$_POST["nome_produto"];
    $descricao=$_POST["descricao"];
    $preco=$_POST["preco"];
    $codvisual=$_POST["codvisual"];
    $custo_produto=$_POST["custo_produto"];
    $margem_lucro=$_POST["margem_lucro"];
    $icms_produto=$_POST["icms_produto"];
    $estoque_produto=$_POST["estoque_produto"];
    $campo_imagem=$_POST["campo_imagem"];

    $sql="UPDATE produtos
             SET nome  = '$nome_produto',
                 descricao = '$descricao',
                 estoque = $estoque_produto,
                 preco = '$preco', 
                 codigovisual ='$codvisual',
                 custo='$custo_produto',
                 margem_lucro='$margem_lucro',
                 icms = '$icms_produto',
                 campo_imagem ='$campo_imagem'
           WHERE id_produto = $id_produto;";
    
    $resultado=pg_query($conecta,$sql);
    $linhas=pg_affected_rows($resultado);

    if ($linhas > 0)
        echo "<script type='text/javascript'>alert('Gravação OK !!!')</script>";
    else	
        echo "<script type='text/javascript'>alert('Erro na Gravação !!!')</script>";

    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=G2_cad_pesq_produtos_front.php'>";

    // Fechando conexão com o Banco de Dados
    pg_close($conecta);
?>