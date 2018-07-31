<?php
require "../cabecalho.php";
?>
<a href="pagInicial.php">Voltar</a>
<center><form method="POST" action="busca.php">
  <input type="text" name="busca" size="20">
  <input type="submit" value="Buscar" name="ok">
</form></center>
<?php

require "../cnx.php";


$busca = $_POST['busca'];
$comando = "SELECT * FROM produto WHERE descricao LIKE '%$busca%' OR departamento LIKE '%$busca%'";
$sql = mysqli_query(conexao(), $comando);
$count = mysqli_num_rows($sql);
$produtos = array();
if ($count == 0) {
    echo "Nenhum resultado!";
    echo "<br>";
} else {
    
    if ($count == 1) {
        echo "1 resultado encontrado!";
        echo "<br>";
    }
    if ($count > 1) {
        echo "$count resultados encontrados!";
        echo "<br>";
    }
    while ($dados = mysqli_fetch_array($sql)) {
        echo "<h1>$dados[descricao]</h1> <p>$dados[departamento] <strong>R$ $dados[preco]</strong></p><br>";
        //aqui falta implementar o link para detalhar e comprar o produto listado pela busca
        
    }
}
?>