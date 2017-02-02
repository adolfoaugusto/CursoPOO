<?php 

abstract class Animal
{
    protected $peso;
    protected $idade;
    protected $membros;

    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();

    function getPeso(){
        return $this->peso;
    }

    function setPeso($peso){
        $this->peso = $peso;

        return $this;
    }

    function getIdade(){
        return $this->idade;
    }

    function setIdade($idade){
        $this->idade = $idade;

        return $this;
    }

    function getMembros(){
        return $this->membros;
    }

    function setMembros($membros){
        $this->membros = $membros;

        return $this;
    }
}