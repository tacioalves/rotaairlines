<?php
require_once "Model/Voo.php";     
     
     
class VooController {
    public function processa($acao)
    {

    if ($acao=="P"){
        $voo = new Voo();
        $voo ->setOrigemVoo($_POST['OrigemVoo']);
        $voo ->setDestinoVoo($_POST['DestinoVoo']);
        $voo->buscaVoo();
        require_once "View/voos-disponiveis.php";

    }

    else if ($acao=="C"){
        $idVooIda = ($_POST['idVooIda']);
        $idVooVolta = ($_POST['idVooVolta']);
        $voo = new Voo();
        $voo->listaDadosVooCompra($idVooIda, $idVooVolta);
        require_once "View/purchase.php";

    }
   
}


}

     ?>