<?php

require_once "./msgDAO.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

novaMensagemPT($nome, $email, $telefone, $mensagem);

header('Location: ../pt/home.html');

?>