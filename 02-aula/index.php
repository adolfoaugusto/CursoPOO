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
		require_once 'Caneta.php';

		$c1 = new Caneta;
		$c1->cor = "Azul";
		$c1->ponta = 0.5;
		$c1->tampada = false;
		$c1->tampar();
		$c1->destampar();

		$c1->rabiscar();
		//var_dump($c1);
	?>		
</pre>
</body>
</html>