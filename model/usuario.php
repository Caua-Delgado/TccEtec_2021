<?php
class Usuario
{
    //atributos (mesmos atributos da tabela do BD)
    private $codusuario;
    private $nome;
    private $email;
    private $senha;
    private $dataNascimento;
    private $telefone;

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
        
        $cmd = $con->prepare("INSERT INTO usuario 
        (nome, email, senha, dataNascimento, telefone) VALUES (:nome, :email, :senha, :dataNascimento, :telefone)");
        //enviando valores para os parâmetros
        $cmd->bindParam(":nome",            $this->nome);
        $cmd->bindParam(":email",           $this->email);
        $cmd->bindParam(":senha",           $this->senha);
        $cmd->bindParam(":dataNascimento",  $this->dataNascimento);
        $cmd->bindParam(":telefone",        $this->telefone);
        
        $cmd->execute();//executando o comando
        
    }

    //método excluir
    function excluir()
    {
        $con = Conexao::conectar(); //carregar a conexão
        $cmd = $con->prepare("DELETE FROM usuario WHERE codusuario = :codusuario "); //enviando valor para o parâmetro
        $cmd->bindParam(":codusuario", $this->codusuario); //valor do parâmetro

        $cmd->execute(); //executando o comando
    }

    //método atualizar
    function atualizar()
    {
        $con = Conexao::conectar(); //carregar a conexão
        $cmd = $con->prepare("UPDATE usuario SET
            nome            = :nome, 
            email           = :email, 
            senha           = :senha, 
            dataNascimento  = :dataNascimento,
            telefone        = :telefone
        WHERE codusuario = :codusuario");
        //enviando valores para os parâmetros
        $cmd->bindParam(":nome",            $this->nome);
        $cmd->bindParam(":email",           $this->email);
        $cmd->bindParam(":senha",           $this->senha);
        $cmd->bindParam(":dataNascimento",  $this->dataNascimento);
        $cmd->bindParam(":telefone",        $this->telefone);
        $cmd->bindParam(":codusuario",      $this->codusuario);

        $cmd->execute();//executando o comando
    }

    //método retornar
    function retornar()
    {
        $con = Conexao::conectar();//iniciar conexão com BD
        $cmd = $con->prepare("SELECT * FROM usuario 
        WHERE codusuario = :codusuario");
        $cmd->bindParam(":codusuario", $this->codusuario);
        $cmd->execute();
    
        return $cmd->fetch(PDO::FETCH_OBJ); //retorna os dados em forma de vetor

    }

    //método logar
    function login()
    {

        $con = Conexao::conectar();//iniciar conexão com BD
        $cmd = $con->prepare("SELECT * FROM usuario 
        WHERE email = :email AND senha = :senha");
        $cmd->bindParam(":email", $this->email);
        $cmd->bindParam(":senha", $this->senha);
        
        $cmd->execute();

        return $cmd->fetch(PDO::FETCH_OBJ); //retorna os dados em forma de vetor
    }

}
?>