<?php

class Lutador
{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas; 
    private $empates;

    public function apresentar(){
        echo "<p>---------------------</p>";
        echo "Chegou a hora! O lutador ".$this->getNome();
        echo " Veio diretamente do ".$this->getNacionalidade();
        echo " tem ". $this->getIdade() . " anos e pesa ".$this->getPeso() ." kg";
        echo "<br> Ele tem ".$this->getVitorias()." vitória(s), ";
        echo $this->getDerrotas()." derrota(s) e ".$this->getempates()." empate(s).";

    }

    public function Status(){
        echo "<p>----------------------</p>";
        echo "<p>".$this->getNome()." É um peso ".$this->getCategoria();
        echo " ele já ganhou ".$this->getVitorias(). " vezes, </br>";
        echo "perdeu ".$this->getDerrotas(). " vezes e ";
        echo "empatou ".$this->getEmpates(). " vezes.</p>";
    }

    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
    
    function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    
    public function getNome(){
        return $this->nome;
    }

    private function setNome($nome){
        $this->nome = $nome;

        return $this;
    }

    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    private function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;

        return $this;
    }

    public function getIdade(){
        return $this->idade;
    }

    private function setIdade($idade){
        $this->idade = $idade;

        return $this;
    }

    public function getAltura(){
        return $this->altura;
    }

    private function setAltura($altura){
        $this->altura = $altura;

        return $this;
    }

    public function getPeso(){
        return $this->peso;
    }

    private function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria();
    }
    
    public function getCategoria(){
        return $this->categoria;
    }

    private function setCategoria(){
        if ($this->peso < 52.2) {
            $this->categoria = "Categoria inválida";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inaválido";
        }
    }

    public function getVitorias(){
        return $this->vitorias;
    }

    private function setVitorias($vitorias){
        $this->vitorias = $vitorias;

        return $this;
    }

    public function getDerrotas(){
        return $this->derrotas;
    }

    private function setDerrotas($derrotas){
        $this->derrotas = $derrotas;

        return $this;
    }

    public function getEmpates(){
        return $this->empates;
    }

    private function setEmpates($empates){
        $this->empates = $empates;

        return $this;
    }
}