<?php

require "../cnx.php";
require "../cabecalho.php";
$id = $_GET["id"];

$comando = "SELECT * FROM produto WHERE id = $id";
$retorno = mysqli_query(conexao(), $comando);

$registro = mysqli_fetch_assoc($retorno);

echo "<h1> $registro[descricao]</h1>";
echo "<strong><p> R$ $registro[preco]</p></strong>";
echo "<br>";

?>
<a href="carrinho.php?id=<?=$registro["id"]?>">comprar</a>