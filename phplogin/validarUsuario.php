<?php

if(!isset($_SESSION)){
    session_start();
}
require_once 'conexao.php';

function efetuarLogin($login, $senha){ 
    $link = abreConexao();

    $query = "select * from usuario where email = '$login' and senha = '$senha'";
    $result = mysqli_query($link, $query);

    $result = mysqli_fetch_assoc($result);
    
    return $result;
}

?>
