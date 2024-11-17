<?php

require_once "./msgDAO.php";

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

novaMensagemENG($nome, $telefone, $email, $mensagem);

echo '<script>alert("Thank you for your message!");</script>';

// Tempo para aparecer o alerta antes de redirecionar
echo '<meta http-equiv="refresh" content="0.000001;url=../eng/home.html">';

?>