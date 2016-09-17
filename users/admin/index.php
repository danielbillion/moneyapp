<?php require('/../config/init.php'); ?>
<?php

//Get Template & Assign Vars
$template = new Template('templates/index.php');
$user=new User;

echo $template;
?>
