<?php
    //Criando o objeto conexao
    $user = "systarefas";
    $pass = "systarefas";
    $db = null;
    try{
        $db = new PDO("mysql:host=localhost;dbname=minhastarefas", $user, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        print "Error ao conectar no banco de dados! " . $e->getMessage();
        die();
    }

    function cadastrarTarefa($db, $tarefas){
        $statementHandle = $db->prepare("INSERT INTO tarefas (titulo,descricao,concluida) VALUES (?, ?, ?)");
        $statementHandle->bindParam(1, $tarefas["titulo"]);
        $statementHandle->bindParam(2, $tarefas["descricao"]);
        $statementHandle->bindParam(3, $tarefas["concluida"]);
        $statementHandle->execute();
    }

    function listarTodasTarefas($db) {
        $statementHandle = $db->prepare("SELECT * FROM tarefas");
        $statementHandle->execute();
        $result = $statementHandle->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
?>