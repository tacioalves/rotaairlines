<?php
class Voo
{
    private $idVoo;
    private $classeVoo;
    private $origemVoo;
    private $destinoVoo;
    private $dataHora;
    private $codReserva;
    private $numVoo;
    private $modeloAeronave;
    private $valorVoo;
    private $duracao;
    private $qtdPassagens;

    public function getIdVoo()
    {
        return $this->idVoo;
    }

    public function setIdVoo($idVoo)
    {
        $this->idVoo = $idVoo;
    }

    public function getClasseVoo()
    {
        return $this->classeVoo;
    }

    public function setClasseVoo($classeVoo)
    {
        $this->classeVoo = $classeVoo;
    }

    public function getOrigemVoo()
    {
        return $this->origemVoo;
    }

    public function setOrigemVoo($origemVoo)
    {
        $this->origemVoo = $origemVoo;
    }

    public function getDestinoVoo()
    {
        return $this->destinoVoo;
    }

    public function setDestinoVoo($destinoVoo)
    {
        $this->destinoVoo = $destinoVoo;
    }

    public function getDataHora()
    {
        return $this->dataHora;
    }

    public function setDataHora($dataHora)
    {
        $this->dataHora = $dataHora;
    }

    public function getCodReserva()
    {
        return $this->codReserva;
    }

    public function setCodReserva($codReserva)
    {
        $this->codReserva = $codReserva;
    }

    public function getNumVoo()
    {
        return $this->numVoo;
    }

    public function setNumVoo($numVoo)
    {
        $this->numVoo = $numVoo;
    }

    public function getModeloAeronave()
    {
        return $this->modeloAeronave;
    }

    public function setModeloAeronave($modeloAeronave)
    {
        $this->modeloAeronave = $modeloAeronave;
    }

    public function getValorVoo()
    {
        return $this->valorVoo;
    }

    public function setValorVoo($valorVoo)
    {
        $this->valorVoo = $valorVoo;
    }

    public function getDuracao()
    {
        return $this->duracao;
    }

    public function setDuracao($duracao)
    {
        $this->duracao = $duracao;
    }

    public function getQtdPassagens()
    {
        return $this->qtdPassagens;
    }

    public function setQtdPassagens($qtdPassagens)
    {
        $this->qtdPassagens = $qtdPassagens;
    }
}


?>