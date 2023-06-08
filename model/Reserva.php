<?php
require_once "Model/Conexao.php";
require_once "Model/Voo.php";
class Reserva
{
    private $vooReserva;
    private $idReserva;
    private $idUsuario;
    private $codReservaVoo;
    private $statusReserva;
    private $listaReservaUsuario = array();
    private $listaVooUsuario = array();


    public function listaReservas()
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("SELECT idReserva,codReservaVoo, tv.numvoo, tv.origemVOO, tv.destinoVOO, statusReserva  
            FROM rotaairlines.tabelareserva tr, rotaairlines.tabelavoos tv WHERE tr.idvoo = tv.idvoo AND tr.idusuario = :idusuario AND statusReserva like '%ATIVA%'");
            $sql->bindParam("idusuario", $idUsuario);
            $idUsuario = $this->idUsuario;
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {

                $reserva = new Reserva();
                $reserva->setIdReserva($linha['idReserva']);
                $reserva->setCodReservaVoo($linha['codReservaVoo']);
                $reserva->setStatusReserva($linha['statusReserva']);


                $voo = new Voo();
                $voo->setNumVoo($linha['numvoo']);
                $voo->setOrigemVoo($linha['origemVOO']);
                $voo->setDestinoVoo($linha['destinoVOO']);
                $voo->setCodigoReserva($linha['codReservaVoo']);


                array_push($this->listaReservaUsuario, $reserva);
                array_push($this->listaVooUsuario, $voo);

            }


        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }


    public function listaReservaCancelamento()
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("SELECT idReserva,codReservaVoo, tv.numvoo, tv.origemVOO, tv.destinoVOO, statusReserva, tv.valorVoo
            FROM rotaairlines.tabelareserva tr, rotaairlines.tabelavoos tv WHERE tr.idvoo = tv.idvoo AND idReserva = :idReserva");
            $sql->bindParam("idReserva", $idReserva);
            $idReserva = $this->idReserva;
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            $linha = $sql->fetch(PDO::FETCH_ASSOC);

            if ($linha) {
                $reserva = new Reserva();
                $reserva->setIdReserva($linha['idReserva']);
                $reserva->setCodReservaVoo($linha['codReservaVoo']);
                $reserva->setStatusReserva($linha['statusReserva']);

                $voo = new Voo();
                $voo->setNumVoo($linha['numvoo']);
                $voo->setOrigemVoo($linha['origemVOO']);
                $voo->setDestinoVoo($linha['destinoVOO']);
                $voo->setCodigoReserva($linha['codReservaVoo']);
                $voo->setValorVoo($linha['valorVoo']);

                array_push($this->listaReservaUsuario, $reserva);
                array_push($this->listaVooUsuario, $voo);
            }


        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function cancelaReserva()
    {

        try {
            $conn = Conexao::conectar();

            $sql = $conn->prepare("UPDATE  rotaairlines.tabelareserva SET statusReserva = 'Cancelada'  WHERE idReserva = :idReserva");
            $sql->bindParam("idReserva", $idReserva);
            $idReserva = $this->idReserva;

            $sql->execute();


        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
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

    /**
     * @return mixed
     */
    public function getCodReservaVoo()
    {
        return $this->codReservaVoo;
    }

    /**
     * @param mixed $codReservaVoo 
     * @return self
     */
    public function setCodReservaVoo($codReservaVoo): self
    {
        $this->codReservaVoo = $codReservaVoo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getListaReservaUsuario()
    {
        return $this->listaReservaUsuario;
    }

    /**
     * @param mixed $listaReservaUsuario 
     * @return self
     */
    public function setListaReservaUsuario($listaReservaUsuario): self
    {
        $this->listaReservaUsuario = $listaReservaUsuario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getListaVooUsuario()
    {
        return $this->listaVooUsuario;
    }

    /**
     * @param mixed $listaVooUsuario 
     * @return self
     */
    public function setListaVooUsuario($listaVooUsuario): self
    {
        $this->listaVooUsuario = $listaVooUsuario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatusReserva()
    {
        return $this->statusReserva;
    }

    /**
     * @param mixed $statusReserva 
     * @return self
     */
    public function setStatusReserva($statusReserva): self
    {
        $this->statusReserva = $statusReserva;
        return $this;
    }
}



?>