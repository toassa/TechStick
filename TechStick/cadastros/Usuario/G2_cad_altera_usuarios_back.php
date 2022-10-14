<?php
    include "../../utils/conexao_g2.php"; 

    //dados enviados do script 
    $id_usuario=$_POST["id_usuario"];
    $nome_usuario=$_POST["nome_usuario"];
    $email=$_POST["email"];
    $senha=$_POST["senha"];
    $ddd=$_POST["ddd"];
    $telefone=$_POST["telefone"];
    $cpf=$_POST["cpf"];
    


    $sql="UPDATE usuarios
             SET nome  = '$nome_usuario',
                 email = '$email',
                 senha = '$senha',
                 ddd = '$ddd', 
                 telefone ='$telefone',
                 cpf='$cpf'
           WHERE id_usuario = $id_usuario;";
    
    //echo $sql;
    $resultado=pg_query($conecta,$sql);
    $qtde=pg_affected_rows($resultado);

    if ($qtde > 0)
        echo "<script type='text/javascript'>alert('Gravação OK !!!')</script>";
    else	
        echo "<script type='text/javascript'>alert('Erro na Gravação !!!')</script>";

    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=G2_cad_pesq_usuarios_front.php'>";

    // Fechando conexão com o Banco de Dados
    pg_close($conecta);
?>