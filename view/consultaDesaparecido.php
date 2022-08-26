<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Desaparecido</title>
</head>

<!-- Carregando CSS do bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<!-- Carregando JS do bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Carregando CSS do projeto  -->
<link rel="stylesheet" href="view/CSS/layout.css">

<!--Font Awesome-->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<!--Data Tables-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
<?php 
    include_once "topo2.php";

    foreach($dados as $value){
?>

<body style='background:#c0c0c0'>
    
    <center>
    <div class="container">
        <div class="row-1">
            <div class="col-7">
                <div class="card mt-3">

                    <div class="card-header text-white" style='background:#1c1c1c'>
                        <center><?php echo $value->nome?></center>
                    </div>

                    <div class="card-body table-responsive">
                        <table class="table table-striped" id="tabela">
                            
                            <?php
                                $dataNascimento = date('d/m/Y', strtotime($value->dataNascimento));
                                $dataDesaparecimento = date('d/m/Y', strtotime($value->dataDesaparecimento));

                                $dataAtual = date('d/m/Y');
                                $codUsuario = $_SESSION["cod_logado"];

                                echo"
                                    <tr>
                                        <td>
                                            <b>Data de nascimento:</b><br> $dataNascimento<br><br>
                                            <b>Caracteristicas:</b><br> $value->caracteristicas<br><br>
                                            <b>Data do desaparecimento:</b><br> $dataDesaparecimento<br><br>
                                            <b>Ultima Localização:</b><br> $value->ultimaLocalizacao<br>
                                        </td>
                                        <td><center><img src='upload/$value->imagem' alt='' width='300' height='auto'></center></td> 
                                    </tr>

                                    <tr class='card-header text-white' style='background:#1c1c1c'>
                                        <td><center><b>Informações:</b></center></td>
                                        <td><center><b>Data da postagem:</b></center></td>
                                    </tr>
                                ";

                                foreach($value->infos as $info)  
                                {
                                    echo"
                                        <tr>
                                            <td>$info->informacao<br></td>
                                            <td><center>$info->dataInformacao</center></td>
                                        </tr>
                                    ";
                                }

                                echo"
                                
                                    <tr>
                                    
                                        <td class='card-header text-white' style='background:#1c1c1c'>
                                            <center>
                                            <form action='index.php?classe=informacoesController&metodo=cadastrar' method='post'>
                                                <input type='hidden' id='dataInformacao' name='dataInformacao' value='$dataAtual'>

                                                <input type='hidden' id='codUsuario' name='codUsuario' value='$codUsuario'>

                                                <input type='hidden' id='codDesaparecido' name='codDesaparecido' value='$value->codDesaparecido'>

                                                <input type='text' id='informacao' name='informacao' placeholder='Digite sua informação' required>
                                            </center>                                       
                                        </td>
                                        

                                        <td class='card-header text-white' style='background:#1c1c1c'>  
                                            <center>      
                                                <button type='submit' class='btn btn-outline-success' >
                                                Enviar&nbsp;<i class='fas fa-arrow-square-right'></i>
                                                </button>
                                            </center>
                                            </form>
                                        </td>    
                                    </tr>
                                    
                                ";
                            ?>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </center>

</body>

<?php 
    } 
    echo "<br>";
    include_once "rodape.php";
?>

</html>

