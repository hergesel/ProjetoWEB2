<?php

if($retorno) {
	header("refresh:2; url=listarProduto.php");
	echo "Foi ALTERADO com sucesso!";
} else {
	echo "Errou!";
}	



?>