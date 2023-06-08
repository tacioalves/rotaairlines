<?php
require_once "Model/Conexao.php";
class Usuario {
    private $nomeUsuario;
    private $email;
    private $dtaNasc;
    private $sexo;
    private $paisNasc;
    private $numTel;
    private $cpf;
    private $senha;
    private $idUsuario;

    public function cadastraUsuario(){   
        try{
            $conn = Conexao::conectar();
            $sql = $conn->prepare ("insert into rotaairlines.tabelausuario (nomeUsuario, email, dtaNasc, paisNasc,  numTel, cpf, senha, sexo)
            values (:nome, :emailUsuario, :nascUsuario, :paisNascUsuario, :numTelUsuario, :cpfUsuario, :senha, :sexoUsuario)");
            $sql->bindParam("nome",$nomeUsuario);
            $sql->bindParam("emailUsuario",$email);
            $sql->bindParam("nascUsuario",$dtaNasc);
            $sql->bindParam("sexoUsuario",$sexo);
            $sql->bindParam("paisNascUsuario",$paisNasc);
            $sql->bindParam("numTelUsuario",$numTel);
            $sql->bindParam("cpfUsuario",$cpf);
            $sql->bindParam("senha",$senha);
            $nomeUsuario = $this->nomeUsuario;
            $email = $this->email;
            $dtaNasc = $this->dtaNasc;
            $sexo = $this->sexo;
            $paisNasc = $this->paisNasc;
            $numTel = $this->numTel;
            $cpf = $this->cpf;
            $senha = $this->senha;
            $sql->execute();
            }
           catch(PDOException $e)
           {
            echo "Connection failed: ". $e->getMessage();
            }
        
            
    }


    public function login(){   
        try{
            $conn = Conexao::conectar();
            $sql = $conn->prepare ("select idUsuario, nomeUsuario from rotaairlines.tabelausuario where cpf = :cpfUsuario AND senha = :senha");
            $sql->bindParam("cpfUsuario",$cpf);
            $sql->bindParam("senha",$senha);
            $cpf = $this->cpf;
            $senha = $this->senha;
            $sql->execute();
            $resultado = $sql->fetch();

            if ($resultado) {
                $usuario = array(
                    'idUsuario' => $resultado['idUsuario'],
                    'nomeUsuario' =>$resultado['nomeUsuario']
                );
                $_SESSION['usuario'] = $usuario;
            }
            else{
                echo "Credenciais Incorretas";
            }
            }
           catch(PDOException $e)
           {
            echo "Connection failed: ". $e->getMessage();
            }
        
            
    }


    public function listaDadosUsuario()
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("SELECT nomeUsuario, email, dtaNasc, paisNasc, numTel, cpf, senha, sexo, senha FROM rotaairlines.tabelausuario WHERE idUsuario = :idUsuario;");
            $sql->bindParam("idUsuario", $idUsuario);
            $idUsuario = $this->idUsuario;
            $sql->execute();
    
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            $linha = $sql->fetch(PDO::FETCH_ASSOC);
    
            if ($linha) {
                $usuario = new Usuario();
                $usuario->setNomeUsuario($linha['nomeUsuario']);
                $usuario->setEmail($linha['email']);
                $usuario->setDtaNasc($linha['dtaNasc']);
                $usuario->setPaisNasc($linha['paisNasc']);
                $usuario->setNumTel($linha['numTel']);
                $usuario->setCpf($linha['cpf']);
                $usuario->setSexo($linha['sexo']);
                $usuario->setSenha($linha['senha']);
                return $usuario;
            }
    
        } catch (PDOException $e) {
            echo "Connection failed: ". $e->getMessage();
        }
    }

    public function atualizaCadastro(){   
        try{
            $conn = Conexao::conectar();
            $sql = $conn->prepare ("UPDATE rotaairlines.tabelausuario SET nomeUsuario = :nome, email= :emailUsuario , dtaNasc= :nascUsuario, 
            paisNasc=:paisNascUsuario, numTel=:numTelUsuario, cpf=:cpfUsuario, sexo= :sexoUsuario, senha= :senha
            WHERE idUsuario = :idusuario ;");
            $sql->bindParam("nome",$nomeUsuario);
            $sql->bindParam("emailUsuario",$email);
            $sql->bindParam("nascUsuario",$dtaNasc);
            $sql->bindParam("sexoUsuario",$sexo);
            $sql->bindParam("paisNascUsuario",$paisNasc);
            $sql->bindParam("numTelUsuario",$numTel);
            $sql->bindParam("cpfUsuario",$cpf);
            $sql->bindParam("idusuario",$idUsuario);
            $sql->bindParam("senha",$senha);
            $idUsuario = $this->idUsuario;
            $nomeUsuario = $this->nomeUsuario;
            $email = $this->email;
            $dtaNasc = $this->dtaNasc;
            $sexo = $this->sexo;
            $paisNasc = $this->paisNasc;
            $numTel = $this->numTel;
            $cpf = $this->cpf;
            $senha = $this->senha;

            $sql->execute();
            }
           catch(PDOException $e)
           {
            echo "Connection failed: ". $e->getMessage();
            }
        
            
    }
    

    public function deslogar(){   
        session_destroy();           
    }

    public function loginUsuario($usuario)
    {

    }
    public function getNomeUsuario() {
        return $this->nomeUsuario;
    }

    public function setNomeUsuario($nomeUsuario) {
        $this->nomeUsuario = $nomeUsuario;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getDtaNasc() {
        return $this->dtaNasc;
    }

    public function setDtaNasc($dtaNasc) {
        $this->dtaNasc = $dtaNasc;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getPaisNasc() {
        return $this->paisNasc;
    }

    public function setPaisNasc($paisNasc) {
        $this->paisNasc = $paisNasc;
    }

    public function getNumTel() {
        return $this->numTel;
    }

    public function setNumTel($numTel) {
        $this->numTel = $numTel;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

}


?>
