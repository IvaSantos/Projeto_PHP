<?php

require_once('arquivos/conexao.php');


function select($nome) {
 	$conn = conDB();
	$stmt = $conn->prepare("SELECT * FROM paginas where nome = :nome;");
	$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
	$stmt->execute();
	$pagina = $stmt->fetch(PDO::FETCH_ASSOC);
	return $pagina;
}


function selectErro() {
	return select('Erro');
}