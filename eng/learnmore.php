<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/farroupilha-gourmet/css/estilosaibamais.css">
    <title>Learn More | Farroupilha Gourmet</title>
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
        <a class="imagem" href="/farroupilha-gourmet/eng/home.html"><img src="/farroupilha-gourmet/img/logo.png" class="logo"></a>
    </nav>
    <main>
        <h1 class="titulo">Learn More</h1>
        <a class="fonte" onclick="history.back()">↩ Back</a>
    </main>
    <div class="principal">
        <hr class="linha-header-principal">
        <br>
        <div class="textoinfos">
            <h2>Tourist information</h2>
            <p class="paragrafo">Find out where to get in-person information about tourism in Farroupilha:</p>
            <div class="informacoes">
                <div class="infocomtur">
                    <h5>Municipal Tourism Council (COMTUR) - City Hall</h5>
                    <p style="margin-top: 1em;"><span>Adress:</span> Praça da Emancipação - Centro, Farroupilha</p>
                    <p><span>Phone number:</span> (54) 2131-5308</p>
                    <p><span>E-mail:</span> <a class="linkemail" href="mailto:turismo@farroupilha.rs.gov.br">turismo@farroupilha.rs.gov.br</a></p>
                    <p><span>Hours:</span> Monday to Friday, 9 AM to 4 PM</p>
                </div>
                <div class="infocat">
                    <h5>Tourist Assistance Center (CAT) - Culture House</h5>
                    <p style="margin-top: 1em;"><span>Address:</span> Rua da República, 172 - Centro, Farroupilha</p>
                    <p><span>Phone number:</span> (54) 3261-6995</p>
                    <p><span>E-mail:</span> <a class="linkemail" href="mailto:casadecultura@farroupilha.rs.gov.br">casadecultura@farroupilha.rs.gov.br</a></p>
                    <p><span>Hours:</span> Monday to Friday, 8 AM to 12 PM and 1 PM to 5 PM</p>
                </div>
            </div>     
        </div>
        <br>
        <div class="divformulario">
            <h2>Contact us</h2>
            <p>Your opinion is very important! Leave a comment, suggest a change, ask a question...</p>
            <form action="../dao/criaMensagemENG.php" method="post" style="width: 75%; margin: 0 auto;">
                <div class="formulario">
                    <div class="row mb-3">
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Name" required oninvalid="this.setCustomValidity('Enter your name.')" oninput="this.setCustomValidity('')">
                        </div>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Phone number" required oninvalid="this.setCustomValidity('Enter your phone number.')" oninput="this.setCustomValidity('')">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="E-mail" required oninvalid="this.setCustomValidity('Enter your e-mail.')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="form-group mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="mensagem" rows="4" placeholder="Enter your message..." required oninvalid="this.setCustomValidity('Enter your message.')" oninput="this.setCustomValidity('')"></textarea>
                    </div>
                    <button type="submit">Send</button>
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
            <p>Developed by Júlia Cabral Tamiosso<br>IFRS Farroupilha - 2024</p>
        </div>
        <div class="inside">
            <ul>
                <li class="bold"><a href="/farroupilha-gourmet/eng/home.html">HOME</a></li>
            </ul>
            <ul>
                <li class="bold"><a href="/farroupilha-gourmet/eng/city.html">THE CITY</a></li>
            </ul>
            <ul>
                <li class="bold">WHERE TO EAT</li>
                <li><a href="/farroupilha-gourmet/eng/alacarte/alacarte.html">A La Carte</a></li>
                <li><a href="/farroupilha-gourmet/eng/buffet/buffet.html">Buffet</a></li>
                <li><a href="/farroupilha-gourmet/eng/barbecue/barbecue.html">Barbecue</a></li>
                <li><a href="/farroupilha-gourmet/eng/colonial/colonial.html">Colonial Food</a></li>
                <li><a href="/farroupilha-gourmet/eng/seafood/seafood.html">Seafood</a></li>
                <li><a href="/farroupilha-gourmet/eng/snackbars/snackbars.html">Snack Bars</a></li>
                <li><a href="/farroupilha-gourmet/eng/breadssweetscoffees/breadssweetscoffees.html">Breads, Sweets and Coffees</a></li>
                <li><a href="/farroupilha-gourmet/eng/pizzerias/pizzerias.html">Pizzerias</a></li>
                <li><a href="/farroupilha-gourmet/eng/icecream/icecream.html">Ice Cream</a></li></li>
            </ul>
            <ul>
                <li class="bold">WHERE TO DRINK</li>
                <li><a href="/farroupilha-gourmet/eng/barspubsgardens/barspubsgardens.html">Bars, Pubs and Gardens</a></li>
                <li><a href="/farroupilha-gourmet/eng/wineriescellars/wineriescellars.html">Wineries and Cellars</a></li>
            </ul>
            <ul>
                <li class="bold"><a href="/farroupilha-gourmet/eng/learnmore.php">LEARN MORE</a></li>
            </ul>
        </div>
    </div>
</body>
</html>