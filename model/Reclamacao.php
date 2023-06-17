<?php
require_once "Model/Conexao.php";

class Reclamacao
{

    private $codReserva;
    private $idReclamacao;
    private $descricaoReclamacao;
    private $usuarioReclamacao;
    private $listaReclamacao = array();
    private $reservaListada;
    private $listaReclamacao2 = array();
    private $statusReclamacao;




    public function listaReservasParaReclamacao()
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("SELECT CONCAT('Cod Reserva:',codReservaVoo,'|',' Numero Voo:',tv.numvoo) as reserva, codReserva FROM rotaairlines.tabelareserva tr, rotaairlines.tabelavoos tv WHERE tr.idvoo = tv.idvoo AND tr.idusuario = :idusuario AND tr.statusReserva like '%ATIVA%'");
            $sql->bindParam("idusuario", $usuarioReclamacao);
            $usuarioReclamacao = $this->usuarioReclamacao;
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {

                $reclamacao = new Reclamacao();
                $reclamacao->setCodReserva($linha['codReserva']);
                $reclamacao->setReservaListada($linha['reserva']);

                array_push($this->listaReclamacao, $reclamacao);


            }



            $sql2 = $conn->prepare("SELECT idReclamacao, codReserva, descricaoReclamacao, statusReclamacao FROM rotaairlines.tabelareclamacao where idUsuarioReclamacao = :idusuario");
            $sql2->bindParam("idusuario", $usuarioReclamacao);
            $sql2->execute();
            $result = $sql2->setFetchMode(PDO::FETCH_ASSOC);
            while ($linha = $sql2->fetch(PDO::FETCH_ASSOC)) {

                $reclamacao = new Reclamacao();
                $reclamacao->setIdReclamacao($linha['idReclamacao']);
                $reclamacao->setCodReserva($linha['codReserva']);
                $reclamacao->setStatusReclamacao($linha['statusReclamacao']);
                $reclamacao->setDescricaoReclamacao($linha['descricaoReclamacao']);

                array_push($this->listaReclamacao2, $reclamacao);


            }

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }




    public function insereReclamacao()
    {

        try {
            $conn = Conexao::conectar();

            $sql = $conn->prepare("INSERT INTO rotaairlines.tabelareclamacao ( idUsuarioReclamacao, codReserva, descricaoReclamacao, statusReclamacao) 
            VALUES ( :idUsuarioReclamacao, :codReserva, :descricaoReclamacao, 'Em Analise');");


            $sql->bindParam("idUsuarioReclamacao", $usuarioReclamacao);
            $sql->bindParam("codReserva", $codReserva);
            $sql->bindParam("descricaoReclamacao", $descricaoReclamacao);
         
            $usuarioReclamacao = $this->usuarioReclamacao;
            $codReserva = $this->codReserva;
            $descricaoReclamacao =  $this->descricaoReclamacao;

            $sql->execute();


        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }


    public function deletaReclamacao()
    {

        try {
            $conn = Conexao::conectar();

            $sql = $conn->prepare("UPDATE  rotaairlines.tabelareclamacao SET statusReclamacao = 'Cancelada'  WHERE idReclamacao = :idReclamacao");
            $sql->bindParam("idReclamacao", $idReclamacao);
            $idReclamacao = $this->idReclamacao;

            $sql->execute();


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

    public function getReservaListada()
    {
        return $this->reservaListada;
    }

    public function setReservaListada($reservaListada)
    {
        $this->reservaListada = $reservaListada;
    }

	/**
	 * @return mixed
	 */
	public function getListaReclamacao() {
		return $this->listaReclamacao;
	}
	
	/**
	 * @param mixed $listaReclamacao 
	 * @return self
	 */
	public function setListaReclamacao($listaReclamacao): self {
		$this->listaReclamacao = $listaReclamacao;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getListaReclamacao2() {
		return $this->listaReclamacao2;
	}
	
	/**
	 * @param mixed $listaReclamacao2 
	 * @return self
	 */
	public function setListaReclamacao2($listaReclamacao2): self {
		$this->listaReclamacao2 = $listaReclamacao2;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getStatusReclamacao() {
		return $this->statusReclamacao;
	}
	
	/**
	 * @param mixed $statusReclamacao 
	 * @return self
	 */
	public function setStatusReclamacao($statusReclamacao): self {
		$this->statusReclamacao = $statusReclamacao;
		return $this;
	}
}

?>