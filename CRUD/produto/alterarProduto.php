<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="atualizarProduto.php" method="POST">

	<input type="hidden" name="id" 
		value="<?php echo $registro["id"]; ?>">

	Descricao: <input type="text" name="descricao" 
		value="<?php echo $registro["descricao"]; ?>">
	Preco: <input type="text" name="preco" 
		value="<?php echo $registro["preco"];?>">
	<button type="submit">vai!</button>
</form>


</body>
</html>