<?php
session_start(); 
$url = strtoupper($_GET['url']);

if ($url=='HOME'|| $url=='INDEX'){
    require_once "view/index.php";
 }

else if ($url=="CADASTRA"){
    require_once "Controller/UsuarioController.php";
    $controle = new UsuarioController();
    $controle->processa("C"); 
 } 

 else if ($url=="FAZLOGIN"){
    require_once "Controller/UsuarioController.php";
    $controle = new UsuarioController();
    $controle->processa("L"); 
 } 

 else if ($url=="DESLOGAR"){
    require_once "Controller/UsuarioController.php";
    $controle = new UsuarioController();
    $controle->processa("D"); 
 } 


else if ($url=="CADASTROUSUARIO"){
    require_once "view/cadastro.php";

    } 

else if ($url=="LOGIN"){
        require_once "view/login.php";
    
 } 

 else if ($url=="PESQUISAVOO"){
    require_once "Controller/VooController.php";
    $controle = new VooController();
    $controle->processa("P"); 

} 


else if ($url=="COMPRA"){
    require_once "view/purchase.php";
    $controle = new VooController();
    $controle->processa("C"); 

} 
    

?>