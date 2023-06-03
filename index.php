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

else if ($url=="RESUMOCOMPRA"){
    require_once "Controller/VooController.php";
    $controle = new VooController();
    $controle->processa("RC"); 

} 

else if ($url=="FINALIZACOMPRA"){
    require_once "Controller/VooController.php";
    $controle = new VooController();
    $controle->processa("FC"); 

} 

else if ($url=="VALIDACHECKIN"){
    require_once "Controller/CheckinController.php";
    $controle = new CheckinController();
    $controle->processa("PC"); 

} 

else if ($url=="CHECKINMARCAASSENTO"){
    require_once "Controller/CheckinController.php";
    $controle = new CheckinController();
    $controle->processa("MC"); 

} 



    

?>