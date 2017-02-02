<?php 

include_once "Animal.class.php";

class Ave extends Animal
{
	private $corPena;

	public function locomover(){
    	echo "<p>Voando...</p>";
    }
    
    public function alimentar(){
    	echo "<p>Comendo Frutas...</p>";	
    }

    public function emitirSom(){
    	echo "<p>Som de Ave...</p>";
    }

    public function fazerNinho(){
    	echo "<p>Construiu um ninho...</p>";
    }

    function getCorPena(){
        return $this->corPena;
    }

    function setCorPena($corPena){
        $this->corPena = $corPena;

        return $this;
    }
}