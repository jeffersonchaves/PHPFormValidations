<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>

	<p><span class="error">* campos obrigatórios.</span></p>
	
	<form method="post" action="valida.php">
		
		Nome: <input type="text" name="nome">
		<span class="error">* <?php echo @$_SESSION['erros']['nome'];?></span>
		<br><br>
		
		E-mail: <input type="text" name="email">
		<span class="error">* <?php echo @$_SESSION['erros']['email'];?></span>
		<br><br>
		
		Página web: <input type="text" name="website" placeholder="inclua o http://">
		<span class="error">* <?php echo @$_SESSION['erros']['website'];?></span>
		<br><br>
		
		Gênero:
		<input type="radio" name="genero" value="Masculino">Masculino
		<input type="radio" name="genero" value="Feminino">Feminino
		<span class="error">* <?php echo @$_SESSION['erros']['generos'];?></span>
		<br><br>

		<br style="clear: both;">
		Comentário: <textarea name="comentario" rows="5" cols="40"></textarea>
		<br><br>
		<input type="submit" name="submit" value="Submit">
	
	</form>

	<?php
	echo "<h2>DADOS:</h2>";
	echo "<pre>";
	(isset($_SESSION['dados']))? print_r($_SESSION['dados']): "";
	echo "<pre>";

	session_destroy();

	?>

</body>
</html>