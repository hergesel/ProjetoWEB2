<?php
	require "cnx.php";
	if(!empty($_POST)) {	

		$nome = $_POST["nome"];
		$sobrenome = $_POST["sobrenome"];
		$email = $_POST["email"];
		$telefone = $_POST["telefone"];
		$cpf = $_POST["cpf"];
		$pass = $_POST["senha"];
		$sexo = $_POST["sexo"];
		$cpass = $_POST["csenha"];
		$dia = $_POST["vdia"];
		$mes = $_POST["vmes"];
		$ano = $_POST["vano"];


		$erro = false;
		if((is_int($dia) || is_int($mes)) || is_int($ano)){
			echo "<br>";
			echo" Insira a data corretamente ";
			echo "<br>";
			
		}
		if (!($pass == $cpass)){

			echo " As senhas são diferentes! ";
			echo "<br>";
			$erro = true;

		}

		foreach($_POST as $chave => $valor){

			$$chave = trim( strip_tags($valor));

		}

		$count = strlen($nome);
		if ($count < 3){

			$erro = true;
			echo " Seu nome tem que ter pelo menos 3 caracteres! ";
			echo "<br>";
		}
		$count = strlen($pass);
		if (($count < 8)or($count > 16)){

			$erro = true;
			echo " Sua senha tem que ter mais que 8 caracteres! ";
			echo "<br>";
		}

		if ((!isset($cpf) or !is_numeric($cpf)) or ((!isset($telefone) or !is_numeric($telefone)) or $erro == true )) {
			echo"Revisa essas informações!";
			echo "<br>";
			$erro = true; 
		}

		if ( ( !isset( $email ) || !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) or $erro == true) {
			$erro = 'Envie um email válido.';
		}
		if ((! isset($nome) or (!is_string($nome)) and $erro == true)){
			$erro = 'Envie um nome ou um sobrenome válido';

		}

	}
	print_r($_POST);
$comando = "INSERT INTO usuario (nome, sobrenome, email, telefone, sexo, cpf, senha, dia, mes, ano) values ('$nome', '$sobrenome', '$email', '$telefone', '$sexo', '$cpf', '$pass', '$dia', '$mes', '$ano');";
$sql = mysqli_query(conexao(), $comando);


	?>