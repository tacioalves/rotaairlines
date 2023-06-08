<?php
require_once "Model/Reclamacao.php";
class ReclamacaoController
{
    public function processa($acao)
    {

        if ($acao == "LP") {
            $reclamacao = new Reclamacao();
            $reclamacao->setUsuarioReclamacao($_SESSION['usuario']['idUsuario']);
            $reclamacao->listaReservasParaReclamacao();
            require_once "View/minhasReclamacoes.php";


        } else if ($acao == "IR") {
            $reclamacao = new Reclamacao();
            $reclamacao->setUsuarioReclamacao($_SESSION['usuario']['idUsuario']);
            $reclamacao->setCodReserva($_POST['codReserva']);
            $reclamacao->setDescricaoReclamacao($_POST['descricaoReclamacao']);
            $reclamacao->insereReclamacao();
            header("Location:MINHASRECLAMACOES");


        } else if ($acao == "DR") {
            $reclamacao = new Reclamacao();
            $reclamacao->setIdReclamacao($_POST['idReclamacao']);
            $reclamacao->setDescricaoReclamacao($_POST['descReclamacao']);
            $reclamacao->setStatusReclamacao($_POST['statusReclamacao']);
            $reclamacao->setCodReserva($_POST['codReserva']);
            require_once "View/detalhareclamacao.php";


        } else if ($acao == "DLR") {
            $reclamacao = new Reclamacao();
            $reclamacao->setIdReclamacao($_POST['idReclamacao']);
            $reclamacao->deletaReclamacao();
            header("Location:MINHASRECLAMACOES");


        }
    }
}

?>