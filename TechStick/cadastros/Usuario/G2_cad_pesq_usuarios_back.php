<?php
    // Faz a conexão 
    include "../../utils/conexao_g2.php"; 

    // Cria o script
    $sql="SELECT * FROM usuarios WHERE excluido_usuario='n' ORDER BY id_usuario;";

    // Executa o script  no banco 
    $resultado= pg_query($conecta, $sql);

    // Obter qtde linhas (SELECT)
    $qtde=pg_num_rows($resultado);

    $resultado_lista = null;

    if ($qtde > 0)
    {
        // coloca os dados em uma variável
        $resultado_lista=pg_fetch_all($resultado);
    }
 
    pg_close($conecta);
?>