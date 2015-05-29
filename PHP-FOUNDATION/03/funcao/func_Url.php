<?php
/*****************************
função routeUrl()
*****************************/

function routeUrl() {

    $route = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $permission = array('Home', 'Empresa', 'Produtos', 'Servicos', '404');
	$permission2 = array('Contato');
    $paste = "pagina";
    $path = ltrim($route['path'], "/");
	
	if(isset($_POST['pesqusa']))
		return 'pagina/busca.php';
		
    if ($path == "") 
        $path = "Home";
    
	$pagina = select($path); 
	
    if (in_array($path, $permission) && $pagina) 
		return $pagina ;
		
	if(in_array($path, $permission2))
		return 'pagina/contato.php'; 
	
    $pagina = selectErro();
	
	http_response_code(404);
	
    return $pagina;
}
