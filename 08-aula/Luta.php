<?php 
/**
 * summary
 */
class Luta extends ExtendsName
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function __construct(){
        
    }
    public function marcarLuta($l1, $l2){
    	if ($l1.getCategoria() = $l2.getCategoria() && $l1 =! $l2){
    		$this->setAprovado() = true;
    		$this->setDesafiado() = $l1;
    		$this->setDesafiante() = $l2;
    	} else{
    		$this->setAprovado() = false;
    		$this->setDesafiado() = null;
    		$this->setDesafiante() = null;
    		}
    	}
    }
    public function lutar(){
    	if ($this->getAprovado() = true) {
    		$this->desafiado.apresentar();
    		$this->desafiante.apresentar();
    		$this->vencedor = random(0,2);

    		case 0: //empate
    			echo "empate";
    			$this->setDesafiado().empatarLuta();
    			$this->setDesafiante().empatarLuta();
    			break;
    		case 1: //desafiado
    			$this->setDesafiado($this->ganharLuta());
    			$this->setDesafiante($this->perderLuta());
    			break;
    		case 2: //desafiante
    			$this->setDesafiante($this->ganharLuta());
    			$this->setDesafiado($this->perderLuta());
    			break;

    	}else{
    		echo "luta não pode acontecer";
    	}
    }
    
    public function getDesafiado()
    {
        return $this->desafiado;
    }

    private function _setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;

        return $this;
    }
    
    public function getDesafiante()
    {
        return $this->desafiante;
    }

    private function _setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;

        return $this;
    }

    public function getRounds()
    {
        return $this->rounds;
    }

    private function _setRounds($rounds)
    {
        $this->rounds = $rounds;

        return $this;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }

    private function _setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;

        return $this;
    }
}