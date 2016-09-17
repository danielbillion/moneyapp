
<?php
//$server="kunzleltd.co.uk.mysql";
$server="localhost";
$pass="WkSVMser";
$user="kunzleltd_co_uk";
$db="kunzleltd_co_uk";

//$dbhandle = mysql_connect($hostname, $username, $password) ;


mysql_connect("$server", "$user", "$pass") or die(mysql_error()); 

 mysql_select_db("$db") or die(mysql_error()); 
 

 
 ?>