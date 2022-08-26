<?php

    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);

    class InformacoesController
    {
        
        function cadastrar()
        {
            include "model/informacoes.php";
            $info = new Informacoes();

            $info->dataInformacao       = $_POST["dataInformacao"];
            $info->informacao           = $_POST["informacao"];
            $info->codUsuario           = $_POST["codUsuario"];
            $info->codDesaparecido      = $_POST["codDesaparecido"];
            
            $info->cadastrar();

            echo "<body></body>
                <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css'>
                <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js'></script>
                <script src='//cdn.jsdelivr.net/npm/sweetalert2@10'></script>
                <script>
                Swal.fire({
                    title:'Dados gravados com sucesso!',
                    type:'success',
                    icon:'success',
                    showConfirmButton:false,
                    timer:2000,
                    onClose: () => {
                        window.location='index.php?classe=desaparecidoController&metodo=abrir_consulta';
                    }
                });
                </script>";

        }

    }

?>