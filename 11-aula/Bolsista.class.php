<?php 
include_once "Aluno.class.php";
/**
 * Bolsista
 */
class Bolsista extends Aluno
{
    private $bolsa;

    public function renovarBolsa(){
    	echo "<p>Bolsa renovada</p>";
    }

    public function pagarMensalidade(){
        echo "<p>{$this->nome} é Bolsista, paga com desconto. </p>";
    }

    public function getBolsa(){
        return $this->bolsa;
    }

    public function setBolsa($bolsa){
        $this->bolsa = $bolsa;

        return $this;
    }
}