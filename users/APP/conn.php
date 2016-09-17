
 <?php
//$server="daphkkoybiz.ipagemysql.com";
$server="localhost";
$pass="as";
$user="as";
$db="nitty";


//$dbhandle = mysql_connect($hostname, $username, $password) ;


mysql_connect("$server", "$user", "$pass") or die(mysql_error()); 
$con=mysql_connect("$server", "$user", "$pass") or die(mysql_error()); 

 mysql_select_db("$db") or die(mysql_error()); 
 

 
 ?>