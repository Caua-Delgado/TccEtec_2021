<?php

    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);

    class UsuarioController
    {
        function abrir_cadastro()
        {
            include_once "view/cadastroUsuario.php";
        }

        function cadastrar()
        {
            include "model/usuario.php";
            $usu = new Usuario();

            $usu->nome              = $_POST["nome"];
            $usu->email             = $_POST["email"];
            $usu->senha             = hash("sha256",$_POST["senha"]);
            $usu->dataNascimento    = $_POST["dataNascimento"];
            $usu->telefone          = $_POST["telefone"];
            
            $usu->cadastrar();

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
                        window.location='index.php?classe=usuarioController&metodo=abrir_login';
                    }
                });
                </script>";    
            
        }

        function excluir()
        {
            $this->verificar_logado();
            include "model/usuario.php";

            $usu = new Usuario();
            $usu->codusuario = $_SESSION["cod_logado"];
            $usu->excluir();

            //direcionar para a página de cadastro
            echo "<body></body>
                <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css'>
                <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js'></script>
                <script src='//cdn.jsdelivr.net/npm/sweetalert2@10'></script>
                <script>
                Swal.fire({
                    title:'Conta excluída com sucesso!',
                    type:'error',
                    icon:'error',
                    showConfirmButton:false,
                    timer:2000,
                    onClose: () => {
                        window.location='index.php?classe=usuarioController&metodo=abrir_cadastro';
                    }
                });
                </script>";    
        }

        function editar()
        {
            $this->verificar_logado();            
            include "model/usuario.php";
            
            $usu = new Usuario();
            $usu->codusuario = $_SESSION["cod_logado"];
            $dados = $usu->retornar();
            
            //exibir a tela de edição dos dados
            include_once "view/usuario.php";
        }

        function atualizar()
        {
            $this->verificar_logado();
            include "model/usuario.php";
            $usu = new Usuario();

            $usu->nome              = $_POST["nome"];
            $usu->email             = $_POST["email"];
            $usu->senha             = hash("sha256",$_POST["senha"]);
            $usu->dataNascimento    = $_POST["dataNascimento"];
            $usu->telefone          = $_POST["telefone"];
            $usu->codusuario        = $_POST["codusuario"];

            $usu->atualizar();

            echo "<body></body>
                <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css'>
                <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js'></script>
                <script src='//cdn.jsdelivr.net/npm/sweetalert2@10'></script>
                <script>
                Swal.fire({
                    title:'Dados alterados com sucesso!',
                    type:'success',
                    icon:'success',
                    showConfirmButton:false,
                    timer:2000,
                    onClose: () => {
                        window.location='index.php?classe=usuarioController&metodo=editar';
                    }
                });
                </script>";    
        }


        function abrir_login(){
            include_once "view/logarUsuario.php";
        }

        function login(){
            include_once "model/usuario.php";
            $usu = new Usuario();

            $usu->email = $_POST["email"];
            $usu->senha = hash("sha256",$_POST["senha"]);

            $dados = $usu->login();

            if(empty($dados)) //está vazio?
            {
                echo "<body></body>
                <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css'>
                <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js'></script>
                <script src='//cdn.jsdelivr.net/npm/sweetalert2@10'></script>
                <script>
                Swal.fire({
                    title:'Usuário ou senha inválido!',
                    type:'error',
                    icon:'error',
                    showConfirmButton:false,
                    timer:2000,
                    onClose: () => {
                        window.location='index.php?classe=usuarioController&metodo=abrir_login';
                    }
                });
                </script>";    
            }
            else
            {
                session_start();//iniciar a sessão

                session_regenerate_id(true);//apaga a sessão antiga
                $_SESSION["cod_logado"]     = $dados->codUsuario;
                $_SESSION["nome_logado"]    = $dados->nome;
                
                //direcionar para a página principal
                echo "<body></body>
                <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css'>
                <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js'></script>
                <script src='//cdn.jsdelivr.net/npm/sweetalert2@10'></script>
                <script>
                Swal.fire({
                    title:'Logado com sucesso!',
                    type:'success',
                    icon:'success',
                    showConfirmButton:false,
                    timer:2000,
                    onClose: () => {
                        window.location='index.php?classe=desaparecidoController&metodo=abrir_consulta';
                    }
                });
                </script>";     
                //header("location:index.php?classe=desaparecidoController&metodo=abrir_consulta");
            }
        }

        function sair() {
            session_start();
            session_destroy();//excluir tudo
            $this->abrir_login();
        }

        function verificar_logado() {
            session_start();
            if(!isset($_SESSION["cod_logado"]))//não existe a sessão
            {
                //voltar para o login
                header("location:index.php?classe=usuarioController&metodo=abrir_login");
            }
        }



    }
?>