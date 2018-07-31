<?php

require "../cnx.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$nascimento = $_POST["nascimento"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$sexo = $_POST["sexo"];


$sql = "INSERT INTO usuario (nome, email, cpf, nascimento, telefone, endereco, sexo) 
	values ('$nome', '$email', '$cpf', '$nascimento', '$telefone', '$endereco', '$sexo')";



$cnx = conexao();
$retorno = mysqli_query($cnx, $sql);

if($retorno){
	echo "Deu certo";
} else {
	echo "Deu errado!" . mysqli_error($cnx);
}

?>

