<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Conta banco</title>
	<link rel="stylesheet" href="">
</head>
<body>
<pre>
	
	<?php  
	require_once "Lutador.php";
	require_once "Luta.php";
	$l = array();

	$l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 1);
	$l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
	$l[2] = new Lutador("Snap Shadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
	$l[3] = new Lutador("Dead Code", "Australia", 28, 1.93, 81.6, 13, 0, 2);
	$l[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
	$l[5] = new Lutador("Nerdarte", "EUA", 30, 1.81, 105.7, 12, 2, 4);
	
	// $l[1]->apresentar();
	// $l[2]->apresentar();
	// $l[3]->apresentar();
	// $l[4]->apresentar();
	// $l[5]->apresentar();
	//echo "<hr>";
	
	$uec01 = new Luta();
	$uec01->marcarLuta($l[2], $l[3]);
	$uec01->lutar();
	echo "<hr>";
	//var_dump($uec01);
	$l[2]->status();
	$l[3]->status();
	
	?>
</pre>
</body>
</html>