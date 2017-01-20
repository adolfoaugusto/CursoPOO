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
	$l = array();

	$l1[0] = new Lutador("Pretty Boy", "França", 31, 1.65, 68.9, 11, 2, 1);
	$l1[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
	$l1[2] = new Lutador("Snap Shadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
	$l1[3] = new Lutador("Dead Code", "Australia", 28, 1.93, 81.6, 13, 0, 2);
	$l1[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
	$l1[5] = new Lutador("Nerdarte", "EUA", 30, 1.81, 105.7, 12, 2, 4);
	
	$l1[3]->perderLuta();
	$l1[3]->perderLuta();
	$l1[3]->apresentar();
	?>
</pre>
</body>
</html>