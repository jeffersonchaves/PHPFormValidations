<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if (empty($_POST["name"])) {
			$nameErr = "Name é obrigatório";
		} else {
			$name = $_POST["name"];
			$name = trim($name);
			$name = stripslashes($name);
			$name = htmlspecialchars($name);
		}

		if (empty($_POST["email"])) {
			$emailErr = "Email é obrigatório";
		} else {
			$email = $_POST["email"];
			$data  = trim($email);
			$email = stripslashes($email);
			$email = htmlspecialchars($email);
		}

		if (empty($_POST["website"])) {
			$website = "";
		} else {
			$website = $_POST["website"];
			$website = trim($website);
			$website = stripslashes($website);
			$website = htmlspecialchars($website);
		}
	}
?>



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
		
		Nome: <input type="text" name="name">
		<span class="error">* <?php echo @$nameErr;?></span>
		<br><br>
		
		E-mail: <input type="text" name="email">
		<span class="error">* <?php echo @$emailErr;?></span>
		<br><br>
		
		Página web: <input type="text" name="website">
		<span class="error"><?php echo @$websiteErr;?></span>
		<br><br>
		
		Gênero:
		<input type="radio" name="gender" value="Masculino">Masculino
		<input type="radio" name="gender" value="Feminino">Feminino
		<span class="error">* <?php echo @$genderErr;?></span>
		<br><br>

		<br style="clear: both;">
		Comentário: <textarea name="comment" rows="5" cols="40"></textarea>
		<br><br>
		<input type="submit" name="submit" value="Submit">
	
	</form>

	<?php
	echo "<h2>DADOS:</h2>";
	echo (isset($name))? $name : '';
	echo "<br>";
	echo (isset($email))? $email : '';
	echo "<br>";
	echo (isset($website))? $website : '';
	echo "<br>";
	echo (isset($comment))? $comment : '';

	echo "<br>";
	echo (isset($gender))? $gender : '';

	?>

</body>
</html>