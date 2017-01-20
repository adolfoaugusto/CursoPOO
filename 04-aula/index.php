<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Aula - 04</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<pre>
		
	<?php 
		require_once 'Caneta.php';
		$c1 = new Caneta("Cont", "Vermelho",0.5);
		$c2 = new Caneta("Bic", "Verde",0.7);
		

		print "Eu tenho uma caneta {$c1->getModelo()} e a ponta {$c1->getPonta()}<br>";

		var_dump($c1, $c2);
	?>
	</pre>
</body>
</html>