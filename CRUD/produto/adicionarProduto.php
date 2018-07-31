<?php

if($retorno) {
	header("refresh:2; url=listarProduto.php");
	echo "Foi inserido com sucesso!";
} else {
	echo "Errou!";
}


?>