<?php

class ContaBanco{
    public $numConta;
    protected $tipo; //cc = conta corrente ou cp = conta poupança.
    private $dono;
    private $saldo;
    private $status;

    public function abrirConta($tipo){
        # se conta corrente = $50 rais
        # se conta poupança = $150 rais
        $this->setTipo($tipo);
        $this->setStatus(true);
        if ($tipo == "CC"){
            $this->setSaldo(50);
        }elseif ($tipo == "CP"){
            $this->setSaldo(150);
        }
    }

    public function fecharConta(){
        if ($this->getSaldo()>0){
            echo "<p>Conta com Dinheiro, ainda não posso fecha-lá!</p>";
        }elseif ($this->getSaldo() < 0) {
            echo "<p>Conta com dívida/negativo, impossível encerrar</p>";
        }else{
            $this->setStatus(false);
            echo "<p>Conta fechada do senhor(a) ".$this->getDono()."</p>";
        }
    }

    public function depositar($v){
        # status = aberta
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Deposito realizado de $v na conta de ".$this->getDono()."</p>";
        }else{
            echo "<p> Conta fechada, não consigo depositar.</p>";
        }
    }

    public function sacar($v){
        if ($this->getStatus() ) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque autorizado de $v na conta de ".$this->getDono()."</p>";
            }else{
                echo "<p>Saldo Insuficiente para saque!</p>";
            }
        }else{
            echo "É impossível sacar a conta esta fechada.";
        }
    }

    public function pagarMensal(){
        if ($this->getTipo() =="CC") {
            $v=12;
        }else if ($this->getTipo()=="CP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade realizada de $v na conta de ".$this->getDono()."</p>";
        }else{
            echo "É impossível sacar";
        }
    }

    function __construct()
    {
        $this->setStatus(false);
        $this->setSaldo(0);
        echo("Conta criada com sucesso..<br>");
    }

    /**
     * @return get e set numConta
     */
    function getNumConta(){
        return $this->numConta;
    }
    function setNumConta($numConta){
        $this->numConta = $numConta;
        return $this;
    }
    /**
     * @return get e set tipo
     */
    function getTipo(){
        return $this->tipo;
    }
    function setTipo($tipo){
        $this->tipo = $tipo;

        return $this;
    }
    /**
     * @return get e set dono
     */
    function getDono(){
        return $this->dono;
    }
    function setDono($dono){
        $this->dono = $dono;

        return $this;
    }
    /**
     * @return get e set saldo
     */
    function getSaldo(){
        return $this->saldo;
    }
    function setSaldo($saldo){
        $this->saldo = $saldo;

        return $this;
    }
    /**
     * @return get e set status
     */
    function getStatus(){
        return $this->status;
    }
    function setStatus($status){
        $this->status = $status;

        return $this;
    }

    
    
}