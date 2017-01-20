<?php /**
 * Classe caneta
 */
class Caneta
{
	public $modelo;
	private $ponta;
	private $cor;
	private $tampada;

    function __construct($modelo, $ponta, $cor)
    {
        $this->modelo = $modelo;
        $this->ponta = $ponta;
        $this->cor = $cor;
        $this->setTampada(true);
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getPonta()
    {
        return $this->ponta;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function getTampada()
    {
        return $this->tampada;
    }

    public function setTampada($tampada)
    {
        $this->tampada = $tampada;
    }


}