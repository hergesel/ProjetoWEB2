<?php
session_start();


require "../cnx.php";
require "../cabecalho.php";
echo"<h3>Carrinho de Compras!</h3>";
if(!empty($_GET)) {
	$id = $_GET["id"];

	if(!isset($_SESSION["carrinho"])){
		$carrinho = array(); //criei o vetor
	}else {
		$carrinho = $_SESSION["carrinho"]; //recuperei o vetor existente
	}

	if(!in_array($id, $carrinho)) {
		$carrinho[] = $id; //adiciono a tarefa no vetor de tarefas
		$_SESSION["carrinho"] = $carrinho; //armazeno o vetor na sessao!
	}
}



$ids = '';
foreach ($_SESSION["carrinho"] as $idProduto) {
	$ids .=  $idProduto . ",";
}

$ids =  substr($ids,0, strlen($ids)-1); ;



$produtos = array();

$comando = "SELECT * FROM produto WHERE id IN ($ids)";
$retorno = mysqli_query(conexao(), $comando);
while($registro = mysqli_fetch_assoc($retorno)) {
	$produtos[] = $registro;
}

$registro = mysqli_fetch_assoc($retorno);
$total = 0;

foreach ($produtos as $produto) : ?>
	<div>
		<h1><?=$produto["descricao"]?></h1>
		<p>
			<strong>R$<?=$produto["preco"]?></strong> 
			<?php 
				$total = $produto["preco"] + $total;
			?>
		</p>
	</div>

<?php endforeach; ?>

	<div>
		<h2> Total: <?php echo $total . ",00"?></h2>
	</div>