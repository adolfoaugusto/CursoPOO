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
	include_once "Lobo.class.php";
	include_once "Cachorro.class.php";
	// include_once "Ave.class.php";
	// include_once "Reptil.class.php";
	// include_once "Canguru.class.php";
	// include_once "Cobra.class.php";
	// include_once "Tartaruga.class.php";
	// include_once "Goldfish.class.php";
	// include_once "Arara.class.php";

	// $n = new Animal(); -> nao vai chamar por ser abstrata.
	$c = new Cachorro( );

	// $c->reagirFrase("olá");	
	// $c->reagirFrase("Vai apanhar");	

	// $c->reagirHora(11,45);	
	// $c->reagirHora(21,00);	

	// $c->reagirDono(true);	
	// $c->reagirDono(false);	

	$c->reagirIdadePeso(2, 12.5);	
	$c->reagirIdadePeso(17, 4.5);	

	?>
	</pre>
</body>
</html>