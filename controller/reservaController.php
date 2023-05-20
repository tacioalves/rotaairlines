<?php
require_once "../model/Usuario.php";
require_once "../model/Reserva.php";
require_once "../model/Voo.php";
class ReservaController
{

    public $usuario = new Usuario();
    public $reserva = new Reserva();
    public $voo = new Voo();
    public function listaReserva($usuario)
    {

    }

    public function cancelaReserva($Reserva, $usuario)
    {

    }

    public function compraReserva($usuario, $voo)
    {

    }
}


?>