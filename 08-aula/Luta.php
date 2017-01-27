<?php 
/**
 * summary
 */
require_once "Lutador.php";
class Luta
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta($l1, $l2){
    	if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2) ){
    		$this->aprovada = true;
    		$this->desafiado = $l1;
    		$this->desafiante = $l2;
    	} else{
    		$this->aprovada = false;
    		$this->desafiado = null;
    		$this->desafiante = null;
    	} 
    }
    
    public function lutar(){
    	if ($this->aprovada){
    		$this->desafiado->apresentar();
    		$this->desafiante->apresentar();
    		$vencedor = rand(0,2);
	    	switch ($vencedor){
	    		case 0: //Empate
	    			echo "<br> Empate";
	    			$this->desafiado->empatarLuta();
	    			$this->desafiante->empatarLuta();
	    			break;
	    		case 1: //Desafiado    			
	    			echo "<p>". $this->desafiado->getNome() ." venceu a luta";
	    			$this->desafiado->ganharLuta();
	    			$this->desafiante->perderLuta();
	    			break;
	    		case 2: //Desafiante
	    			echo "<p>". $this->desafiante->getNome() ." venceu a luta";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();

	    			break;
	    	}
    	}else{
    		echo "luta não pode acontecer";
    	}
    }

    
    public function getDesafiado(){
        return $this->desafiado;
    }

    private function setDesafiado($desafiado){
        $this->desafiado = $desafiado;

        return $this;
    }
    
    public function getDesafiante(){
        return $this->desafiante;
    }

    private function setDesafiante($desafiante){
        $this->desafiante = $desafiante;

        return $this;
    }

    public function getRounds(){
        return $this->rounds;
    }

    private function setRounds($rounds){
        $this->rounds = $rounds;

        return $this;
    }

    public function getAprovada(){
        return $this->aprovada;
    }

    private function setAprovada($aprovada){
        $this->aprovada = $aprovada;

        return $this;
    }
}