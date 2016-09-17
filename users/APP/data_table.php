<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
<?php
$con = mysql_connect("daphkkoybiz.ipagemysql.com","bobo","bless");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }



// Create table
mysql_select_db("kobo", $con);
$sql = "CREATE TABLE login
(
agent_id int NOT NULL AUTO_INCREMENT,
username VARCHAR(60), password VARCHAR(60)


)";
// Execute query
mysql_query($sql,$con);

mysql_close($con);
?> 