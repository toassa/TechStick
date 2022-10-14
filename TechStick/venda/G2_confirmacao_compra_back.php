<?php
    include "../utils/conexao_g2.php"; 

    /* seleciona todos os itens do carrinho do usuário */
    /*$sql="SELECT c.*,
                 p.preco,
                 c.qtde * p.preco as subtotal,
                 p.descricao,
                 p.qtde as estoque
            FROM carrinho c
           inner join produtos p
              on c.id_produto = p.id_produto
           WHERE c.id_usuario = $idusuario
           ORDER BY p.descricao;";*/
    $idusuario=1;
    $sql="SELECT c.*,
        p.preco,
        c.quantidade * p.preco as subtotal,
        p.nome,
        p.estoque as estoque
        FROM carrinho c
        inner join produtos p
        on c.id_produto = p.id_produto
        WHERE c.id_usuario = $idusuario
        ORDER BY p.nome;"; 
        
    $resultado= pg_query($conecta, $sql);
    $qtde=pg_num_rows($resultado);

    $resultado_lista = null;

    if ($qtde > 0)
    {
        $resultado_lista=pg_fetch_all($resultado);
    }

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);

    session_start();
    $_SESSION['produtos'] = $resultado_lista;
?>