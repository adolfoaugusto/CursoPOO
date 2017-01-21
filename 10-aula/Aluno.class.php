<?php 
/**
* Class aluno
*/
require_once "Pessoa.class.php";
class Aluno extends Pessoa
{
	private $matr;
	private $curso;

	/** Class Constructor
	 * @param    $matr   
	 * @param    $curso   
	 */
    public function cancelarMatr(){
        echo "<p>Matricula será cancelada! </p>";
    }
	
    public function getMatr(){
        return $this->matr;
    }

    public function setMatr($matr){
        $this->matr = $matr;

        return $this;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function setCurso($curso){
        $this->curso = $curso;

        return $this;
    }
}