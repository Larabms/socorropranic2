<?php
    require "loginmodel.php";
    $e = $_POST["email"];
    $s = $_POST["senha"];
        
    session_start();
    if ($usuario = fazerlogin($e, $s)) {
        //session_unset();
        //session_destroy();
        //session_start();
        $_SESSION["nome"] = $usuario["nome"];
        $_SESSION["email"] = $usuario["email"]; 
        $_SESSION["id_usuario"] = $usuario["id"]; 
        $_SESSION["admin"]= administrador($e);
        if ($_SESSION["admin"]==true){
            header("Location: ../paginaadm/adm.php");
        } else if ($_SESSION["admin"]==false){
            header("Location: ../paginacliente/paginacliente.php");
        }

        exit();
    }
    
    else {
        $erro = "Login ou senha incorretos";        
        $_SESSION["erro"] = $erro;
        header("Location: loginview.php");
        exit();
    }    