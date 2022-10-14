<?php
    include "../../utils/conexao_g2.php"; 
    
    // Recuperação de dados
      $id_usuario=$_POST["id_usuario"];
      $nome_usuario=$_POST["nome_usuario"];
      $email=$_POST["email"];
      $senha=$_POST["senha"];
      $ddd=$_POST["ddd"];
      $telefone=$_POST["telefone"];
      $cpf=$_POST["cpf"];
      $excluido_usuario='false';
      $adm_usu='false';

    // Inserção
    $sql="INSERT INTO usuarios
          (nome, email, senha, ddd, telefone, cpf, excluido_usuario,adm_usu)
          VALUES (
            '$nome_usuario', 
            '$email',
            '$senha',
            '$ddd',
            '$telefone',
            '$cpf',
            '$excluido_usuario',
            '$adm_usu');";

    // Execução
    $resultado=pg_query($conecta,$sql);
    $linhas=pg_affected_rows($resultado);


if ($linhas > 0)
{
  echo "<script type='text/javascript'>alert(' Usuario salvo com sucesso!!!')</script>";
  // header("Location: G2_cad_novo_usuarios_front.php");

  echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=G2_cad_novo_usuarios_front.php'>";


}
    else	
    {
      echo "<script type='text/javascript'>alert('Erro na Gravação do 
       usuario!')</script>";
    }
       
 
   if ($linhas > 0)
   {
     echo '<script language="javascript">';
     echo "alert('Usuario salvo com sucesso!')";
     echo '</script>';	

     header("Location: G2_cad_novo_usuarios_front.php");
   }   
   else
   {
     echo '<script language="javascript">';
     echo "alert('Erro na gravação do usuario!')";
     echo '</script>';	
   }

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>  