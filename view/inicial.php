<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
</head>

<!-- Carregando CSS do bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<!-- Carregando JS do bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


<!-- Carregando CSS do projeto  -->
<link rel="stylesheet" href="view/CSS/layoutinicial.css">


<body class="fundo">

<?php include_once "topo.php";?>

    <br>
    <div class="janelainicial">
        <div class="textoinicial">

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">


                        <div class="carousel-inner">

                            <div class="carousel-item">

                            <img src="view/imagens/slide1.png" class="d-block w-100" alt="1">

                            </div>

                            <div class="carousel-item active">

                            <img src="view/imagens/slide2.png" class="d-block w-100" alt="2">

                            </div>

                            <div class="carousel-item">

                            <img src="view/imagens/slide3.png" class="d-block w-100" alt="3">

                            </div>

                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">

                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                            <span class="visually-hidden">Previous</span>

                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">

                            <span class="carousel-control-next-icon" aria-hidden="true"></span>

                            <span class="visually-hidden">Next</span>

                        </button>

                    </div>



            <div class="texto">
                <br>
            <p>No Brasil existem mais de 82 mil pessoas desaparecidas. O desaparecimento não é considerado um crime, 

            porém tem que ser realizado um boletim de ocorrência, e só no caso de suspeita de um crime ou o desaparecido for uma 

            criança de até 12 anos, ou uma pessoa considerada incapaz, haverá uma investigação.</p>



            <p>Viver com a ausência de um ente querido é uma realidade dolorosa, enfrentada pelos familiares de milhares de pessoas 

            desaparecidas no Brasil. Vivem anos, e até mesmo décadas, com a incerteza do destino ou paradeiro de seu ente querido. 

            Muitos familiares acabam enfrentado experiencias traumatizantes, desamparo, incompreensão e riscos, nas buscas exaustivas 

            por respostas, porém acabam encontrando pouco apoio.</p>



            <p>Atualmente as pessoas usufruem das redes sociais para terem um auxílio nas buscas por entes queridos.Porém essa 

            alternativa para auxiliar nas buscas não foi feita para esse fim, sendo assim ela pode acabar acarretando alguns problemas, 

            como por exemplo o fato de a foto de uma pessoa continuar sendo divulgada como desaparecida, mesmo depois de achada.</p>
            </div>


        </div>
    </div>
    <br>
    <?php include_once "rodape.php";?>

</body>

</html>