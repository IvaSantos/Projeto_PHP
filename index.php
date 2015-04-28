<?php
	date_default_timezone_set('UTC');
	
	$sExpressie = "(http:|ftp:|shttp:|www.|.php|.pl|.cgi|.asp|index.php)";  

	print_r($sExpressie);
	if(isset($_GET['pagina']) && eregi($sExpressie,$_GET['pagina']))
	{
	   include("pages/home.php");
	}
	else 
	{
	   if(isset($_GET['pagina']) && file_exists('Pages/' . $_GET['pagina'] . ".php")) 
	   {                                
		 include('pages/' . $_GET['pagina'] . ".php");
	   }                    
	   else 
	   { 
		 //include("pages/home.php");
	   } 
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>projeto PHP</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/footer.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="http://localhost:8080/">Home</a></li>
                        <li><a href="http://localhost:8080/empresa">Empresa</a></li>
                        <li><a href="http://localhost:8080/produtos">Produtos</a></li>
                        <li><a href="http://localhost:8080/servicos">Serviços</a></li>
                        <li><a href="http://localhost:8080/contato">Contato</a></li>
                    </ul>        
                </div>
            </div>
        </nav> 
        
        <div class="container">
            <div class="page-header">
                <h1>Sticky footer with fixed navbar</h1>
            </div>
            <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body > .container</code>.</p>
            <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
        </div>
        
        <footer class="footer">
            <div class="container">
                <p class="text-muted">Todos os direitos reservados - <?php echo date('Y'); ?>.</p>
            </div>
        </footer>
    </body>
</html>