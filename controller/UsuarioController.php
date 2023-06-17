<?php
require_once "Model/Usuario.php";

class UsuarioController
{
    public function processa($acao)
    {

        if ($acao == "C") {
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
            require_once "view/login.php";
            echo '<script type="text/javascript">  alert("Cadastro Realizado com Sucesso!"); </script>';


        } else if ($acao == "L") {
            $novoUsuario = new Usuario();
            $novoUsuario->setCpf($_POST['cpf']);
            $novoUsuario->setSenha($_POST['senha']);
            $novoUsuario->login();
            header("Location:index");

        } else if ($acao == "D") {
            $novoUsuario = new Usuario();
            $novoUsuario->deslogar();
            header("Location:index");

        } else if ($acao == "LC") {
            $novoUsuario = new Usuario();
            $novoUsuario->setIdUsuario($_SESSION['usuario']['idUsuario']);
            $usuario = $novoUsuario->listaDadosUsuario();
            require_once "View/account.php";

        } else if ($acao == "AC") {
            $novoUsuario = new Usuario();
            $novoUsuario->setIdUsuario($_SESSION['usuario']['idUsuario']);
            $novoUsuario->setCpf($_POST['cpf']);
            $novoUsuario->setSenha($_POST['senha']);
            $novoUsuario->setDtaNasc($_POST['dataNasc']);
            $novoUsuario->setEmail($_POST['email']);
            $novoUsuario->setNomeUsuario($_POST['nomeUsuario']);
            $novoUsuario->setNumTel($_POST['numeroCelular']);
            $novoUsuario->setPaisNasc($_POST['paisUsuario']);
            $novoUsuario->setSexo($_POST['sexo']);
            $novoUsuario->setSenha($_POST['senha']);
            $novoUsuario->atualizaCadastro();
            header("Location:DASHBOARD");

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