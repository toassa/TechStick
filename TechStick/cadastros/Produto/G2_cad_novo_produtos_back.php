<?php
    include "../../utils/conexao_g2.php"; 
    
    // Recuperação de dados
	  $nome_produto=$_POST["nome_produto"];
    $descricao=$_POST["descricao"];
    $preco=$_POST["preco"];
    $custo_produto=$_POST["custo_produto"];
    $margem_lucro=$_POST["margem_lucro"];
    $icms_produto=$_POST["icms_produto"];
    $codvisual=$_POST["codvisual"];
    $campo_imagem=$_POST["campo_imagem"];
    $estoque_produto=$_POST["estoque_produto"];
    $excluido_produto='false';
    $tipo_produto = $_POST["tipo_produto"];

    // Inserção
    $sql="INSERT INTO produtos
          (nome, descricao, preco, codigovisual, custo,  margem_lucro, icms, campo_imagem, estoque, excluido_produto, tipo)
          VALUES (
            '$nome_produto',  
            '$descricao',
            $preco,
            '$codvisual',
            $custo_produto,
            $margem_lucro,
            $icms_produto,
            '$campo_imagem',
            $estoque_produto,
            '$excluido_produto',
            '$tipo_produto');";

    // echo $sql;

    $resultado=pg_query($conecta,$sql);
    $linhas=pg_affected_rows($resultado);
  

  if ($linhas > 0)
{

         echo "<script type='text/javascript'>alert(' Produto salvo com sucesso!!!')</script>";
//header("Location: //G2_cad_novo_produtos_front.php");
echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=G2_cad_novo_produtos_front.php'>";


}
    else	
{
       echo "<script type='text/javascript'>alert('Erro na Gravação do produto!')</script>";

    }
   //{
  //   echo '<script language="javascript">';
   //   echo "alert('Produto salvo com sucesso!')";
  // echo '</script>';	

    //   header("Location: //G2_cad_novo_produtos_front.php");

     //   echo "<meta HTTP-EQUIV='refresh' //CONTENT='0;URL=G2_cad_pesq_produtos_front.php'>";
   // }   
    //else
  //  {
      //  echo '<script language="javascript">';
      //  echo "alert('Erro na gravação do produto!')";
      //  echo '</script>';	
  //  }

     //Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>  