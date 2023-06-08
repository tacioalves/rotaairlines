<?php
require_once "Model/Voo.php";     
     
     
class VooController {
    public function processa($acao)
    {

    if ($acao=="P"){
        $voo = new Voo();
        $voo ->setOrigemVoo($_POST['OrigemVoo']);
        $voo ->setDestinoVoo($_POST['DestinoVoo']);
        $dataIda = ($_POST['dataIda']);
        $dataVolta = ($_POST['dataVolta']);
        $voo->buscaVoo($dataIda,$dataVolta);
        require_once "View/voos-disponiveis.php";

    }

    else if ($acao=="C"){
        $idVooIda = ($_POST['idVooIda']);
        $idVooVolta = ($_POST['idVooVolta']);
        $voo = new Voo();
        $voo->listaDadosVooCompra($idVooIda, $idVooVolta);
        require_once "View/purchase.php";

    }
   
    else if ($acao=="RC"){
        if($_SESSION['usuario']['idUsuario']){
        $idVooIda = ($_POST['vooIdaSelecionado']);
        $voo = new Voo();

        if($_POST['vooVoltaSelecionado']){
            $idVooVolta = ($_POST['vooVoltaSelecionado']);
        }
        else{
            $idVooVolta = 0;
        }
        $voo->listaDadosVooCompra($idVooIda, $idVooVolta);
        require_once "View/purchase.php";
    }  else{
        header("Location:LOGIN");
    }

    }

    else if ($acao=="FC"){
        $usuario = ($_POST['idUsuario']);
        $voo = new Voo();
        $voo->setIdVoo($_POST['idVooIda']);
        $voo->setCodigoReserva($_POST['codReservaIda']);
        $voo->finalizaCompra($usuario);

        if(($_POST['idVooVolta'])){
            $voo = new Voo();
            $voo->setIdVoo($_POST['idVooVolta']);
            $voo->setCodigoReserva($_POST['codReservaVolta']);
            $voo->finalizaCompra($usuario);
            
        }
        header("Location:HOME");

    }
}


}

     ?>