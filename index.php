<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/controller/PerguntaController.php';

$perguntaController = new PerguntaController();
$perguntaController->exibir();
