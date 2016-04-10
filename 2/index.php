<?php include 'valida.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>

	<p><span class="error">* campos obrigatórios.</span></p>
	
	<form method="post" action="">
		
		Nome: <input type="text" name="nome">
		<span class="error">* <?php echo @$erros['nome'];?></span>
		<br><br>
		
		E-mail: <input type="text" name="email">
		<span class="error">* <?php echo @$erros['email'];?></span>
		<br><br>
		
		Página web: <input type="text" name="website">
		<span class="error"><?php echo @$erros['website'];?></span>
		<br><br>
		
		Gênero:
		<input type="radio" name="gender" value="Masculino">Masculino
		<input type="radio" name="gender" value="Feminino">Feminino
		<span class="error"><?php echo @$erros['gender'];?></span>
		<br><br>

		<br style="clear: both;">
		Comentário: <textarea name="comment" rows="5" cols="40"></textarea>
		<br><br>
		<input type="submit" name="submit" value="Submit">
	
	</form>

	<?php
	echo "<h2>DADOS:</h2>";
	echo "<pre>";
	print_r($dados);
	echo "<pre>";

	?>

</body>
</html>