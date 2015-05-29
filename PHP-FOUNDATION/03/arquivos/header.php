<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	date_default_timezone_set('America/Sao_Paulo');
	
	require_once('funcao/func_Url.php');
	require_once('funcao/func_DB_Url.php');
	require_once('funcao/func_Buscar.php');
	 
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Ivan Santos">
        <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    
        <title>| Projeto PHP</title>
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/footer.css" rel="stylesheet">
    
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="./js/ie-emulation-modes-warning.js"></script>
    
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
  	</head>

    <body>
    
        <!-- Fixed navbar -->
        <?php require_once('menu.php');?>
    
    	