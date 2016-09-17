<?php  session_start();

 // Connects to your Database 

 include "conn.php";  

 
 //checks cookies to make sure they are logged in 

 if(isset($_COOKIE["ID_my_site"])) 

 { 

 	$username = $_COOKIE["ID_my_site"]; 

 	$pass = $_COOKIE["Key_my_site"]; 

 	 	$check = mysql_query("SELECT * FROM agent_log WHERE username = "$username"")or die(mysql_error()); 

 	while($info = mysql_fetch_array( $check )) 	 

 		{ 


 //if the cookie has the wrong password, they are taken to the login page 

 		if ($pass != $info["password"]) 

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
 
 
?>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
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
<div align="center">
  <table width="200" height="44" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <th scope="row"><table width="720" height="320" border="0" align="center">
        <tr>
          <td colspan="4"><span class="style1">WELCOMED </u></span><span class="style4"><u>&quot;;
            
            $use= $_SESSION[&quot;username&quot;];
            echo &quot;$use&quot;;
            
            echo&quot;</u>!    
            &nbsp;&nbsp;</span>DAPHKKOY  CONTROL</span></td>
        </tr>
        
        <tr>
          <td height="9" colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td height="19" colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td height="39" colspan="4"><div align="center"><a href="agent_password_change.php" target="agent">Change Password</a></div>            <div align="center">Transaction History </div>            <div align="center"><a href="transaction.php" target="agent">New Transaction </a></div>            <div align="center"><a href="login.php" target="mainframe">Admin Control </a></div></td>
          </tr>
        <tr>
          <td width="146" ><iframe src="" name="agent" width="600" height="500"  scrolling="No" frameborder="0" id="mainframe"></iframe>             </td>
        </tr>
      </table></th>
    </tr>
  </table>
</div>
</body>
</html>
