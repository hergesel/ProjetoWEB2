<?php
function conexao() {
	$cnx = mysqli_connect(
		"localhost", //endereco do servidor 
		"root", //usuario do BD
		"", //senha do usuario do BD
		"livraria"); //nome da base de dados

	return $cnx;
}

?>