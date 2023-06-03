<?php
require_once "Model/Usuario.php";

class UsuarioController
{
    public function processa($acao)
    {

    if ($acao=="C"){
        $novoUsuario = new Usuario();
        $novoUsuario->setCpf($_POST['cpf']);
        $novoUsuario->setSenha($_POST['senha']);
        $novoUsuario->setDtaNasc($_POST['dataNasc']);
        $novoUsuario->setEmail($_POST['email']);
        $novoUsuario->setNomeUsuario($_POST['nomeUsuario']);
        $novoUsuario->setNumTel($_POST['numeroCelular']);
        $novoUsuario->setPaisNasc($_POST['paisUsuario']);
        $novoUsuario->setSexo($_POST['sexo']);
        $novoUsuario->cadastraUsuario();
        header("Location:LOGIN");
    }

    
    if ($acao=="L"){
        $novoUsuario = new Usuario();
        $novoUsuario->setCpf($_POST['cpf']);
        $novoUsuario->setSenha($_POST['senha']);
        $novoUsuario->login();
        header("Location:index");
    }

    if($acao=="D"){
        $novoUsuario = new Usuario();
        $novoUsuario->deslogar();
        header("Location:index");
    }

    

     


    }

    public function loginUsuario($usuario)
    {

    }

    public function editaUsuario($usuario)
    {

    }

    public function apagaUsuario($usuario)
    {

    }
}



?>