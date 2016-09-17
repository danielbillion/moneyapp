<?php  session_start();

 // Connects to your Database 

 include "conn.php";  

 
 //checks cookies to make sure they are logged in 

 if(isset($_COOKIE['ID_my_site'])) 

 { 

 	$username = $_COOKIE['ID_my_site']; 

 	$pass = $_COOKIE['Key_my_site']; 

 	 	$check = mysql_query("SELECT * FROM agent_log WHERE username = '$username'")or die(mysql_error()); 

 	while($info = mysql_fetch_array( $check )) 	 

 		{ 


 //if the cookie has the wrong password, they are taken to the login page 

 		if ($pass != $info['password']) 

 			{ 			header("Location: agent_login.php"); 

 			} 

 

 //otherwise they are shown the admin area	 

 	else 

 			{ 

 			

 echo "<a href=logout_agent.php>Logout</a>"; 

 			} 

 		} 

 		} 

 else 

 

 //if the cookie does not exist, they are taken to the login screen 

 {			 

 header("Location: logout_agent.php"); 

 } 
 
 


echo" <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>Untitled Document</title>
<style type='text/css'>
<!--
body {
	background-color: #CCCCCC;
}
.style1 {
	color: #FF0000;
	font-weight: bold;
	font-size: 20px;
}
.style2 {
	color: #003300;
	font-weight: bold;
	font-size: 18px;
}
a:link {
	color: #000066;
	text-decoration: none;
}
a:visited {
	color: #993300;
	text-decoration: none;
}
a:hover {
	color: #FF0000;
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style4 {
	color: #000033;
	font-size: 18px;
}
-->
</style></head>

<body>
<table width='635' height='297' border='0' align='center'>
  <tr>
    <td height='27' colspan='4'><div align='center' class='style1'>WELCOMED  
                  </u></span><span class='style4'><u>";
	
	 	$use= $_SESSION['username'];
	echo "$use";
	
	echo"</u>!    
              &nbsp;&nbsp;</span>DAPHKKOY  CONTROL</div></td>
  </tr>
  <tr>
    <td height='40' colspan='4'><div align='center' class='style2'>
      <p>Operation Available </p><a href=logout_agent.php></a> 
      <hr />
      <p>&nbsp;</p>
    </div>
    </td>
  </tr>
  <tr>
    <td width='146' height='39'><div align='center'><a href='agent_password_change.php' target='agent'>Change Password</a></div></td>
    <td width='174'><div align='center'>Transaction History </div></td>
    <td width='166'><div align='center'><a href='transaction.php' target='agent'>New Transaction </a></div></td>
    <td width='131'><div align='center'><a href='login.php' target='mainframe'>Admin Control </a></div></td>
  </tr>
  <tr>
    <td height='162' colspan='4'><iframe src='' name='agent' width='600' height='900'  scrolling='No' frameborder='0' id='mainframe'></iframe> </td>
  </tr>
</table>
</body>
</html>"
?>
