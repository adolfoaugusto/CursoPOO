<?php  
require_once "Controlador.php";
class ControleRemoto implements Controlador
{

    private $volume;
    private $ligado;
    private $tocando;

    function __construct(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    function getVolume(){
        return $this->volume;
    }

    function setVolume($volume){
        $this->volume = $volume;

        return $this;
    }

    function getLigado(){
        return $this->ligado;
    }

    function setLigado($ligado){
        $this->ligado = $ligado;

        return $this;
    }

    function getTocando(){
        return $this->tocando;
    }

    function setTocando($tocando){
        $this->tocando = $tocando;

        return $this;
    }

    public function ligar(){
        $this->setLigado(true);
    }

    public function desligar(){
        $this->setDesligado(false);
    }
    
    public function abrirMenu(){
    	echo "<p>------------------- MENU --------------------</p>";
        echo "<br> Está Ligado? ".($this->getLigado()?"Sim":"Não");
        echo "<br> Está Tocando? ".($this->getTocando()?"Sim":"Não");
        echo "<br> Volume: ".$this->getVolume();
        for($i=0; $i <= $this->getVolume(); $i+=10){
        	echo "|";
        }
        echo "<br>";
    }

    public function fecharMenu(){
        echo("fechando Menu...");
    }

    public function maisVolume(){
    	if ($this->getLigado()) {
    		$this->setVolume($this->getVolume() + 10);
    	}else{
    		echo "<p>ERROR! Não posso aumentar o volume...</p>";
    	}
    }

    public function menosVolume(){
        if ($this->getLigado()) {
    		$this->setVolume($this->getVolume() - 10);
    	}else{
    		echo "<p>ERROR! Não posso diminuir o volume...</p>";
    	}
    }

    public function ligarMudo(){
       	if ($this->getLigado() && $this->getVolume()>0) {
    		$this->setVolume(0);
    	}
    }

    public function desligarMudo(){
        if ($this->getLigado() && $this->getVolume() == 0) {
        	$this->setVolume(50);
        }
    }

    public function play(){
        if ($this->getLigado() && !($this->getTocando() ) ) {
        	$this->setTocando(true);
        }
    }

    public function pause(){
        if ($this->getLigado() && getTocando() ) {
        	$this->setTocando(false);
        }
    }

}