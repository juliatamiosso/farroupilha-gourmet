<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/farroupilha-gourmet/pt/css/estilocidade.css">
    <title>Saiba Mais | Farroupilha Gourmet</title>
    <link rel="icon" href="/farroupilha-gourmet/img/logo.png">
</head>
<body>
    <header class="topo">
        <div class="conteudo">
            <ul>
                <li><a class="bandeira" id="bra" href="/farroupilha-gourmet/pt/cidade/saibamais.php" alt="portuguese" title="Português"><img src="/farroupilha-gourmet/img/brasil.jpg" id="imgbandeira"></img></a></li>
                <li><a class="bandeira" id="eua" href="/farroupilha-gourmet/eng/city/learnmore.php" alt="english" title="English"><img src="/farroupilha-gourmet/img/eua.jpg" id="imgbandeira"></a></li>
                <li><a class="bandeira" id="esp" href="/farroupilha-gourmet/esp/ciudad/aprendamas.php" alt="spanish" title="Español"><img src="/farroupilha-gourmet/img/esp.jpg" id="imgbandeira"></a></li>
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

        <div class="container">
            <h2>Novo Aluno</h2>

            <form action="../dao/criaMensagem.php" method="post">  
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="telefone" class="form-control" id="telefone" name="telefone">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="./home.php" class="btn btn-secondary">Voltar</a>
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