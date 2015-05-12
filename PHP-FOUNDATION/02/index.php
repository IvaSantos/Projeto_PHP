<?php

	require_once('pagina/header.php');
         
   	require_once(routeUrl());
	$route = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	var_dump($route);	
	$path = $route['path'];
	$path = explode('/', $path);
	echo ' #### '.$path['1'];
	
	
    require_once('pagina/footer.php');