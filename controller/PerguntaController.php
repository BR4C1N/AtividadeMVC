<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/Pergunta.php';

class PerguntaController
{
    public function exibir()
    {
        $pergunta = new Pergunta();

        $_REQUEST['perguntas'] = $pergunta->ler();

        require_once $_SERVER['DOCUMENT_ROOT'] . '/view/PerguntaView.php';
    }
}
