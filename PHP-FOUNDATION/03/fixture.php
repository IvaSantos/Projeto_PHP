<?php

require_once('arquivos/conexao.php');


$conn = conDB();

$conn->query("DROP TABLE IF EXISTS paginas;");

$conn->query("CREATE table paginas(
				id INT( 10 ) AUTO_INCREMENT NOT NULL PRIMARY KEY,
				nome VARCHAR( 250 ) NOT NULL, 
				conteudo VARCHAR( 250 ) NOT NULL);");


function insert($nome,$conteudo) {
 	$conn = conDB();
    $smt = $conn->prepare("INSERT INTO paginas(nome,conteudo) VALUE (:nome,:conteudo);");
    $smt->bindParam(":nome", $nome);
	$smt->bindParam(":conteudo", $conteudo);
    $smt->execute();
}

insert('home','<div class="container"><div class="jumbotron"><div class="page-header"><h1 class="alert">PROJETO PHP</h1></div></div></div>');
insert('produtos','<div class="container"><div class="jumbotron"><div class="page-header"><h1 class="alert">Produtos</h1></div></div></div>');
insert('servicos','<div class="container"><div class="jumbotron"><div class="page-header"><h1 class="alert">Serviços</h1></div></div></div>');
insert('Empresa','<div class="container"><div class="jumbotron"><div class="page-header"><h1 class="alert">Empresa</h1></div></div></div>');
insert('404','<div class="container"><div class="jumbotron"><div class="page-header"><h1>OPS! erro 404.</h1><p>Página não encontrada</p><p><a href="home">Home</a></p></div></div></div>');



$sql = "SELECT * FROM paginas";
$stmt = $conn->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
//print_r($res);
echo 'id - nome - conteudo <br>';
foreach($res as $valor){
	echo $valor['id'].' - '.$valor['nome'].' - '.$valor['conteudo'].'<br>';
}
	