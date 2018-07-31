<!DOCTYPE html>
<html>
<head>
	<title>LivrariaLegal</title>
	<meta charset="utf-8">
</head>
<body>
<?php
include '../cabecalho.php';
?>

<center>
	<form action="armazenarUsuario.php" method="POST">

		<label for="nome">Nome: </label>

		<input id="nome" type="Text" name="nome">

		<label for="sobrenome">Sobrenome: </label>

		<input id="sobrenome" type="Text" name="sobrenome"><br>
		<br>
		<br>
		<label for="email">Email: </label>

		<input id="email" type="Text" name="email"><br>
		<br>
		<br>
		<label for="sexo">Sexo: </label>



		<select id="sexo" name="sexo">

			<option value="M">Masculino</option>
			<option value="F">Feminino</option>
			<option value="O">Outro</option>

		</select><br>


		
		
		<br>
		<br>
		<label for="CPF">CPF: </label>

		<input id="CPF" type="Number" name="cpf">
		<br>
		<br>
		<br>
		<label for="num">Telefone: </label>

		<input id="num" type="Number" name="telefone"><br>
		<br>
		<br>
		<label for="senha">Senha: </label>
		<input type="password" name="senha">
		

		<label for="csenha">Confirme sua senha: </label>
		<input type="password" name="csenha">
		<br>
		<br>
		Data de nascimento:
		<select name="vdia">
			<?php
			for ($dia=1; $dia <= 31; $dia++) { 
				echo "<option>$dia</option>";
			}
			?>
		</select>
		<select name="vmes">
			<?php
			for ($mes=1; $mes <= 12; $mes++) { 
				echo "<option>$mes</option>";
			}
			?>
		</select>
		<select name="vano">
			<?php
			for ($ano=1960; $ano < 2018; $ano++) { 
				echo "<option>$ano</option>";
			}
			?>
		</select>
		<br>
		<br>
		<input type="Submit" name="Enviar">


	</form>



</center>
</body>
</html>