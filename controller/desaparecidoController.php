<?php 

    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);

    class DesaparecidoController
    {

        function abrir_cadastro1()
        {
            include_once "view/cadastroDesaparecido1.php";
        }

        function tratar_img()
        {
            if (isset($_FILES['imagem']))
            {
                $this->verificar_logado();
                
                $extensao = strtolower (substr($_FILES['imagem']['name'], -4));
                
                $novo_nome = md5(uniqid(rand(), true)) . $extensao;
                $diretorio = "upload/";
                
                move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $novo_nome);
                
                include_once "view/cadastroDesaparecido2.php";
            };              
        }

        function cadastrar()
        {
            $this->verificar_logado();

            include "model/desaparecido.php";
            $des = new Desaparecido();

            $des->nome                  = $_POST["nome"];
            $des->dataNascimento        = $_POST["dataNascimento"];
            $des->caracteristicas       = $_POST["caracteristicas"];
            $des->imagem                = $_POST["nomeImagem"];
            $des->dataDesaparecimento   = $_POST["dataDesaparecimento"];
            $des->codUsuario            = $_SESSION["cod_logado"];
            $des->ultimaLocalizacao     = $_POST["ultimaLocalizacao"];

            
            $des->cadastrar();
            
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
                        window.location='index.php?classe=desaparecidoController&metodo=abrir_cadastro1';
                    }
                });
                </script>";

        }

        function abrir_consulta()
        {
            $this->verificar_logado();
            include_once "model/desaparecido.php";
            $des = new Desaparecido();
            $dados = $des->consultar();
            include_once "view/consultaDesaparecido.php";
        }

        function verificar_logado()
        {
            session_start();
            if(!isset($_SESSION["cod_logado"]))
            {
                //voltar para o login
                header("location:index.php?classe=usuarioController&metodo=abrir_login");
            }
        }

        function consultaEspecifica()
        {
            $this->verificar_logado();
            include_once "model/desaparecido.php";
            $des = new Desaparecido();
            $dados = $des->consultaEspecifica();
            include_once "view/consultaDesaparecido02.php";
        }

        function excluir()
        {
            $this->verificar_logado();

            $imagem = $_POST["imagem"];

            if(is_file("upload/$imagem"))
            unlink("upload/$imagem");

            include "model/informacoes.php";

            $infos = new Informacoes();

            $infos->codDesaparecido  = $_POST["codDesaparecido"];

            $infos->excluir();
            
            include "model/desaparecido.php";

            $des = new Desaparecido();

            $des->codDesaparecido  = $_POST["codDesaparecido"];

            $des->excluir();

            echo "<body></body>
                <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css'>
                <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js'></script>
                <script src='//cdn.jsdelivr.net/npm/sweetalert2@10'></script>
                <script>
                Swal.fire({
                    title:'Obrigado por ter apostado em nossa plataforma! Esperamos ter ajudado.',
                    type:'success',
                    icon:'success',
                    showConfirmButton:false,
                    timer:2000,
                    onClose: () => {
                        window.location='index.php?classe=desaparecidoController&metodo=consultaEspecifica';
                    }
                });
                </script>";
        }



    }

?>