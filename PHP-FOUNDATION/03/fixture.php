<?php

require_once('arquivos/conexao.php');


$conn = conDB();

$conn->query("DROP TABLE IF EXISTS paginas;");

$conn->query("CREATE table paginas(
				id INT( 10 ) AUTO_INCREMENT NOT NULL PRIMARY KEY,
				nome VARCHAR( 100 ) NOT NULL, 
				conteudo VARCHAR( 250 ) NOT NULL);");


function insert($nome,$conteudo) {
 	$conn = conDB();
    $smt = $conn->prepare("INSERT INTO paginas(nome,conteudo) VALUE (:nome,:conteudo);");
    $smt->bindParam(":nome", $nome);
	$smt->bindParam(":conteudo", $conteudo);
    $smt->execute();
}

insert('Home','PROJETO PHP');
insert('Produtos','Produtos');
insert('Servicos','Serviços');
insert('Empresa','Empresa');
insert('Contato','Nome Email Assunto Mensagem');
insert('Erro','OPS! erro 404. <br />Página não encontrada. <br /><a href="Home">Home</a>');



$sql = "SELECT * FROM paginas";
$stmt = $conn->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

//print_r($res);

echo 'id - nome - conteudo <br>';
foreach($res as $valor){
	echo $valor['id'].' - '.$valor['nome'].' - '.$valor['conteudo'].'<br>';
}



	