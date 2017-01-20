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
	require_once "ControleRemoto.php";
	$c = new ControleRemoto(); 
	$c->ligar();
	$c->maisVolume();
	$c->abrirMenu();
	$c->maisVolume();
	
	?>
</pre>
</body>
</html>