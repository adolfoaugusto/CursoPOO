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
		require_once "Pessoa.class.php";
		require_once "Aluno.class.php";
		require_once "Professor.class.php";
		require_once "Funcionario.class.php";
		
		$p1 = new Pessoa();
		$p2 = new Aluno();
		$p3 = new Professor();
		$p4 = new Funcionario();

		$p1->setNome("Adolfo");
		$p2->setNome("Maria");
		$p3->setNome("Claudia");
		$p4->setNome("Marcos");

		$p1->setSexo("M");
		$p4->setSexo("F");

		$p2->setCurso("Informática");
		$p3->setSalario(2500.75);
		$p4->setSetor("Estoque");

		$p3->receberAumento(550.20);
		$p4->mudarTrabalho();
		$p2->cancelarMatr();


		print_r($p1);
		print_r($p2);
		print_r($p3);
		print_r($p4);
	?>
	
</pre>
</body>
</html>