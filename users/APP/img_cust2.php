<?php  session_start();

$server=$_SESSION['server'];
$pass=$_SESSION['pass'];
$user=$_SESSION['user'];
$db=$_SESSION['db'];
	mysql_connect("$server", "$user", "$pass") or die(mysql_error()); 
  	 mysql_select_db("$db") or die(mysql_error());

		$sql = "SELECT cust_img2 FROM busyimg ORDER BY id DESC LIMIT 1";
		$result = mysql_query("$sql") or die("Invalid query: " . mysql_error());
					

        header("Content-type: image/jpeg");
        //header("Content-Disposition: attachment; filename=$name");
	
		echo mysql_result($result, 0);

																												

?>

