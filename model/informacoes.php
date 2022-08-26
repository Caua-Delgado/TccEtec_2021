<?php

    class Informacoes
    {
        //atributos (mesmos atributos da tabela do BD)
        private $codInformacao;
        private $dataInformacao;
        private $informacao;
        private $codUsuario;
        private $codDesaparecido;
        
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

            $cmd = $con->prepare("INSERT INTO informacoes
            (dataInformacao, informacao, codUsuario, codDesaparecido) VALUES (:dataInformacao, :informacao, :codUsuario, :codDesaparecido)");
            //enviando valores para os parâmetros
            $cmd->bindParam(":dataInformacao",          $this->dataInformacao);
            $cmd->bindParam(":informacao",              $this->informacao);
            $cmd->bindParam(":codUsuario",              $this->codUsuario);
            $cmd->bindParam(":codDesaparecido",         $this->codDesaparecido);
            
            $cmd->execute();//executando o comando
        }

        function excluir()
        {
            $con = Conexao::conectar(); //carregar a conexão
        
            $cmd = $con->prepare("DELETE FROM informacoes WHERE codDesaparecido = :codDesaparecido"); //enviando valor para o parâmetro
        
            $cmd->bindParam(":codDesaparecido", $this->codDesaparecido); //valor do parâmetro
        
            $cmd->execute(); //executando o comando
        }

    }

?>