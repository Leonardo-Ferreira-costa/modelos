<?php

# conjunto de funções q tanto validam, qndo transformam um string
# em um formato mais amigavel ao banco de dados


function validarNome($nome) { //apenas letras e espaços simples entre elas
    preg_match_all('/^[a-zA-ZáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]+(\s+[a-zA-ZáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]+)*$/m', $nome, $matches, PREG_SET_ORDER, 0);
    if ($matches) {
        $nome = preg_replace('(\s+)', ' ', $nome); // preg_replace tem que fazer a passagem de parametro por  referencia da variavel dentro da função
        return true;
    } else {
        return false;
    }
}

function validarEmail($email) {
    preg_match_all('/^[a-zA-ZáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ0-9._%+-]+@{1}([a-zA-ZáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ0-9-]+)(\.{1}[a-zA-ZáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]+)+$/m', $email, $matches, PREG_SET_ORDER, 0);
    if ($matches) {
        return true;
    } else {
        return false;
    }
}

function validarLogin($login) { //aceita 3 ou mais caracteres alfa-numericos
    preg_match_all('/^\w{3,}$/m', $login, $matches, PREG_SET_ORDER, 0);
    if ($matches) {
        return true;
    } else {
        return false;
    }
}

function validarSenha($senha) { //aceita uma senha com no minimo 8 caracteres e no maximo 30
    preg_match_all('/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ0-9@\+\-\.\_\@\&\#\=\*\$]{8,30}$/m', $senha, $matches, PREG_SET_ORDER, 0);
    if ($matches) {
        return true;
    } else {
        return false;
    }
}

?>

