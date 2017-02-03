<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Aula 15</title>
	<link rel="stylesheet" href="">
</head>
<body>

<pre>
	<?php
	require_once "Video.class.php"; 
	// require_once "Pessoa.class.php"; 
	require_once "Gafanhoto.class.php"; 
	require_once "Visualizacao.class.php"; 

	$v[0] = new Video("Aula 1 de POO");
	$v[1] = new Video("Aula 12 de HTML5");
	$v[2] = new Video("Aula 15 de PHP");

	$g[0] = new Gafanhoto("Adolfo", 22, "M", "Juba");
	$g[1] = new Gafanhoto("Augusto", 20, "F", "Creuzita");

	$vis[0] = new Visualizacao($g[0], $v[2]);
	$vis[1] = new Visualizacao($g[0], $v[1]);

	$vis[0]->avaliar(); //polimorfismo sobreposição
	$vis[1]->avaliarPorc(85); //polimorfismo sobrecarga

	// print_r($v);
	//print_r($g);
	print_r($vis);
	 ?>
</pre>
	
</body>
</html>