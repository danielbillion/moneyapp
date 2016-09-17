<?php  session_start();

 // Connects to your Database 

 include "conn.php";  

 
 //checks cookies to make sure they are logged in 

 if(isset($_COOKIE['ID_my_site'])) 

 { 

 	$username = $_COOKIE['ID_my_site']; 

 	$pass = $_COOKIE['Key_my_site']; 

 	 	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error()); 

 	while($info = mysql_fetch_array( $check )) 	 

 		{ 


 //if the cookie has the wrong password, they are taken to the login page 

 		if ($pass != $info['password']) 

 			{ 			header("Location: login.php"); 

 			} 

 

 //otherwise they are shown the admin area	 

 	else 

 			{ 

 			

 echo "<a href=logout.php>Logout</a>"; 

 			} 

 		} 

 		} 

 else 

 

 //if the cookie does not exist, they are taken to the login screen 

 {			 

 header("Location: login.php"); 

 } 

 



echo" <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>Untitled Document</title>
<style type='text/css'>
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
	font-size: 24px;
}
.style2 {
	color: #003300;
	font-weight: bold;
	font-size: 18px;
}
body {
	background-color: #CCCCCC;
}
a:link {
	color: #0000FF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000066;
}
a:hover {
	text-decoration: none;
	color: #990000;
}
a:active {
	text-decoration: none;
}
.style5 {font-size: 22px}
.style6 {color: #000000}
-->
</style>
</head>

<body>
<table width='687' height='371' border='0' align='center'>
  <tr>
    <td colspan='2'><div align='center'>
      <blockquote>
        <blockquote>
          <blockquote>
            <p><span class='style1'><span class='style5'>Welcome 
              
                  <span class='style6'><u>";
                  
	
	 	$use= $_SESSION['username'];
	echo "$use";
	
	
               echo"   </u></span>!    
              &nbsp;&nbsp;To Kunzle Control Pane</span>l </span></p>
          </blockquote>
        </blockquote>
      </blockquote>
    </div>
      <div align='right'></div>
      <div align='center'>
        <hr colour='green' />
      </div>
    <div align='center'></div>      <p align='left'></p></td>
  </tr>
  
  
  <tr>
    <td width='199' valign='top'><p class='style2'><a href='about us.php'>Operations Available</a></p>
        <p><a href='todays_rate.php' target='control'>Change Today's Rate</a></p>
      <p><a href='general_report.php' target='_blank'>View General Transactions</a><a href=''></a></p>
      <p><a href=''>Transaction by Agent </a></p>
      <p><a href='agent_log_register.php' target='control'>Set up New Agent</a><a href=''></a></p>
      <p><a href='login_register.php' target='control'>Set up Admin </a><a href=''></a></p>
      <p><a href='agent_log_register.php target='control'>Suspend an Agent </a></p>
      <p><a href=''>Delete Agent</a></p>
      <p><a href='admin_change_password.php' target='control'>Change the Admin Password</a><a href=''></a></p>
      <p>&nbsp; </p>
      <p>&nbsp; </p></td>
    <td width='470'><iframe src='' name='control' width='500' height='700'  scrolling='No' frameborder='0' id='mainframe'></iframe>       </td>
  </tr>
</table>
</body>
</html>
?>
