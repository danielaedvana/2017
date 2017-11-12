<?php
class Tarefa{

    private $id;
    private $titulo;
    private $descricao;
    private $concluida;
    
    //consutrutor
    public function __construct(){

    }

    public function setId($id){
        $this->$id = $id;
    }

    public function setTitulo($titulo){
        $this->$titulo = $titulo;
    }

    public function setDescricao($descricao){
        $this->$descricao = $descricao;
    }

    public function setPronto($concluida){
        $this->$concluida = $concluida;
    }

    public function getId(){
        return $this->$id;
    }

    public function getTitulo(){
        return $this->$titulo;
    }
        
    public function getDescricao(){
        return $this->$descricao;  
    }
        
    public function gePronto(){
        return $this->$concluida;
    }

}

?>