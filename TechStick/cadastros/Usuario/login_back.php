<?php
    session_start();
    // script foi chamado de index.php
    include "../../utils/conexao_g2.php"; 

    $email_login = $_POST["nome_usuario"];
    $senhacripto = MD5($_POST["senha"]);


    
    //$senha = md5($senha); //ou se a senha estiver oculta
    $sql = "SELECT * from usuarios where email= '$email_login' and senha = '$senhacripto'; ";

    $resultado = pg_query($conecta, $sql);
    if (pg_num_rows($resultado) > 0)
    {
        $linhas = pg_fetch_array($resultado);

        $_SESSION["usulogado"] = $linhas;
        $_SESSION["adm"] = $linhas['adm_usu'];
       // echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../../index.html'>";
           // echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../../venda/G2_selecao_produtos_front.php'>";
     echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=pos_log.php'>";
    }
    else
    {
        echo '<script language="javascript">';
        echo "alert('E-mail do Usuário ou Senha Inválidos!')";
        echo '</script>';	

        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=login_front.php'>";
    }
    






?>