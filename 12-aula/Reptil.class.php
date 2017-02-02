<?php 

include_once "Animal.class.php";

class Reptil extends Animal
{
	private $corEscama;

	public function locomover(){
		echo "<p>Rastejando</p>";
	}
    
    public function alimentar(){
    	echo "<p>Comendo vegetais</p>";	
    }

    public function emitirSom(){
    	echo "<p>Som de Réptil</p>";	
    }

    function getCorEscama(){
        return $this->corEscama;
    }

    function setCorEscama($corEscama){
        $this->corEscama = $corEscama;

        return $this;
    }
}

