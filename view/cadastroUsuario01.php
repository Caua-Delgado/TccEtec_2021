<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FazerLogin</title>

    </head>

        <link rel="stylesheet" href="CSS/layoutLogin.css">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
         <!-- Carregando CSS do bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <!-- Carregando JS do bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <!-- Carregando CSS do projeto  -->
        <link rel="stylesheet" href="view/CSS/layout.css">

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
        <br><br>

        <div class="container02">

            <br>
            <p class="titulo">Fazer Cadastro</p>
            <br>

            <div class="col">

                <form action="index.php?classe=usuarioController&metodo=cadastrar" method="post">

                    <span class="texto">Digite abaixo seu e-mail:</span> 
                    <input type="email" id="email" name="email" placeholder="E-mail" class="w3-input" required>

                    <br>

                    <span class="texto">Digite abaixo sua data de nascimento:</span> 
                    <input type="date" id="dataNascimento" name="dataNascimento" class="w3-input" required>

                    <br>

                    <span class="texto">Digite abaixo seu telefone:</span> 
                    <input type="tel" id="telefone" name="telefone" class="w3-input" required>

                    <br>

                    <span class="texto">Digite abaixo seu nome:</span> 
                    <input type="text" id="nome" name="nome" class="w3-input" required>

                    <br>

                    <span class="texto">Digite abaixo a senha:</span> 
                    <input type="password" id="senha" name="senha" placeholder="Senha" class="w3-input" required>
                    <input type="checkbox" onclick="show()">Mostrar a senha
                    
                    <br><br>

                    <input type="submit" value="Cadastrar" class="btn">

                </form>
            </div>

            <br>

        </div>

        <br><br>

    </body>

</html>