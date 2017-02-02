<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Aula 11</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<pre>
	<?php 

	include_once "Animal.class.php";
	include_once "Mamifero.class.php";
	include_once "Peixe.class.php";
	include_once "Ave.class.php";
	include_once "Reptil.class.php";
	include_once "Canguru.class.php";
	include_once "Cachorro.class.php";
	include_once "Cobra.class.php";
	include_once "Tartaruga.class.php";
	include_once "Goldfish.class.php";
	include_once "Arara.class.php";

	// $n = new Animal(); -> nao vai chamar por ser abstrata.

	$m = new Mamifero();
	$r = new Reptil();
	$p = new Peixe();
	$a = new Ave();

	$c = new Canguru();
	$k = new Cachorro();
	$t = new Tartaruga();

	echo "<hr>mamifero";
	$m->setPeso(85.3);$m->setIdade(3);
	$m->setMembros(4);$m->locomover();
	$m->alimentar();$m->emitirSom();

	echo "<hr>Reptil";
	$r->setPeso(0.3);$r->setIdade(3);
	$r->setMembros(4);$r->locomover();
	$r->alimentar();$r->emitirSom();
	
	echo "<hr>Peixe";
	$p->setPeso(0.35);$p->setIdade(1);
	$p->setMembros(0);$p->locomover();
	$p->alimentar();$p->emitirSom();
	$p->soltarBolha();

	echo "<hr>Ave";
	$a->setPeso(0.89);$a->setIdade(2);
	$a->setMembros(2);$a->locomover();
	$a->alimentar();$a->fazerNinho();


		
	?>
	</pre>
</body>
</html>