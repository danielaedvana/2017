<?php
    //session_start();
    include "conexao.php";

    $tarefas = array();
    $errosValidacao = array();
    $houveErros = false;

    if (count($_POST) > 0) {
        if (!isset($_POST["titulo"]) || $_POST["titulo"] == ""){
            $errosValidacao["titulo"] = "Campo titulo obrigatorio!";
            $houveErros = true;     
         }
     
         if (isset($_POST["concluida"])) {
             $errosValidacao["concluida"] = "Não é possível adicionar uma tarefa já concluída!";
             $houveErros = true;
         }
     
         if (!$houveErros) {
             $data = ["titulo" => $_POST["titulo"],
                    "descricao" => $_POST["descricao"],
                    "concluida" => $_POST["concluida"]];
             
             //$_SESSION["tarefas"][] = $data;
             cadastrarTarefa($db, $data);
     
             header("Location: minhastarefas.php");
             die();
         }
    }

    /*if (isset($_SESSION["tarefas"])) {
       $tarefas = $_SESSION["tarefas"];
    }*/

    $tarefas = listarTodasTarefas($db);

    include "template.php";
?>
