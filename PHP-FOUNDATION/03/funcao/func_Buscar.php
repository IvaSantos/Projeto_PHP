<?php

require_once('arquivos/conexao.php');


function Busca() {
 	
	$conn = conDB();
	$conteudo = addslashes(trim($_POST['pesqusa']));
	
	$stmt = $conn->prepare("SELECT * FROM paginas where conteudo like :conteudo or nome like :nome ");
	$stmt->bindValue(":nome", "%{$conteudo}%", PDO::PARAM_STR);
	$stmt->bindValue(":conteudo", "%{$conteudo}%", PDO::PARAM_STR);
	$stmt->execute();
	
	if($stmt->rowCount() < 1)
		return '<p> Nenhum resultado encontrado com a palavra <strong>'.$conteudo.'</strong>. </p>';
	
	if($stmt->rowCount() == 1)
		$result = '<p> Foi encontrado 1 resultado com a palavra <strong>'.$conteudo.'</strong>. </p>';
	
	if($stmt->rowCount() > 1)
	    $result = '<p> Foi encontrado '.$stmt->rowCount().' resultado com a palavra <strong>'.$conteudo.'</strong>. </p>';
	
	$pagina = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	foreach($pagina as $cont){
		$result .= '<li><a href="'.$cont['nome'].'" >'.$cont['conteudo'].'</a></li>';
	}
	
	return $result;
}

