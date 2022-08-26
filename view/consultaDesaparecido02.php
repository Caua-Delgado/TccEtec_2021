<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Desaparecido</title>
</head>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="view/CSS/layout.css">

<!-- Carregando CSS do bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<!-- Carregando JS do bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!-- Carregando CSS do projeto  -->
<link rel="stylesheet" href="view/CSS/layout.css">

<!--Font Awesome-->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<!--Data Tables-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    
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
                                    <tr class='card-header text-white' style='background:#1c1c1c'>
                                        <td>
                                            <form action='index.php?classe=desaparecidoController&metodo=excluir' method='post'>

                                                <input type='hidden' name='imagem' id='imagem' value='$value->imagem'>

                                                <input type='hidden' name='codDesaparecido' id='codDesaparecido' value='$value->codDesaparecido'>
                                         
                                                <button type='submit' class='btn btn-outline-success'>
                                                    Encontrado&nbsp;&nbsp;<i class='fas fa-thumbs-up'></i>
                                                </button>
                                            </form>
                                        </td>

                                        <td>
                                            <form action='index.php?classe=informacoesController&metodo=cadastrar' method='post'>
                                                <input type='hidden' id='dataInformacao' name='dataInformacao' value='$dataAtual'>

                                                <input type='hidden' id='codUsuario' name='codUsuario' value='$codUsuario'>

                                                <input type='hidden' id='codDesaparecido' name='codDesaparecido' value='$value->codDesaparecido'>

                                                <input type='text' id='informacao' name='informacao' placeholder='Digite sua informação' required>
                                                
                                                <button type='submit' class='btn btn-outline-success' >
                                                Enviar&nbsp;<i class='fas fa-arrow-square-right'></i>
                                                </button>
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

