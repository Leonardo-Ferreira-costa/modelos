<?php
    include_once 'validarUsuario.php';
    // include_once 'validarFormulario.php';
    $senha = $_POST['senha'];
    $login = $_POST['login'];


    if($_SESSION['user'] = efetuarLogin($login, $senha)){
        header("Location: area-restrita.php");
    }
    else{
        $_SESSION['login_error'] = true;
        header("Location: index.php");
    }

    // if(!(validarEmail($login) && validarSenha($senha))){
    //     $_SESSION['login_error'] = true;
    //     header("Location: login.php");
    // }
    // else{
    //     if($_SESSION['user'] = efetuarLogin($login, $senha)){
    //             header("Location: area-restrita.php");
    //     }
    //     else{
    //         $_SESSION['login_error'] = true;
    //         header("Location: login.php");
    //     }
    // }
?>