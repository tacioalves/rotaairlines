<?php
class Destino
{
    private $idDestino;
    private $nomeDestino;
    private $descricaoDestino;
    private $imageDestino;
    private $vooDestino;

    public function ofertasDestinos()
    {

    }

    public function pesquisaDestinos($origem, $destino)
    {

    }

    public function getIdDestino()
    {
        return $this->idDestino;
    }

    public function setIdDestino($idDestino)
    {
        $this->idDestino = $idDestino;
    }

    public function getNomeDestino()
    {
        return $this->nomeDestino;
    }

    public function setNomeDestino($nomeDestino)
    {
        $this->nomeDestino = $nomeDestino;
    }

    public function getDescricaoDestino()
    {
        return $this->descricaoDestino;
    }

    public function setDescricaoDestino($descricaoDestino)
    {
        $this->descricaoDestino = $descricaoDestino;
    }

    public function getImageDestino()
    {
        return $this->imageDestino;
    }

    public function setImageDestino($imageDestino)
    {
        $this->imageDestino = $imageDestino;
    }

    public function getVooDestino()
    {
        return $this->vooDestino;
    }

    public function setVooDestino($vooDestino)
    {
        $this->vooDestino = $vooDestino;
    }
}

?>