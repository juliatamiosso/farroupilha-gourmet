<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/farroupilha-gourmet/pt/css/estilosaibamais.css">
    <title>Saiba Mais | Farroupilha Gourmet</title>
    <link rel="icon" href="/farroupilha-gourmet/img/logo.png">
</head>
<body>
    <header class="topo">
        <div class="conteudo">
            <ul>
                <li><a class="bandeira" id="bra" href="/farroupilha-gourmet/pt/saibamais.php" alt="portuguese" title="Português"><img src="/farroupilha-gourmet/img/brasil.jpg" id="imgbandeira"></img></a></li>
                <li><a class="bandeira" id="eua" href="/farroupilha-gourmet/eng/learnmore.php" alt="english" title="English"><img src="/farroupilha-gourmet/img/eua.jpg" id="imgbandeira"></a></li>
                <li><a class="bandeira" id="esp" href="/farroupilha-gourmet/esp/aprendamas.php" alt="spanish" title="Español"><img src="/farroupilha-gourmet/img/esp.jpg" id="imgbandeira"></a></li>
            </ul>
        </div>
    </header>
    <hr class="linha-header-nav">
    <nav>
        <a class="imagem" href="/farroupilha-gourmet/pt/home.html"><img src="/farroupilha-gourmet/img/logo.png" class="logo"></a>
    </nav>
    <main>
        <h1 class="titulo">Saiba Mais</h1>
        <a class="fonte" onclick="history.back()">↩ Voltar</a>
    </main>
    <div class="principal">
        <hr class="linha-header-principal">
        <br>
        <div class="textoinfos">
            <h2>Informações turísticas</h2>
            <p class="paragrafo">Saiba onde obter informações presenciais sobre o turismo em Farroupilha:</p>
            <div class="informacoes">
                <div class="infocomtur">
                    <h5>Conselho Municipal de Turismo (COMTUR) - Prefeitura</h5>
                    <p style="margin-top: 1em;"><span>Endereço:</span> Praça da Emancipação, s/n - Centro, Farroupilha</p>
                    <p><span>Telefone:</span> (54) 2131-5308</p>
                    <p><span>E-mail:</span> <a class="linkemail" href="mailto:turismo@farroupilha.rs.gov.br">turismo@farroupilha.rs.gov.br</a></p>
                    <p><span>Atendimento:</span> Segunda a sexta, 9h às 16h</p>
                </div>
                <div class="infocat">
                    <h5>Centro de Atenção ao Turista (CAT) - Casa da Cultura</h5>
                    <p style="margin-top: 1em;"><span>Endereço:</span> Rua da República, 172 - Centro, Farroupilha</p>
                    <p><span>Telefone:</span> (54) 3261-6995</p>
                    <p><span>E-mail:</span> <a class="linkemail" href="mailto:casadecultura@farroupilha.rs.gov.br">casadecultura@farroupilha.rs.gov.br</a></p>
                    <p><span>Atendimento:</span> Segunda a sexta, 8h às 12h e 13h às 17h</p>
                </div>
            </div>     
        </div>
        <br>
        <div class="divformulario">
            <h2>Entre em contato</h2>
            <p>Sua opinião é muito importante! Deixe um comentário, sugira uma alteração, mande uma dúvida...</p>
            <form action="../dao/criaMensagemPT.php" method="post" style="width: 75%; margin: 0 auto;">
                <div class="formulario">
                    <div class="row mb-3">
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required oninvalid="this.setCustomValidity('Digite seu nome.')" oninput="this.setCustomValidity('')">
                        </div>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required oninvalid="this.setCustomValidity('Digite seu telefone.')" oninput="this.setCustomValidity('')">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="E-mail" required oninvalid="this.setCustomValidity('Digite seu e-mail.')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="form-group mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="mensagem" rows="4" placeholder="Digite sua mensagem..." required oninvalid="this.setCustomValidity('Digite sua mensagem.')" oninput="this.setCustomValidity('')"></textarea>
                    </div>
                    <button type="submit" class="btn btn-secondary">Enviar</button>
                </div>
            </form>
        </div>

    </div>
    <hr class="linha-header-principal" id="linhaheaderrodape">
    <div class="rodape">
        <div>
            <div class="logomarca">
                <div class="imagemrodape"><img src="/farroupilha-gourmet/img/logo.png"></div>
                <div class="nomerodape">
                    <h1>Farroupilha<br>Gourmet</h1>
                </div>
            </div>
            <p>Desenvolvido por Júlia Cabral Tamiosso<br>IFRS Farroupilha - 2024</p>
        </div>
        <div class="inside">
            <ul>
                <li class="bold"><a href="/farroupilha-gourmet/pt/home.html">INÍCIO</a></li>
            </ul>
            <ul>
                <li class="bold"><a href="/farroupilha-gourmet/pt/cidade.html">A CIDADE</a></li>
            </ul>
            <ul>
                <li class="bold">ONDE COMER</li>
                <li><a href="/farroupilha-gourmet/pt/alacarte/alacarte.html">À La Carte</a></li>
                <li><a href="/farroupilha-gourmet/pt/buffet/buffet.html">Buffet</a></li>
                <li><a href="/farroupilha-gourmet/pt/churrasco/churrasco.html">Churrasco</a></li>
                <li><a href="/farroupilha-gourmet/pt/colonial/colonial.html">Comida Colonial</a></li>
                <li><a href="/farroupilha-gourmet/pt/frutosdomar/frutosdomar.html">Frutos do Mar</a></li>
                <li><a href="/farroupilha-gourmet/pt/lancherias/lancherias.html">Lancherias</a></li>
                <li><a href="/farroupilha-gourmet/pt/paesdocescafes/paesdocescafes.html">Pães, Doces e Cafés</a></li>
                <li><a href="/farroupilha-gourmet/pt/pizzarias/pizzarias.html">Pizzarias</a></li>
                <li><a href="/farroupilha-gourmet/pt/sorveterias/sorveterias.html">Sorveterias</a></li></li>
            </ul>
            <ul>
                <li class="bold">ONDE BEBER</li>
                <li><a href="/farroupilha-gourmet/pt/barespubsgardens/barespubsgardens.html">Bares, Pubs e Gardens</a></li>
                <li><a href="/farroupilha-gourmet/pt/vinicolasadegas/vinicolasadegas.html">Vinícolas e Adegas</a></li>
            </ul>
            <ul>
                <li class="bold"><a href="/farroupilha-gourmet/pt/saibamais.php">SAIBA MAIS</a></li>
            </ul>
        </div>
    </div>
</body>
</html>