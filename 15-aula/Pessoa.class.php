<?php 

abstract class Pessoa
{
    protected $nome;
    protected $Idade;
    protected $sexo;
    protected $experiencia;

    function __construct($nome, $idade, $sexo){
    	$this->nome = $nome;
    	$this->idade = $idade;
    	$this->sexo = $sexo;
    	$this->experiencia = 0;
    }
    protected function ganharExp(){
    	$this->experiencia += $n;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;

        return $this;
    }

    public function getIdade(){
        return $this->Idade;
    }

    public function setIdade($Idade){
        $this->Idade = $Idade;

        return $this;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;

        return $this;
    }

    public function getExperiencia(){
        return $this->experiencia;
    }

    public function setExperiencia($experiencia){
        $this->experiencia = $experiencia;

        return $this;
    }
}