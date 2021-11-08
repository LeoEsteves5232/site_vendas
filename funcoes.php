<?php
session_start();

if(!$_SESSION['usuario']){
    header('Location: login.php');
    exit();
} elseif ($_SESSION['tipo']=="cnpj"){
    header('Location: meus_jogos_empresa.php');
    exit();}

?>