<?php

	require_once('header.php');
    
    require_once('menu.php');  
        
   
	if(isset($_GET['pag']))
		require_once($_GET['pag'].'.php');
	else
		require_once('home.php');
	
    require_once('footer.php');