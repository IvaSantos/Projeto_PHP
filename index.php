<?php
	date_default_timezone_set('UTC');
	/*
	$link = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	
	$link = trim($link['path'],'/').'.php';
	
	
	print_r($_POST); 
	exit;
	*/
	
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
    	<?php require_once('menu.php');?>  
        
        <?php 
		
        	if(isset($_GET['pag']))
				require_once($_GET['pag'].'.php');
			else
				require_once('home.php');
			
		?>
        
        <footer class="footer">
            <div class="container">
                <p class="text-muted">Todos os direitos reservados - <?php echo date('Y'); ?>.</p>
            </div>
        </footer>
    </body>
</html>