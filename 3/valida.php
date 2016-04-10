<?php

	session_start();

	function validaDados($chave, $valor) {

		if (empty($valor)) {
			$_SESSION['erros'][$chave] = "$chave é obrigatório";
		} else {
			$_SESSION['dados'][$chave] = trim($valor);
			$_SESSION['dados'][$chave] = stripslashes($_SESSION['dados'][$chave]);
			$_SESSION['dados'][$chave] = htmlspecialchars($_SESSION['dados'][$chave]);


			// $_SESSION['dados'][$chave] = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $_SESSION['dados'][$chave] );
			// $_SESSION['dados'][$chave] = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', $_SESSION['dados'][$chave]);
			// $_SESSION['dados'][$chave] = htmlentities($_SESSION['dados'][$chave], ENT_COMPAT, 'utf-8');
		}
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		foreach ($_POST as $chave => $valor) {
			validaDados($chave, $valor);
		}

		//valida o website da empresa com um filtros
		if (filter_var($_POST['website'], FILTER_VALIDATE_URL) === false) {
		    $_SESSION['erros']['website'] = "Essa url nao é válida";
		}
	}

	header('location: index.php');