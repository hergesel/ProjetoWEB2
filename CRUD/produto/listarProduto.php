<?php


?>
<head>
	<meta charset="utf-8">
</head>
<table border="1">
	<tr>
		<td>ID</td>
		<td>DESCRICAO</td>
		<td>DEPARTAMENTO</td>
		<td>PRECO</td>
		<TD>DETALHAR</TD>
		<TD>DELETAR</TD>
		<TD>ALTERAR</TD>
	</tr>

	<?php foreach ($produtos as $produto) : ?>
	<tr>
		<td><?=$produto["id"]?> </td>
		<td><?=$produto["descricao"]?></td>
		<td><?=$produto["departamento"]?> </td>
		<td><?=$produto["preco"]?> </td>
		<td>
			<a href="detalharProduto.php?id=<?=$produto["id"]?>">detalhar</a>
		</td>
		<td>
			<a href="deletarProduto.php?id=<?=$produto["id"]?>">del</a>
		</td>
		<td>
			<a href="alterarProduto.php?id=<?=$produto["id"]?>">edit</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<a href="formularioProduto.php">Adicionar novo produto</a>