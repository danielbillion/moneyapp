<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body><?php



/* $con = mysql_connect("daphkkoybiz.ipagemysql.com","pikin","bless");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }




// Create table
mysql_select_db("lucky", $con);
$sql = "CREATE TABLE login 2
(
username varchar(30),
password varchar(32),

)";

// Execute query
mysql_query($sql,$con);

mysql_close($con);

*/

// Connects to your Database 
$con = mysql_connect("daphkkoybiz.ipagemysql.com","pikin","bless");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  } 
 // Create database
if (mysql_query("CREATE DATABASE chief",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }


 
 mysql_select_db("chief") or die(mysql_error()); 
 mysql_query("CREATE TABLE test ( user VARCHAR(30), 
 password INT, car VARCHAR(30))"); 

Print "Your table has been created"; 
?>

I
</body>
</html>
