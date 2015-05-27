<?php 

	$conteudo = routeUrl();
	if(!is_array($conteudo)){
		require_once($conteudo);
	}else{
?>
        <!-- Begin page content -->
        <div class="container">
        	<div class="jumbotron">
            	<h1><?php echo $conteudo['nome']?></h1>
                <div class="page-header">
                    <p><?php echo $conteudo['conteudo']?><p>
                </div>
            </div>
        </div>
        

<?php }?>
