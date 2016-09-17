<?php

require_once('../config/init.php');
$template=new Template('templates/memberPage.php');
$user=new User;
	$id=isset($_GET['id'])?$_GET['id']: " ";
$template->dataResult=$user->agent($id);
echo $template;
?>