<?php
    include "../utils/conexao_g2.php"; 

    /* a variável $id_produto deve já ter sido atribuída na página pai, antes do include
       para esse arquivo */
    $sql="SELECT * FROM produtos WHERE id_produto = $id_produto;";

    // echo $sql;

    $resultado=pg_query($conecta,$sql);
    $qtde=pg_num_rows($resultado);

    // echo "Qtde=".$qtde;

    if ( $qtde == 0 )
    {
        echo '<script language="javascript">';
        echo "alert('Produto não encontrado!')";
        echo '</script>';	
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=G2_cad_pesq_produtos_front.php'>";
        exit;
    }

    $lacuna = pg_fetch_array($resultado);

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>