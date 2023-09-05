<?php
//no banco de dados existe 2 informações 
$login = "admin";
$senha = 123456;

$loginDigitado = "admin";
$senhaDigitada = 123456;

if ($loginDigitado == $login and $senhaDigitada == $senha) {
    echo "Logado com Sucesso";
} else {
    echo "Mete o pé!!!";
}
