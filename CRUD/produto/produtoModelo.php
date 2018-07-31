<?php

function selecionarTodosProdutos (){
	require "../cnx.php";

	$comando = "SELECT * FROM produto";
	$retorno = mysqli_query(conexao(), $comando);
	$produtos = array();
	while($registro = mysqli_fetch_assoc($retorno)) {
	$produtos[] = $registro;
}

}





function detalharProduto ($id){

require "../cnx.php";

$id = $_GET["id"];

$comando = "SELECT * FROM produto WHERE id = $id";
$retorno = mysqli_query(conexao(), $comando);

$registro = mysqli_fetch_assoc($retorno);
}








function adicionarProduto ($descricao, $departamento, $preco){
require "../cnx.php";

$descricao = $_POST["descricao"];
$departamento = $_POST["departamento"];
$preco = $_POST["preco"];

$comando = "INSERT INTO produto (descricao, departamento, preco)
	values ('$descricao', '$departamento', '$preco')";



$retorno = mysqli_query(conexao(), $comando);
}





function alterarProduto ($id){
require "../cnx.php";

$id = $_GET["id"];

$comando = "SELECT * FROM produto WHERE id = $id";
$retorno = mysqli_query(conexao(), $comando);

$registro = mysqli_fetch_assoc($retorno);


}




function atualizarProduto ($descricao, $preco, $id){	
require "../cnx.php";

$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$id = $_POST["id"];

$comando = "UPDATE produto
SET descricao = '$descricao', preco = '$preco'
WHERE id='$id'";

$retorno = mysqli_query(conexao(), $comando);
}





function deletarProduto ($id){
require "../cnx.php";

$id = $_GET["id"];

$comando = "DELETE FROM produto WHERE id = $id";



$retorno = mysqli_query(conexao(), $comando); 
}
?>