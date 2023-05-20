<?php
class Reclamacao{

    private $codReserva;
    private $idReclamacao;
    private $descricaoReclamacao;
    private $usuarioReclamacao;

	
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

}

?>