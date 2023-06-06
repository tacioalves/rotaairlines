<?php
require_once "Model/Reserva.php";

class Reclamacao{

    private $codReserva;
    private $idReclamacao;
    private $descricaoReclamacao;
    private $usuarioReclamacao;
    private $listaReservas = array();
 

	

    public function listaReservasParaReclamacao() {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("SELECT codReservaVoo, tv.numvoo, tr.idusuario FROM rotaairlines.tabelareserva tr, rotaairlines.tabelavoos tv WHERE tr.idvoo = tv.idvoo AND tr.idusuario = :idusuario");
            $sql->bindParam("idusuario", $usuarioReclamacao);
            $sql->execute();

            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {


                $reserva = new Reserva();
                $reserva->set($linha['idVoo']);
                $voo->setclasseVoo($linha['classeVoo']);
                $voo->setorigemVoo($linha['origemVOO']);
                $voo->setdestinoVoo($linha['destinoVOO']);
                $voo->setDataHoraPartida($linha['dataHoraPartida']);
                $voo->setDataHoraChegada($linha['dataHoraPartida']);
                $voo->setnumVoo($linha['numVoo']);
                $voo->setmodeloAeronave($linha['modeloAeronave']);
                $voo->setvalorVoo($linha['valorVoo']);
                $voo->setCodigoReserva($linha['codReserva']);

                array_push($this->listaReservas, $voo);


            }

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

	public function getCodReserva()
    {
        return $this->codReserva;
    }

    public function setCodReserva($codReserva)
    {
        $this->codReserva = $codReserva;
    }

    public function getIdReclamacao()
    {
        return $this->idReclamacao;
    }

    public function setIdReclamacao($idReclamacao)
    {
        $this->idReclamacao = $idReclamacao;
    }

    public function getDescricaoReclamacao()
    {
        return $this->descricaoReclamacao;
    }

    public function setDescricaoReclamacao($descricaoReclamacao)
    {
        $this->descricaoReclamacao = $descricaoReclamacao;
    }

    public function getUsuarioReclamacao()
    {
        return $this->usuarioReclamacao;
    }

    public function setUsuarioReclamacao($usuarioReclamacao)
    {
        $this->usuarioReclamacao = $usuarioReclamacao;
    }

    public function getCodReserva()
    {
        return $this->codReserva;
    }

    public function setCodReserva($codReserva)
    {
        $this->codReserva = $codReserva;
    }
}

?>