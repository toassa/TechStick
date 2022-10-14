<?php
    include "../utils/conexao_g2.php"; 

    $sql="SELECT * FROM produtos WHERE excluido_produto='false' ORDER BY nome;";
    
    $resultado= pg_query($conecta, $sql);
    $qtde=pg_num_rows($resultado);
    $final = $_GET['tipo_produto'];
    $resultado_lista = null;

    if ($qtde > 0)
    {
        $resultado_lista=pg_fetch_all($resultado);
    }
 
    pg_close($conecta);
?>