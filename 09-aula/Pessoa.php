<?php 
/**
* 
*/
class Pessoa
{
	private $nome;
	private $idade;
	private $sexo;


	/**
	 * Class Constructor
	 * @param    $nome   
	 * @param    $idade   
	 * @param    $sexo   
	 */
	public function __construct($nome, $idade, $sexo)
	{
		$this->nome = $nome;
		$this->idade = $idade;
		$this->sexo = $sexo;
	}

	public function fazerAniversario(){
		# code...
	}

    public function getNome(){
        return $this->nome;
    }

    private function setNome($nome){
        $this->nome = $nome;

        return $this;
    }

    public function getIdade(){
        return $this->idade;
    }

    private function setIdade($idade) {
        $this->idade = $idade;

        return $this;
    }

    public function getSexo(){
        return $this->sexo;
    }

    private function setSexo($sexo){
        $this->sexo = $sexo;

        return $this;
    }
}