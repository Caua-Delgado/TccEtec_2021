<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FazerCadastro</title>

    </head>

    <link rel="stylesheet" href="view/CSS/layout.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <!-- Carregando CSS do bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <!-- Carregando JS do bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Carregando CSS do projeto  -->
    <link rel="stylesheet" href="view/CSS/layoutcadastrar.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    
    <?php include_once "topo2.php";?>

    <body>

        <div class="fundo">
            <br>
            <div class="janelacadastro">
                <div class="containercadastro">

                    <div class="titulo">
                        <center><b class='fs-1'>2º Etapa de Cadastro</b></center>
                    </div>
                    <br>

                    <div class="container">

                        <form action="index.php?classe=desaparecidoController&metodo=cadastrar" method="post">

                            <span class="texto">Nome:</span> 
                            <input type="text" id="nome" name="nome" placeholder="nome" class="form" required>

                            <br><br>

                            <span class="texto">Data de Nascimento:</span> 
                            <input type="date" id="dataNascimento" name="dataNascimento" class="form" required>

                            <br><br>

                            <span class="texto">Caracteristicas:</span>
                            <textarea name="caracteristicas" id="caracteristicas" class="form" require placeholder="Exemplo: Cor do Cabelo, Cor da Pele, Altura e etc."></textarea> 
                            
                            <br><br>

                            <span class="texto">Data do Desaparecimento:</span> 
                            <input type="date" id="dataDesaparecimento" name="dataDesaparecimento" required class="form">

                            <br><br>

                            <span class="texto">Ultima Localização do Desaparecimento:</span> 
                            <textarea name="ultimaLocalizacao" id="ultimaLocalizacao" class="form" require placeholder="Exemplo: Rua 25 de Março, São Paulo"></textarea> 

                            <br><br>

                            <input type="hidden" name="codUsuario" value="<?php echo $_SESSION["cod_logado"];?>">

                            <input type="hidden" name="nomeImagem" value="<?php echo $novo_nome; ?>">

                            <input type="submit" value="Cadastrar Dados" class="btnlogin"> 

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "rodape.php";?>
    </body>
    

</html>

