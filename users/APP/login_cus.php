<?php
ob_start();
if (isset($_POST['Submit'])){


$host="daphkkoybiz.ipagemysql.com"; // Host name
$email="daphkkoy_com"; // Mysql email
$password="dF6evf88"; // Mysql password
$db_name="daphkkoy_com"; // Database name
$tbl_name="new_customer"; // Table name
// Connect to server and select databse.
mysql_connect("$host", "$email", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Define $email and $password
//sf970e2767d0cfe75876ea857f92e319b
//f970e2767d0cfe75876ea857f92e319b

$email=$_POST['email'];
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$email = stripslashes($email);
$email = mysql_escape_string($email);
$password = mysql_escape_string($password);
$password =md5($password);
if (!get_magic_quotes_gpc()) {$password = addslashes($password);}


$sql="SELECT * FROM $tbl_name WHERE password='$password' ";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
//echo $count;
echo $password;

// If result matched $email and $password, table row must be 1 row

if($count==1){
// Register $email, $password and redirect to file "login_success.php"
session_register("email");
session_register("password");
header("location:index.php");
}
else {
echo "Wrong email or Password";
}

ob_end_flush();

}
?>

 <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Member Login </strong></td>
</tr>
<tr>
<td width="78">email</td>
<td width="6">:</td>
<td width="294"><input name="email" type="text" id="email"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="password" type="text" id="password"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>

 
 