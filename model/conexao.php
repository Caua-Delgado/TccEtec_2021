<?php

    class Conexao
    {

        static function Conectar()
        {
            // iniciando a conexão com mysql e o bd do 000WEBHOST
            //$con = new PDO("mysql:host=localhost;dbname=id16343882_bdtcc","id16343882_root","Y1O419co#8LQwpFn"); 

            //iniciando a conexão com mysql e o bd phpMyadmin
            //$con = new PDO("mysql:host=localhost;dbname=dbtcc","phpmyadmin","****"); 

            //iniciando a conexão com mysql e o bd
            $con = new PDO("mysql:host=localhost;dbname=dbtcc","root","root"); 


            //ativando exibição de erros do PDO
            $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
           
            return $con; //retornando a conexão com o BD
            

        }

    }

?>