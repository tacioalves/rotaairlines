<?php
session_start(); 
$url = strtoupper($_GET['url']);

if ($url=='HOME'|| $url=='INDEX'){
    require_once "Controller/VooController.php";
    $controle = new VooController();
    $controle->processa("I"); 
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

else if ($url=="FINALIZACHECKIN"){
    require_once "Controller/CheckinController.php";
    $controle = new CheckinController();
    $controle->processa("FC"); 

} 


else if ($url=="DASHBOARD"){
    require_once "Controller/UsuarioController.php";
    $controle = new UsuarioController();
    $controle->processa("LC"); 


} 

else if ($url=="ALTERADADOS"){
    require_once "Controller/UsuarioController.php";
    $controle = new UsuarioController();
    $controle->processa("AC"); 


} 


else if ($url=="MINHASRECLAMACOES"){
    require_once "Controller/ReclamacaoController.php";
    $controle = new ReclamacaoController();
    $controle->processa("LP");
} 


else if ($url=="INSERERECLAMACAO"){
    require_once "Controller/ReclamacaoController.php";
    $controle = new ReclamacaoController();
    $controle->processa("IR");
} 


else if ($url=="DETALHARECLAMACAO"){
    require_once "Controller/ReclamacaoController.php";
    $controle = new ReclamacaoController();
    $controle->processa("DR");
} 


else if ($url=="DELETARECLAMACAO"){
    require_once "Controller/ReclamacaoController.php";
    $controle = new ReclamacaoController();
    $controle->processa("DLR");
}



else if ($url=="MEUSVOOS"){
    require_once "Controller/ReservaController.php";
    $controle = new ReservaController();
    $controle->processa("LRE");

}

else if ($url=="CANCELAMENTO"){
    require_once "Controller/ReservaController.php";
    $controle = new ReservaController();
    $controle->processa("CV");

}


else if ($url=="PASSAGEMCANCELADA"){
    require_once "Controller/ReservaController.php";
    $controle = new ReservaController();
    $controle->processa("CP");

}

    

?>