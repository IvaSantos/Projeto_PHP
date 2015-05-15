<?php
/*****************************
função routeUrl()
*****************************/

function routeUrl() {

    $route = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $permission = array('home', 'empresa', 'produtos', 'servicos', 'contato', '404');
    $paste = "pagina";
    $path = ltrim($route['path'], "/");

    if ($path == "") {
        $path = "home";
    }

    $pagina = $paste . "/" . $path . ".php";

    if (in_array($path, $permission) && file_exists($pagina)) {
        // se está no array E o arquivo existe, retorna a página
        return $pagina;
    }

    http_response_code(404);
    return "pagina/404.php";

} 