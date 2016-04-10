<?php

	$dados = array();
	$erros = array();

	function validaDados($chave, $valor) {

		global $dados;
		global $erros;

		if (empty($valor)) {
			$erros[$chave] = "$chave é obrigatório";
		} else {
			$dados[$chave] = trim($valor);
			$dados[$chave] = stripslashes($dados[$chave]);
			$dados[$chave] = htmlspecialchars($dados[$chave]);
		}
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		foreach ($_POST as $chave => $valor) {
			validaDados($chave, $valor);
		}
	}