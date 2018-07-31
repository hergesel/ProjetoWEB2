<?php
if($retorno) {
	header("refresh:1; url=listarProduto.php");
	echo "Foi excluido com sucesso!";
} else {
	echo "Errou!";
}	


?>