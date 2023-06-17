<?php
require_once "Model/Conexao.php";
class Voo
{


    private $idVoo;
    private $classeVoo;
    private $origemVoo;
    private $destinoVoo;
    private $dataHoraPartida;
    private $dataHoraChegada;
    private $numVoo;
    private $modeloAeronave;
    private $valorVoo;
    private $duracao;
    private $codigoReserva;
    private $qtdPassagens;
    private $listaVoosIda = array();
    private $listaVoosVolta = array();
    private $listaDadosVoo = array();
    private $imagem;



    public function buscaVoo($dataIda, $dataVolta)
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("SELECT  idVoo , classeVoo , origemVOO , destinoVOO , dataHoraPartida , numVoo , modeloAeronave , 
            valorVoo , dataHoraChegada , imagemVoo , assentosDisponiveis FROM  rotaairlines . tabelavoos where origemVOO= :origemVoo AND destinoVOO = :destinoVoo AND qtdPassagens > 0
            AND DATE(dataHoraPartida) = :dataIda");

            $sql2 = $conn->prepare("SELECT  idVoo , classeVoo , origemVOO , destinoVOO , dataHoraPartida , numVoo , modeloAeronave , 
            valorVoo , dataHoraChegada , imagemVoo , assentosDisponiveis FROM  rotaairlines . tabelavoos where origemVOO= :destinoVoo AND destinoVOO = :origemVoo AND qtdPassagens > 0
            AND DATE(dataHoraPartida) = :dataVolta");

            $sql->bindParam("origemVoo", $origemVoo);
            $sql->bindParam("destinoVoo", $destinoVoo);
            $sql->bindParam("dataIda", $dataIda);
            $sql2->bindParam("origemVoo", $origemVoo);
            $sql2->bindParam("destinoVoo", $destinoVoo);
            $sql2->bindParam("dataVolta", $dataVolta);
            $origemVoo = $this->origemVoo;
            $destinoVoo = $this->destinoVoo;
            

            $sql->execute();
           // echo "Query 1:";
           // $sql->debugDumpParams();

            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {


                $voo = new Voo();
                $voo->setidVoo($linha['idVoo']);
                $voo->setclasseVoo($linha['classeVoo']);
                $voo->setorigemVoo($linha['origemVOO']);
                $voo->setdestinoVoo($linha['destinoVOO']);
                $voo->setDataHoraPartida($linha['dataHoraPartida']);
                $voo->setnumVoo($linha['numVoo']);
                $voo->setmodeloAeronave($linha['modeloAeronave']);
                $voo->setvalorVoo($linha['valorVoo']);
                $voo->setImagem($linha['imagemVoo']);

                array_push($this->listaVoosIda, $voo);


            }


            $sql2->execute();

            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            while ($linha = $sql2->fetch(PDO::FETCH_ASSOC)) {


                $voo = new Voo();
                $voo->setidVoo($linha['idVoo']);
                $voo->setclasseVoo($linha['classeVoo']);
                $voo->setorigemVoo($linha['origemVOO']);
                $voo->setdestinoVoo($linha['destinoVOO']);
                $voo->setDataHoraPartida($linha['dataHoraPartida']);
                $voo->setnumVoo($linha['numVoo']);
                $voo->setmodeloAeronave($linha['modeloAeronave']);
                $voo->setvalorVoo($linha['valorVoo']);
                $voo->setImagem($linha['imagemVoo']);

                array_push($this->listaVoosVolta, $voo);


            }

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }


    }

    public function listaDadosVooCompra($idVooIda, $idVooVolta)
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("SELECT  idVoo , classeVoo , origemVOO , destinoVOO , dataHoraPartida , numVoo , modeloAeronave , 
            valorVoo , dataHoraChegada , imagemVoo , assentosDisponiveis, codReserva FROM  rotaairlines . tabelavoos where idVoo in (:idVooIda, :idVooVolta) ");
            $sql->bindParam("idVooIda", $idVooIda);
            $sql->bindParam("idVooVolta", $idVooVolta);

            $sql->execute();

            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {


                $voo = new Voo();
                $voo->setidVoo($linha['idVoo']);
                $voo->setclasseVoo($linha['classeVoo']);
                $voo->setorigemVoo($linha['origemVOO']);
                $voo->setdestinoVoo($linha['destinoVOO']);
                $voo->setDataHoraPartida($linha['dataHoraPartida']);
                $voo->setDataHoraChegada($linha['dataHoraPartida']);
                $voo->setnumVoo($linha['numVoo']);
                $voo->setmodeloAeronave($linha['modeloAeronave']);
                $voo->setvalorVoo($linha['valorVoo']);
                $voo->setCodigoReserva($linha['codReserva']);

                array_push($this->listaDadosVoo, $voo);


            }

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }


    public function finalizaCompra($idUsuario)
    {

        try {
            $conn = Conexao::conectar();

            $sql = $conn->prepare("INSERT INTO rotaairlines.tabelareserva (codReservaVoo, idVoo, idUsuario, assentoReservado, statusReserva) 
            VALUES (:codReserva, :idVoo, :idUsuario, :assentoReservado, 'ATIVA');");


            $sql->bindParam("codReserva", $codigoReserva);
            $sql->bindParam("idVoo", $idVoo);
            $sql->bindParam("idUsuario", $idUsuario);
            $sql->bindParam("assentoReservado", $assentoReservado);
            $codigoReserva = $this->codigoReserva;
            $idVoo = $this->idVoo;
            $assentoReservado = rand(1, 60);

            $sql->execute();

            
            $sql2 = $conn->prepare("UPDATE rotaairlines.tabelavoos SET qtdPassagens = (qtdPassagens - 1) WHERE idVoo = :idVoo");
            $sql2->bindParam("idVoo", $idVoo);
            $sql2->execute();



        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    
    
    public function pesquisaVoo()
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("SELECT  origemVOO FROM  rotaairlines.tabelavoos group by origemVOO ");
            $sql->execute();


            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {

                $voo = new Voo();
                $voo->setorigemVoo($linha['origemVOO']);
                array_push($this->listaDadosVoo, $voo);
            }

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }





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

    public function getDataHoraPartida()
    {
        return $this->dataHoraPartida;
    }

    public function setDataHoraPartida($dataHoraPartida)
    {
        $this->dataHoraPartida = $dataHoraPartida;
    }

    public function getDataHoraChegada()
    {
        return $this->dataHoraChegada;
    }

    public function setDataHoraChegada($dataHoraChegada)
    {
        $this->dataHoraChegada = $dataHoraChegada;
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

    public function getCodigoReserva()
    {
        return $this->codigoReserva;
    }

    public function setCodigoReserva($codigoReserva)
    {
        $this->codigoReserva = $codigoReserva;
    }


    /**
     * @return mixed
     */
    public function getListaVoosIda()
    {
        return $this->listaVoosIda;
    }
    public function getListaVoosVolta()
    {
        return $this->listaVoosVolta;
    }

    /**
     * @return mixed
     */
    public function getListaDadosVoo()
    {
        return $this->listaDadosVoo;
    }


	/**
	 * @return mixed
	 */
	public function getImagem() {
		return $this->imagem;
	}
	
	/**
	 * @param mixed $imagem 
	 * @return self
	 */
	public function setImagem($imagem): self {
		$this->imagem = $imagem;
		return $this;
	}
}


?>