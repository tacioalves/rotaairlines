<?php
require_once "Model/Conexao.php";
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
    private $listaVoosIda = array();
    private $listaVoosVolta = array();

    private $listaDadosVoo = array();




    public function buscaVoo(){
        try{
            $conn = Conexao::conectar();
            $sql = $conn->prepare ("SELECT  idVoo , classeVoo , origemVOO , destinoVOO , dataHoraPartida , numVoo , modeloAeronave , 
            valorVoo , dataHoraChegada , imagemVoo , assentosDisponiveis FROM  rotaairlines . tabelavoos where origemVOO= :origemVoo AND destinoVOO = :destinoVoo");
            $sql2 = $conn->prepare ("SELECT  idVoo , classeVoo , origemVOO , destinoVOO , dataHoraPartida , numVoo , modeloAeronave , 
            valorVoo , dataHoraChegada , imagemVoo , assentosDisponiveis FROM  rotaairlines . tabelavoos where origemVOO= :destinoVoo AND destinoVOO = :origemVoo");
            $sql->bindParam("origemVoo",$origemVoo);
            $sql->bindParam("destinoVoo",$destinoVoo);
            $sql2->bindParam("origemVoo",$origemVoo);
            $sql2->bindParam("destinoVoo",$destinoVoo);
            $origemVoo = $this->origemVoo;
            $destinoVoo = $this->destinoVoo;
          
            $sql->execute();
           
             $result=$sql->setFetchMode(PDO::FETCH_ASSOC);
             while ($linha = $sql->fetch(PDO::FETCH_ASSOC))
            { 
                 
                 
                $voo = new Voo();
                $voo->setidVoo($linha['idVoo']);
                $voo->setclasseVoo($linha['classeVoo']);
                $voo->setorigemVoo($linha['origemVOO']);
                $voo->setdestinoVoo($linha['destinoVOO']);
                $voo->setdataHora($linha['dataHoraPartida']);
                $voo->setnumVoo($linha['numVoo']);
                $voo->setmodeloAeronave($linha['modeloAeronave']);
                $voo->setvalorVoo($linha['valorVoo']);
     
                array_push($this->listaVoosIda,$voo);
    
                
            }

                     
            $sql2->execute();
           
             $result=$sql->setFetchMode(PDO::FETCH_ASSOC);
             while ($linha = $sql2->fetch(PDO::FETCH_ASSOC))
            { 
                 
                 
                $voo = new Voo();
                $voo->setidVoo($linha['idVoo']);
                $voo->setclasseVoo($linha['classeVoo']);
                $voo->setorigemVoo($linha['origemVOO']);
                $voo->setdestinoVoo($linha['destinoVOO']);
                $voo->setdataHora($linha['dataHoraPartida']);
                $voo->setnumVoo($linha['numVoo']);
                $voo->setmodeloAeronave($linha['modeloAeronave']);
                $voo->setvalorVoo($linha['valorVoo']);
     
                array_push($this->listaVoosVolta,$voo);
    
                
            }
          
           }
    
           catch(PDOException $e)
           {
            echo "Connection failed: ". $e->getMessage();
            }
        
        
    }

    public function listaDadosVooCompra($idVooIda, $idVooVolta){
        try{
            $conn = Conexao::conectar();
            $sql = $conn->prepare ("SELECT  idVoo , classeVoo , origemVOO , destinoVOO , dataHoraPartida , numVoo , modeloAeronave , 
            valorVoo , dataHoraChegada , imagemVoo , assentosDisponiveis FROM  rotaairlines . tabelavoos where idVoo in (:idVooIda, :idVooVolta) ");
            $sql->bindParam("idVooIda",$idVooIda);
            $sql->bindParam("idVooVolta",$idVooVolta);
          
            $sql->execute();
           
             $result=$sql->setFetchMode(PDO::FETCH_ASSOC);
             while ($linha = $sql->fetch(PDO::FETCH_ASSOC))
            { 
                 
                 
                $voo = new Voo();
                $voo->setidVoo($linha['idVoo']);
                $voo->setclasseVoo($linha['classeVoo']);
                $voo->setorigemVoo($linha['origemVOO']);
                $voo->setdestinoVoo($linha['destinoVOO']);
                $voo->setdataHora($linha['dataHoraPartida']);
                $voo->setnumVoo($linha['numVoo']);
                $voo->setmodeloAeronave($linha['modeloAeronave']);
                $voo->setvalorVoo($linha['valorVoo']);
     
                array_push($this->listaDadosVoo,$voo);
    
                
            }

        }
        catch(PDOException $e)
        {
         echo "Connection failed: ". $e->getMessage();
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


	/**
	 * @return mixed
	 */
	public function getListaVoosIda() {
		return $this->listaVoosIda;
	}
    public function getListaVoosVolta() {
		return $this->listaVoosVolta;
	}

	/**
	 * @return mixed
	 */
	public function getListaDadosVoo() {
		return $this->listaDadosVoo;
	}
}


?>
