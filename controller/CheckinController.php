<?php
require_once "Model/Checkin.php";
class CheckinController
{
    public function processa($acao)
    {

        if ($acao == "PC") {
            $checkin = new Checkin();
            $checkin->setCodReserva($_POST['cdReserva']);
            $checkin->setCodUsuario($_SESSION['usuario']['idUsuario']);
            $resultado = $checkin->pesquisaCheckin();
            if (!is_null($resultado)) {
                $voo = $resultado[0];
                $usuario = $resultado[1];
                $validaCheckin = $resultado[2];
                require_once "View/checkin.php";

            } else {
                echo '<script type="text/javascript">
                     alert("Reserva Invalida!");
                  </script>';
                require_once "View/index.php";
            }


        } else if ($acao == "MC") {

            require_once "View/checkinMarcaAssento.php";



        }

    }
    public function validaCheckin($Reserva, $Usuario)
    {

    }
}



?>