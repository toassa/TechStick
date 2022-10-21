
<?php
    include "../utils/conexao_g2.php"; 
    

            
     $idusuario = $_SESSION['usulogado']['id_usuario'];
   




    // Verifica se o produto já está no carrinho
    function getQtdeProdutoCarrinho($conecta, $idusuario, $idproduto) {

        /* seleciona o carrinho */
        $sql="SELECT quantidade
                FROM carrinho
               WHERE id_usuario = $idusuario
                 AND id_produto = $idproduto";

        $resultado=pg_query($conecta,$sql);
        $qtde=pg_num_rows($resultado);

        if ( $qtde == 0 )
            return 0;
        
        // retornará a quantidade atual do item já existente no carrinho
        $produto_carrinho = pg_fetch_array($resultado);
        return intval($produto_carrinho['quantidade']);
    }

    function addCarrinho($conecta, $idusuario, $idproduto) {

        $qtdeProduto = getQtdeProdutoCarrinho($conecta, $idusuario, $idproduto);

        // Se o produto ainda não existe no carrinho
        if ($qtdeProduto == 0) {
            // Insere o produto
            $sql="INSERT INTO carrinho 
                (id_produto, id_usuario, quantidade)   VALUES 
                ($idproduto, $idusuario, 1);";
        }
        else {
            $sql="UPDATE carrinho
                     set quantidade = ".($qtdeProduto + 1).
                  "where id_produto = $idproduto
                     and id_usuario = $idusuario";
        }

        // Execução
        pg_query($conecta,$sql);
    }

    function removeCarrinho($conecta, $idusuario, $idproduto) {
        $sql="DELETE FROM carrinho
               where id_produto = $idproduto
                 and id_usuario = $idusuario";

        // Execução
        pg_query($conecta,$sql);
    }

    function updateCarrinho($conecta, $idusuario, $prods) {

        //var_dump($prods);

        foreach($prods as $idproduto => $qtd){
            //echo "<script type='text/javascript'>alert('entra');</script>";

            // select PEGANDO A QUANTIDADE LÁ NA TABELA DE PRODUTOS
            $sql = "SELECT estoque from produtos where id_produto = $idproduto";
            $res = pg_query($conecta,$sql);
            $linha = pg_fetch_array($res);
            $estoque = $linha['estoque'];
            //lalal nao lembro

            // $qtd = ['estoque'];
            
            if($qtd <= 0){
                $qtd = 1;
            }else if($qtd > $estoque){
                echo "<script type='text/javascript'>alert('Não há $qtd ptodutos em estoque')</script>";
                $qtd = $estoque;
            }

            $sql="UPDATE carrinho
                set quantidade = $qtd
            where id_produto = $idproduto
                and id_usuario = $idusuario";

            // echo "<script type='text/javascript'>alert('$sql')</script>";
            // echo $sql;

            pg_query($conecta,$sql);
            }
        }
    

    // Início do processamento

    if (!empty($acao))
    {
        if ($acao == 'add') {
            addCarrinho($conecta, $idusuario, $idproduto);
        }
        else if($acao == 'del'){
            removeCarrinho($conecta, $idusuario, $idproduto);
        }
        else if($acao == 'up'){
            updateCarrinho($conecta, $idusuario, $prods);
        }



        // Modifica a url para remover qualquer uma das ações: add, del ou up, evita que a ação seja
        // processada novamente caso a página seja recarregada
        header("location:G2_carrinho_front.php");
        return;
    }

    /* seleciona todos os itens do carrinho do usuário */
    //pela chave estrangeira, conecta as duas tabelas 
    $sql="SELECT c.*,
                 p.preco,
                 c.quantidade * p.preco as subtotal,
                 p.nome,
                 p.campo_imagem,
                 p.estoque as estoque
            FROM carrinho c
           inner join produtos p
              on c.id_produto = p.id_produto
           WHERE c.id_usuario = $idusuario
           ORDER BY p.nome;";

    //echo $idusuario;
    $resultado= pg_query($conecta, $sql);
    $qtde=pg_num_rows($resultado);

    $estoque = ['p.estoque'];

    $resultado_lista = null;

    if ($qtde > 0)
    {
        $resultado_lista=pg_fetch_all($resultado);
    }

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>