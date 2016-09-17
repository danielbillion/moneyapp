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
$con = mysql_connect("daphkkoybiz.ipagemysql.com","remi","bless");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("above", $con);

$sql="INSERT INTO agent_tran (agent_nme, sender_nme, sender_add)
VALUES
('$_POST[agent]','$_POST[sender_nme]','$_POST[sender_add]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?> 