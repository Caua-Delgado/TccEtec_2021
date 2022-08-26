<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FazerLogin</title>

    </head>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="view/CSS/layout.css">

    <!-- Carregando CSS do bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Carregando JS do bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!--Data Tables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

    <!-- Carregando CSS do projeto  -->
    <link rel="stylesheet" href="view/CSS/layoutcadastrar.css"> 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <?php include_once "topo2.php";?>

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

        <div class="fundo">
        <br>
            <div class="janelacadastro">
                <div class="containercadastro">
                
                    <div class="titulo">
                    <center><b>Minha Conta</b></center>
                    </div>
                    <br>

                    <div class="container">
                        <form action="index.php?classe=usuarioController&metodo=atualizar" method="post">

                            <input type="hidden" name="codusuario" value="<?php echo $dados->codUsuario;?>">

                            <span class="texto">E-mail:</span> 
                            <input type="email" id="email" name="email" value="<?php echo $dados->email;?>" class="form" required>

                            <br><br>

                            <span class="texto">Data de Nascimento:</span> 
                            <input type="date" id="dataNascimento" name="dataNascimento" value="<?php echo $dados->dataNascimento;?>" class="form" required>

                            <br><br>

                            <span class="texto">Telefone:</span> 
                            <input type="tel" id="telefone" name="telefone" value="<?php echo $dados->telefone;?>" class="form" required>

                            <br><br>

                            <span class="texto">Nome:</span> 
                            <input type="text" id="nome" name="nome" value="<?php echo $dados->nome;?>" class="form" required>

                            <br><br>

                            <span class="texto">Nova Senha:</span> 
                            <input type="password" id="senha" name="senha" class="form" placeholder="Digite a senha" required>
                            <input class="form-check-input" type="checkbox" onclick="show()">Mostrar a senha

                            <br><br>
                            
                            <center>
                            <input type="submit" value="&nbsp;&nbsp;Editar Cadastro&nbsp;&nbsp;&nbsp;&nbsp;" class="btn btn-lg btn-warning">
                            </center>
                        </form>

                        <br>

                        <form action="index.php?classe=usuarioController&metodo=excluir" method="post">
                            <center>
                            <input type='submit' value='&nbsp;&nbsp;Excluir Cadastro&nbsp;&nbsp;' class='btn btn-lg btn-danger'>
                            </center>
                        </form> 
                        
                    </div>
                    <br>
                </div>
            </div>
            <?php include_once "rodape.php";?>
        </div>
        
    </body>

    

</html>