<?php 

include_once "Animal.class.php";

class Mamifero extends Animal
{
    private $corPelo;

    public function emitirSom(){
        echo "<p> Som de Mamífero</p>";
    }

}

// aula 12a - 16:30min