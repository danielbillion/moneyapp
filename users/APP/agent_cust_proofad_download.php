<?php session_start();

$server=$_SESSION['server'];
$pass=$_SESSION['pass'];
$user=$_SESSION['user'];
$db=$_SESSION['db'];

	mysql_connect("$server", "$user", "$pass") or die(mysql_error()); 
  	 mysql_select_db("$db") or die(mysql_error());
 
 
 if (isset($_GET['c_ag_email']))
				
	{			

$agent_em= $_GET['c_ag_email'];
}

 //echo $agent_em ;
 $sql = "SELECT proofad_name, proofad_type, proofad_size, proofad_content FROM agent_new_customer WHERE email=$agent_em";
 
   $check = mysql_query("SELECT * FROM agent_new_customer") or die('Query failed: ' . mysql_error());
   
 $check0 = mysql_query("SELECT proofad_name, proofad_type, proofad_size, proofad_content " ."FROM agent_new_customer WHERE email ='".$agent_em."'")or die(mysql_error());
$table_array = mysql_fetch_array($check);
$result = @mysql_query($check0);


$sql = "SELECT proofad_content FROM agent_new_customer WHERE email ='".$agent_em."'";
$sql2 = "SELECT proofad_name FROM agent_new_customer WHERE email ='".$agent_em."'";
 
        // the result of the query
        $result = mysql_query("$sql") or die("Invalid query: " . mysql_error());
		 $result2 = mysql_query("$sql2") or die("Invalid query: " . mysql_error());
 			$name= mysql_result($result2, 0);
        // set the header for the image
        header("Content-type: image/jpeg");
        header("Content-Disposition: attachment; filename=$name");
	
		echo mysql_result($result, 0);

/*

//$result = mysql_query($check0) or die('Error, query failed');
echo $agent_em ;

list($name, $type, $size, $content) = mysql_fetch_array($check0);

header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
echo $content;
	
	
	
	
	$row = mysql_fetch_array($check0);
if (!empty($row[”content”]))
{
// Output the MIME header - Force as Octet Stream
// You could get this from the FileType Column
header(”Content-type: application/octet-stream”);
header(”Content-Length: ” . strlen($row[’content’]) );
header(”Content-Type: application/octet-stream”);
header(’Content-Disposition: attachment; filename=”‘.$row[’name’].’”‘);
header(”Content-Transfer-Encoding: binary\n”);
echo $row[’content’];

}	


$sql = "SELECT proofad_name, proofad_type, proofad_size, proofad_content FROM agent WHERE email=$agent_em";
	

$result = @mysql_query($sql);
  $name = @mysql_result($result, 0, "proofad_name");
  $type = @mysql_result($result, 0, "proofad_type");
  $size = @mysql_result($result, 0, "proofad_size");
  $data = @mysql_result($result, 0, "proofad_content");
  
  mysql_close();
	
header("Content-type: image/jpeg");
 //header("Content-length: $size");
//header("Content-Disposition: attachment; proofad_name=$name");
 // header("Content-Description: PHP Generated Data");
echo $data;
*/




//$result = mysql_query("$sql") or die("Invalid query: " . mysql_error());
 
        // set the header for the image
       // header("Content-type: image/jpeg");
       // echo mysql_result($check0, 0);
 
        // close the db link
        //





																												

?>