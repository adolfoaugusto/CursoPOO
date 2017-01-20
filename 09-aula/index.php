<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<pre>
	<?php 
		require_once 'Pessoa.php';
		require_once 'Livro.php';

		$p[0] = new Pessoa("Adolfo", 22, "M");
		$p[1] = new Pessoa("Marcia", 25, "F");

		$l[0] = new Livro("PHP Basico", "Jose Celun",300, $p[0]);
		$l[1] = new Livro("POO com PHP", "Antonio Furtado", 500, $p[0]);
		$l[2] = new Livro("PHP Avancado", "Pitchiliani", 350, $p[1]);

		$l[0]->abrir();
		$l[0]->folhear(80);
		$l[0]->voltarPag();
		$l[0]->detalhes();
		$l[1]->detalhes();
	?>
	
</pre>
</body>
</html>