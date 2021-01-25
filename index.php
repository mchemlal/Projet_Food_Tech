<?php
// ini_set('display_errors','on');
// error_reporting(E_ALL);


if(isset($_GET['page']) AND !empty($_GET['page'])) 
{
	$page = trim(strtolower($_GET['page']));
}else{
	$page = 'home';
}
	
// array contenant toutes les pages
$allpages = scandir('controllers');
if(in_array($page.'_controller.php', $allpages))
{
	include_once 'controllers/' .$page.'_controller.php';
    include_once 'views/' .$page.'_view.php';
}
else{
        echo 'error 404';
    }

