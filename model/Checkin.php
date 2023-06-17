<?php
require_once "Model/Voo.php";
require_once "Model/Usuario.php";
class Checkin
{
    private $codReserva;
    private $assentoReservado;
    private $codUsuario;
    private $validaCheckin;



    public function pesquisaCheckin()
    {

        $codReserva = $this->codReserva;
        $codUsuario = $this->codUsuario;
      

        if ($codReserva && $codUsuario) {
            try {
                $conn = Conexao::conectar();
                $sql = $conn->prepare("SELECT  tr.codReservaVoo as codigoReserva, tv.origemVOO as origemVoo, tv.destinoVOO as destinoVoo, tv.duracao as duracaoVoo, 
                tv.numVoo as numVoo, tv.dataHoraPartida as dataHoraPartida, tv.dataHoraChegada dataHoraChegada, tu.nomeUsuario as nomeUsuario, 
                tr.validaCheckin as validaCheckin, tr.assentoReservado as assentoReservado, tv.modeloAeronave modeloAeronave
                FROM rotaairlines.tabelavoos tv 
                JOIN rotaairlines.tabelareserva tr ON tv.idVoo = tr.idVoo JOIN rotaairlines.tabelausuario tu ON tu.idUsuario = tr.idUsuario 
                WHERE tr.codReservaVoo LIKE :codReserva AND tr.idUsuario = :idUsuario AND tr.statusReserva like '%ATIVA%'");


                $codReserva = '%' . $codReserva . '%';
                $sql->bindValue("codReserva", $codReserva);
                $sql->bindParam("idUsuario", $codUsuario);
                $sql->execute();

                $linha = $sql->setFetchMode(PDO::FETCH_ASSOC);
                $voo = new Voo();
                $usuario = new Usuario();
                $checkin = new Checkin();
                while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                $voo->setorigemVoo($linha['origemVoo']);
                $voo->setdestinoVoo($linha['destinoVoo']);
                $voo->setDuracao($linha['duracaoVoo']);
                $voo->setnumVoo($linha['numVoo']);
                $voo->setDataHoraPartida($linha['dataHoraPartida']);
                $voo->setDataHoraChegada($linha['dataHoraChegada']);
                $voo->setCodigoReserva($linha['codigoReserva']);
                $voo->setModeloAeronave($linha['modeloAeronave']);
                $usuario->setNomeUsuario($linha['nomeUsuario']);
                $checkin->setValidaCheckin($linha['validaCheckin']);
                $checkin->setAssentoReservado($linha['assentoReservado']);
                return [$voo, $usuario, $checkin];
               
            }

       
                

            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }

        }
    }
    public function validaCheckin()
    {
        
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("UPDATE rotaairlines.tabelareserva SET validaCheckin = 1 WHERE codReservaVoo LIKE :codReserva;");
            $sql->bindParam("codReserva", $codReserva);
            $codReserva = $this->codReserva;
            $codReserva = '%' . $codReserva . '%';
            $sql->execute();
            

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }


        
    }

    /**
     * @return mixed
     */
    public function getCodUsuario()
    {
        return $this->codUsuario;
    }

    /**
     * @param mixed $codUsuario 
     * @return self
     */
    public function setCodUsuario($codUsuario): self
    {
        $this->codUsuario = $codUsuario;
        return $this;
    }


    public function getCodReserva()
    {
        return $this->codReserva;
    }

    /**
     * @param mixed $codReserva 
     * @return self
     */
    public function setCodReserva($codReserva): self
    {
        $this->codReserva = $codReserva;
        return $this;
    }

	/**
	 * @return mixed
	 */
	public function getValidaCheckin() {
		return $this->validaCheckin;
	}
	
	/**
	 * @param mixed $validaCheckin 
	 * @return self
	 */
	public function setValidaCheckin($validaCheckin): self {
		$this->validaCheckin = $validaCheckin;
		return $this;
	}

    public function getAssentoReservado() {
		return $this->assentoReservado;
	}
	
	/**
	 * @param mixed $assentoReservado 
	 * @return self
	 */
	public function setAssentoReservado($assentoReservado): self {
		$this->assentoReservado = $assentoReservado;
		return $this;
	}
}


?>