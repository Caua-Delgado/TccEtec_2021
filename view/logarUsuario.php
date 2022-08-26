<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pagina de Login</title>

         <!-- Carregando CSS do bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <!-- Carregando JS do bootstrap -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Carregando CSS do projeto  -->
        <link rel="stylesheet" href="view/CSS/layoutlogar.css">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    </head>
<!-- script para mostrar a senha -->
    <script>
        function show() {
            var senha = document.getElementById("senha");
            if (senha.type === "password") {
                senha.type = "text";
            } else {
                senha.type = "password";
            }
        }
    </script>

    <body>
    <?php include_once "topo.php";?>
    
    
    <div class="fundo">   
        <br><br>
            <div class="janelalogin">
                <div class="containerlogin">
                        

                        <div class="titulo"><center><b class="fs-1">Fazer Login</b></center>
                        </div>
                        

                        <div class="col">

                            <form action="index.php?classe=usuarioController&metodo=login" method="post">
                                <br>
                                <span class="texto">Email cadastrado:</span>
                                <br>
                                <input type="email" id="email" name="email" placeholder="E-mail" class="form" required>

                                <br>

                                <span class="texto">Senha cadastrada:</span>
                                <br>
                                <input type="password" id="senha" name="senha" placeholder="Senha" class="form" required>
                                <br>
                                <input class="form-check-input" type="checkbox" onclick="show()"> Mostrar a senha

                                <br><br>

                                <input type="submit" value="Logar" class="btnlogin">

                            </form>
                        </div>

                </div>
            </div>
            <br><br>
    </div>
    <?php include_once "rodape.php";?>
    </body>

</html>