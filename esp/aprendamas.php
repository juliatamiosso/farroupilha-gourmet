<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/farroupilha-gourmet/css/estilosaibamais.css">
    <title>Aprenda Más | Farroupilha Gourmet</title>
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
        <a class="imagem" href="/farroupilha-gourmet/esp/home.html"><img src="/farroupilha-gourmet/img/logo.png" class="logo"></a>
    </nav>
    <main>
        <h1 class="titulo">Aprenda Más</h1>
        <a class="fonte" onclick="history.back()">↩ Volver</a>
    </main>
    <div class="principal">
        <hr class="linha-header-principal">
        <br>
        <div class="textoinfos" style="width: 82%;">
            <h2>Información turística</h2>
            <p class="paragrafo">Descubre dónde obtener información presencial sobre el turismo en Farroupilha:</p>
            <div class="informacoes">
                <div class="infocomtur">
                    <h5>Consejo Municipal de Turismo (COMTUR) - Ayuntamiento</h5>
                    <p style="margin-top: 1em;"><span>Dirección:</span> Praça da Emancipação, s/n - Centro, Farroupilha</p>
                    <p><span>Teléfono:</span> (54) 2131-5308</p>
                    <p><span>E-mail:</span> <a class="linkemail" href="mailto:turismo@farroupilha.rs.gov.br">turismo@farroupilha.rs.gov.br</a></p>
                    <p><span>Atención:</span> Lunes a viernes, 9h a 16h</p>
                </div>
                <div class="infocat">
                    <h5>Centro de Atención al Turista (CAT) - Casa de la Cultura</h5>
                    <p style="margin-top: 1em;"><span>Dirección:</span> Rua da República, 172 - Centro, Farroupilha</p>
                    <p><span>Teléfono:</span> (54) 3261-6995</p>
                    <p><span>E-mail:</span> <a class="linkemail" href="mailto:casadecultura@farroupilha.rs.gov.br">casadecultura@farroupilha.rs.gov.br</a></p>
                    <p><span>Atención:</span> Lunes a viernes, 8h a 12h y 13h a 17h</p>
                </div>
            </div>     
        </div>
        <br>
        <div class="divformulario">
            <h2>Contáctanos</h2>
            <p>¡Tu opinión es muy importante! Deja un comentario, sugiere un cambio, envía una duda...</p>
            <form action="../dao/criaMensagemESP.php" method="post" style="width: 75%; margin: 0 auto;">
                <div class="formulario">
                    <div class="row mb-3">
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nombre" required oninvalid="this.setCustomValidity('Escribe tu nombre.')" oninput="this.setCustomValidity('')">
                        </div>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Teléfono" required oninvalid="this.setCustomValidity('Escribe tu teléfono.')" oninput="this.setCustomValidity('')">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="E-mail" required oninvalid="this.setCustomValidity('Escribe tu e-mail.')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="form-group mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="mensagem" rows="4" placeholder="Escribe tu mensaje..." required oninvalid="this.setCustomValidity('Escribe tu mensaje.')" oninput="this.setCustomValidity('')"></textarea>
                    </div>
                    <button type="submit">Enviar</button>
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
            <p>Desarrollado por Júlia Cabral Tamiosso<br>IFRS Farroupilha - 2024</p>
        </div>
        <div class="inside">
            <ul>
                <li class="bold"><a href="/farroupilha-gourmet/esp/home.html">INICIO</a></li>
            </ul>
            <ul>
                <li class="bold"><a href="/farroupilha-gourmet/esp/ciudad.html">LA CIUDAD</a></li>
            </ul>
            <ul>
                <li class="bold">DÓNDE COMER</li>
                <li><a href="/farroupilha-gourmet/esp/alacarta/alacarta.html">A La Carta</a></li>
                <li><a href="/farroupilha-gourmet/esp/buffet/buffet.html">Buffet</a></li>
                <li><a href="/farroupilha-gourmet/esp/parrilla/parrilla.html">Parrilla</a></li>
                <li><a href="/farroupilha-gourmet/esp/colonial/colonial.html">Comida Colonial</a></li>
                <li><a href="/farroupilha-gourmet/esp/marisco/marisco.html">Marisco</a></li>
                <li><a href="/farroupilha-gourmet/esp/loncherias/loncherias.html">Loncherías</a></li>
                <li><a href="/farroupilha-gourmet/esp/panesdulcescafes/panesdulcescafes.html">Panes, Dulces y Cafes</a></li>
                <li><a href="/farroupilha-gourmet/esp/pizzarias/pizzarias.html">Pizzarías</a>
                <li><a href="/farroupilha-gourmet/esp/heladerias/heladerias.html">Heladerías</a></li></li>
            </ul>
            <ul>
                <li class="bold">DÓNDE BEBER</li>
                <li><a href="/farroupilha-gourmet/esp/barespubsgardens/barespubsgardens.html">Bares, Pubs y Gardens</a></li>
                <li><a href="/farroupilha-gourmet/esp/bodegas/bodegas.html">Bodegas</a></li>
            </ul>
            <ul>
                <li class="bold"><a href="/farroupilha-gourmet/esp/aprendamas.php">APRENDA MÁS</a></li>
            </ul>
        </div>
    </div>
</body>
</html>