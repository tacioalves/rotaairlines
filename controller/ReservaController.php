<?php
require_once "Model/Reserva.php";
class ReservaController
{

    public function processa($acao)
    {

        if ($acao == "LRE") {
            $reserva = new Reserva();
            $reserva->setIdUsuario($_SESSION['usuario']['idUsuario']);
            $reserva->listaReservas();
            require_once "View/meusvoos.php";

        } else if ($acao == "CV") {
            $reserva = new Reserva();
            $reserva->setIdReserva($_POST['idReserva']);
            $reserva->listaReservaCancelamento();
            require_once "View/cancelamento.php";

        } else if ($acao == "CP") {
            $reserva = new Reserva();
            $reserva->setIdReserva($_POST['idReserva']);
            $reserva->cancelaReserva();
            header("Location:MEUSVOOS");


        }
    }
}



?>