<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Aula 14</title>
	<link rel="stylesheet" href="">
</head>
<body>

<pre>
	<?php
	require_once "Video.class.php"; 
	require_once "Pessoa.class.php"; 
	require_once "Gafanhoto.class.php"; 

	$v[0] = new Video("Aula 1 de POO");
	$v[1] = new Video("Aula 12 de HTML5");
	$v[3] = new Video("Aula 15 de PHP");

	$g[0] = new Gafanhoto("Adolfo", 22, "M", "Juba");
	$g[1] = new Gafanhoto("Augusto", 20, "F", "Creuzita");

	print_r($v);
	print_r($g);
	 ?>
</pre>
	
</body>
</html>