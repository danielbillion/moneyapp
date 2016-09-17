<?php  session_start();
//$server="localhost";
//$server="kunzleltdcom.ipagemysql.com";

$server=$_SESSION['server'];
$pass=$_SESSION['pass'];
$user=$_SESSION['user'];

mysql_connect("$server", "$user", "$pass") or die(mysql_error()); 

//include "conn.php";


 
   $agent_em="danielbillion@yahoo.com";
 
 if (isset($agent_em))
				
	{			

 $agent_em="danielbillion@yahoo.com";
}

 //echo $agent_em ;
 $sql = "SELECT proofad_name, proofad_type, proofad_size, proofad_content FROM agent WHERE email=$agent_em";
 
   $check = mysql_query("SELECT * FROM agent") or die('Query failed: ' . mysql_error());
   
 $check0 = mysql_query("SELECT proofad_name, proofad_type, proofad_size, proofad_content " ."FROM agent WHERE email ='".$agent_em."'")or die(mysql_error());
$table_array = mysql_fetch_array($check);
$result = @mysql_query($check0);


$sql = "SELECT proofad_content FROM agent WHERE email ='".$agent_em."'";
$sql2 = "SELECT proofad_name FROM agent WHERE email ='".$agent_em."'";
 
        // the result of the query
        $result = mysql_query("$sql") or die("Invalid query: " . mysql_error());
		 $result2 = mysql_query("$sql2") or die("Invalid query: " . mysql_error());
 			$name= mysql_result($result2, 0);
        // set the header for the image
        header("Content-type: image/jpeg");
        //header("Content-Disposition: attachment; filename=$name");
	
		echo mysql_result($result, 0);

																												

?>

