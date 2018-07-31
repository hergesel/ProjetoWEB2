<?php

require "../cnx.php";
require "../cabecalho.php";
$comando = "SELECT * FROM produto";
$retorno = mysqli_query(conexao(), $comando);
$produtos = array();
while($registro = mysqli_fetch_assoc($retorno)) {
	$produtos[] = $registro;
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>LivrariaLegal</title>
	<meta charset="utf-8">
</head>

<center><form method="POST" action="busca.php">
  <input type="text" name="busca" size="20">
  <input type="submit" value="Buscar" name="ok">
</form></center>
<form method="POST" action="login.php">
<label>Login:</label><input type="text" name="login" id="login"><br>
<label>Senha:</label><input type="password" name="senha" id="senha"><br>
<input type="submit" value="entrar" id="entrar" name="entrar"><br>
<a href="Formulario.php">Cadastre-se</a>
</form>
<a href="carrinho.php">Carrinho</a>
	<?php foreach ($produtos as $produto) : ?>
	<div>
		<h1><?=$produto["descricao"]?></h1>
		<p>
			<?=$produto["departamento"]?>
			<strong>R$<?=$produto["preco"]?></strong>
		</p>
		
		<a href="detalharProduto.php?id=<?=$produto["id"]?>">Comprar</a>
		
	</div>
	<?php endforeach; ?>


