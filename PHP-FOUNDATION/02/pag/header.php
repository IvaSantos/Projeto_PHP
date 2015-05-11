<?php
	date_default_timezone_set('UTC');
	
	$link = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	
	$link = trim($link['path'],'/').'.php';
	
	
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>projeto PHP</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/footer.css" rel="stylesheet" media="screen">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script>
			
        </script>
    </head>
    <body>
    
    	