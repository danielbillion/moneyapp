<?php
require "config/init.php";
$template=new Template('templates/mReceiver.php');
$trans= new Transaction;
$template->rate=$trans->todaysrate();


echo $template;




?>