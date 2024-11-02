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

function novaMensagemESP($nome_nova_mensagem_ESP, $telefone_nova_mensagem_ESP, $email_nova_mensagem_ESP, $nova_mensagem_ESP) {
    $conexao = criaConexao();

    $insert_mensagens = "INSERT INTO msgESP (nomeESP, telefoneESP, emailESP, mensagemESP) VALUES (:nomeESP, :telefoneESP, :emailESP, :mensagemESP)";

    $statement = $conexao->prepare($insert_mensagens);

    $statement->bindValue(":nomeESP", $nome_nova_mensagem_ESP);
    $statement->bindValue(":telefoneESP", $telefone_nova_mensagem_ESP);
    $statement->bindValue(":emailESP", $email_nova_mensagem_ESP);
    $statement->bindValue(":mensagemESP", $nova_mensagem_ESP);

    $statement->execute();
}

?>