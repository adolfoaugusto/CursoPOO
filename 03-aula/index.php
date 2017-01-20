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
		$c1->modelo = "bic cristal";
		$c1->cor = "AZUL";
		//$c1->carga = 99;

		$c1->rabiscar();
		$c1->destampar();
		
		print_r($c1);
	?>		
</pre>
</body>
</html>