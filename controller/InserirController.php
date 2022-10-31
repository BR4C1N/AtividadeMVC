<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/Pergunta.php';

$pergunta = new Pergunta();

$pergunta->setPergunta($_POST["pergunta"]);
$pergunta->setStatus($_POST["statusPergunta"]);
$pergunta->criar();

header("Location: " . $_SERVER['HTTP_REFERER']);
exit();
