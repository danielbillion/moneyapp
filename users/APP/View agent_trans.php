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

mysql_select_db("Above", $con);

$result = mysql_query("SELECT * FROM agent_tran");

echo "<table border='1'>
<tr>
<th>Agent Name</th>
<th>Sender Nme</th>
<th>Sender address</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['agent_nme'] . "</td>";
  echo "<td>" . $row['sender_nme'] . "</td>";
   echo "<td>" . $row['sender_add'] . "</td>";
  
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?> 