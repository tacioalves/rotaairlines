<?php
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
