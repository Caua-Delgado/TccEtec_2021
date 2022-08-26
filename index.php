<?php

    if(isset($_REQUEST["classe"]) && isset($_REQUEST["metodo"]))
    {

        $classe = $_REQUEST["classe"]; 
        $metodo = $_REQUEST["metodo"];

        include_once "controller/$classe.php";
        $obj = new $classe();
        $obj->$metodo();

    } else if (isset($_REQUEST["page"])) 
    {

        $page = $_REQUEST["page"];

        include_once "view/$page.php";
        //$obj = new $page;

    } else
    {

        include_once "view/inicial.php"; //direcionar / incluir página home
        
    }

?>
