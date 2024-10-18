<?php
require_once "conexao.php";

function novaMensagemPT($nome_nova_mensagem_PT, $telefone_nova_mensagem_PT, $email_nova_mensagem_PT, $nova_mensagem_PT) {
    $conexao = criaConexao();

    $insert_mensagens = "INSERT INTO msgPT (nomePT, telefonePT, emailPT, mensagemPT) VALUES (:nomePT, :telefonePT, :emailPT, :mensagemPT)";

    $statement = $conexao->prepare($insert_mensagens);

    $statement->bindValue(":nomePT", $nome_nova_mensagem_PT);
    $statement->bindValue(":telefonePT", $telefone_nova_mensagem_PT);
    $statement->bindValue(":emailPT", $email_nova_mensagem_PT);
    $statement->bindValue(":mensagemPT", $nova_mensagem_PT);

    $statement->execute();
}

?>