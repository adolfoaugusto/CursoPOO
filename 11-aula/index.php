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
	//include_once "Pessoa.class.php";
	//include_once "Visitante.class.php";
	include_once "Aluno.class.php";
	include_once "Bolsista.class.php";
	//________________________

	// $p1 = new Pessoa
	//________________________
	// $v1 = new Visitante();
	// $v1->setNome("Juvenal");
	// $v1->setIdade(33);
	// $v1->setSexo("M");
	// print_r($v1);
	//________________________
	$a1 = new Aluno();
	$a1->setNome("Adolfo");
	$a1->setIdade(27);
	$a1->setSexo("M");
	$a1->setMatricula(2222);
	$a1->setCurso("Analise de Sistemas Para Internet");
	$a1->pagarMensalidade();
	print_r($a1);
	//________________________
	echo "<hr>";
	$b1 = new Bolsista();
	$b1->setNome("Jubileu");
	$b1->setIdade(27);
	$b1->setSexo("M");
	$b1->setMatricula(2222);
	$b1->setBolsa(22.5);
	$b1->setCurso("Analise de Sistemas");
	$b1->pagarMensalidade();
	$b1->renovarBolsa();
	print_r($b1);
	?>
		
	</pre>
</body>
</html>