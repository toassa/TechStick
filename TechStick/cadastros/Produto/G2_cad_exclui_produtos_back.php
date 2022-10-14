<?php
    include "../../utils/conexao_g2.php"; 

    //dados enviados do script 
    $id_produto = $_POST['id_produto'];
    
    // Padrão para data no servidor do kinghost está americano (se atentar!!)
    $data=date('m/d/Y'); //'Y' (maiúsculo) para ano com 4 dígitos
    //$data=date('d/m/Y');

    //inserida a data de exclusao do produto para histórico
    $sql="update produtos
            set excluido_produto = 'true', data_exclusao_produto = '$data' 
        WHERE id_produto = $id_produto";

    $resultado=pg_query($conecta,$sql);
    $qtde=pg_affected_rows($resultado);

    if ($qtde > 0 )
        echo "<script type='text/javascript'>alert('Exclusão OK !!!')</script>";
    else
        echo "<script type='text/javascript'>alert('Erro na exclusão !!!')</script>";

    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=G2_cad_pesq_produtos_front.php'>";
?>
