<?php 
    class Desaparecido
    {

        //atributos (mesmos atributos da tabela do BD)
        private $codDesaparecido;
        private $nome;
        private $dataNascimento;
        private $caracteristicas;
        private $imagem;
        private $dataDesaparecimento;
        private $codUsuario;

        //get e set 
        function __get($atributo) { return $this->$atributo; }
        function __set($atributo, $valor) { $this->$atributo = $valor; }

        function __construct() //será executado automaticamente ao usar esta classe
        {
            include_once "conexao.php"; //incluindo classe de conexão
        }


        //método cadastrar
        function cadastrar()
        {
            $con = Conexao::conectar(); //carregar a conexão

            $cmd = $con->prepare("INSERT INTO desaparecido
            (nome, dataNascimento, caracteristicas, imagem, dataDesaparecimento, codUsuario, ultimaLocalizacao) VALUES (:nome, :dataNascimento, :caracteristicas, :imagem, :dataDesaparecimento, :codUsuario, :ultimaLocalizacao)");
            //enviando valores para os parâmetros
            $cmd->bindParam(":nome",                    $this->nome);
            $cmd->bindParam(":dataNascimento",          $this->dataNascimento);
            $cmd->bindParam(":caracteristicas",         $this->caracteristicas);
            $cmd->bindParam(":imagem",                  $this->imagem);
            $cmd->bindParam(":dataDesaparecimento",     $this->dataDesaparecimento);
            $cmd->bindParam(":codUsuario",              $this->codUsuario);
            $cmd->bindParam(":ultimaLocalizacao",       $this->ultimaLocalizacao);
            
            $cmd->execute();//executando o comando
        }

        function consultar()
        {
            $con = Conexao::conectar();
            
            $cmd = $con->prepare("SELECT * FROM desaparecido");

            $cmd->execute();

            $desaparecidos =  $cmd->fetchAll(PDO::FETCH_OBJ);

            $array = [];

            foreach ($desaparecidos as $desaparecido)
            {
                $cmd02 = $con->prepare("SELECT * FROM informacoes where codDesaparecido = :codDesaparecido");

                $cmd02->bindParam(":codDesaparecido",  $desaparecido->codDesaparecido);

                $cmd02->execute();

                $infos = $cmd02->fetchAll(PDO::FETCH_OBJ);
                
                $desaparecido->infos = $infos;

                $array[] = $desaparecido;

            }

            return $array;
    
        }

        function consultaEspecifica()
        {
            $con = Conexao::conectar();
            
            $cmd = $con->prepare("SELECT * FROM desaparecido 
            WHERE codUsuario = :codUsuario");

            $cmd->bindParam(":codUsuario", $_SESSION["cod_logado"]);

            $cmd->execute();

            $desaparecidos =  $cmd->fetchAll(PDO::FETCH_OBJ);

            $array = [];

            foreach ($desaparecidos as $desaparecido)
            {
                $cmd02 = $con->prepare("SELECT * FROM informacoes where codDesaparecido = :codDesaparecido");

                $cmd02->bindParam(":codDesaparecido",  $desaparecido->codDesaparecido);

                $cmd02->execute();

                $infos = $cmd02->fetchAll(PDO::FETCH_OBJ);
                
                $desaparecido->infos = $infos;

                $array[] = $desaparecido;

            }

            return $array;
        }

        function excluir()
        {
            $con = Conexao::conectar(); //carregar a conexão

            $cmd = $con->prepare("DELETE FROM desaparecido 
            WHERE codDesaparecido = :codDesaparecido"); //enviando valor para o parâmetro

            $cmd->bindParam(":codDesaparecido", $this->codDesaparecido); //valor do parâmetro
    
            $cmd->execute(); //executando o comando
        }


    }

?>