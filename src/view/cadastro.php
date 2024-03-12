<?php
session_start();
require_once "../../valida_acesso.php";


	$nome = str_replace('#', '-', $_POST['nome']);
	$matricula = str_replace('#', '-', $_POST['matricula']);
	$curso = str_replace('#', '-', $_POST['curso']);

	//implode('#', $_POST);

	$texto = $_SESSION['id'] . '#' . $nome . '#' . $matricula . '#' . $curso . PHP_EOL;


	//abrindo o arquivo
	$arquivo = fopen('../../arquivo.txt', 'a');
	//escrevendo o texto
	fwrite($arquivo, $texto);
	//fechando o arquivo
	fclose($arquivo);

	//echo $texto;
	header('Location: cadastrar_aluno.php');
?>