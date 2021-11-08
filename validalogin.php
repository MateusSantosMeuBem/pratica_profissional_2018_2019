<?php
    include_once("conexao.php");

    //nomeadm
    //sen

    
    if((isset($_POST['nomeadm'])) && (isset($_POST['sen'])) && (!empty($_POST['nomeadm'])) && (!empty($_POST['sen']))){
        //echo "funcionou o if 1";
        $usuario = mysqli_real_escape_string($conn, $_POST['nomeadm']);
        $senha = mysqli_real_escape_string($conn, $_POST['sen']);
        $senha = md5($senha);
        
        $sql = "SELECT * FROM adms WHERE matadm = '$usuario' && senadm = '$senha' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $resultado = mysqli_fetch_assoc($result);
        
        if(empty($resultado)){
            header("Location: inicio.php");
        }elseif(!empty($resultado)){
            header("Location: FormCad.php");
        }else{
            header("Location: inicio.php");
        }
    }else{
        header("Location: inicio.php");
        //echo "funcionou o if 22";
    }
?>