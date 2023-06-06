<?php
class Reserva
{
    private $vooReserva;
    private $idReserva;
    private $idUsuario;



    public function listaReservas(){
        
    }



    public function getVooReserva()
    {
        return $this->vooReserva;
    }

    public function setVooReserva($vooReserva)
    {
        $this->vooReserva = $vooReserva;
    }

    public function getIdReserva()
    {
        return $this->idReserva;
    }

    public function setIdReserva($idReserva)
    {
        $this->idReserva = $idReserva;
    }

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }
}



?>
