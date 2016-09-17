<?php 
require_once('/../config/init.php');

$user=new User;
$template=new Template('templates/members.php');
$id="";
$template->dataResult=$user->agent($id);
echo $template;
?>