<?php
require_once "../Model/Usuario.php";

class UsuarioController
{
    public function cadastrarNovoUsuario()
    {
     $novoUsuario = new Usuario();
     $novoUsuario->setCpf($_POST['cpf']);
     $novoUsuario->setSenha($_POST['senha']);
     $novoUsuario->setDtaNasc($_POST['dataNasc']);
     $novoUsuario->setEmail($_POST['email']);
     $novoUsuario->setNomeUsuario($_POST['nomeUsuario']);
     $novoUsuario->setNumTel($_POST['numeroCelular']);
     $novoUsuario->setPaisNasc($_POST['paisUsuario']);
     $novoUsuario->setSexo("M"); //Rever no formualario
     $novoUsuario->cadastraUsuario();

    

     


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