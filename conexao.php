<?php 

$servidor = 'localhost:3306';
$usuario = "root";
$senha = '';
$tabela = 'crud01';

$connect = mysqli_connect($servidor,$usuario,$senha,$tabela);

if (!$connect) {

	die ("Falha na conexão: ". mysqli_connect_error ());

	} else {

		echo "Conectado com sucesso ao servidor!";

	}



 ?>