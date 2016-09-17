

<?php
require_once('../kollyronky-monex.com/calendar/classes/tc_calendar.php');
?><script language="javascript" src="../kollyronky-monex.com/calendar/calendar.js"></script>
<script type="text/javascript" src="../kollyronky-monex.com/SPL_AJAX_Full.js"></script>

<?php session_start();



 // Connects to your Database 

 mysql_connect("localhost", "kollyronky_mone", "ax3bUKbT") or die(mysql_error()); 

 mysql_select_db("kollyronky_mone") or die(mysql_error()); 

 
 //checks cookies to make sure they are logged in 

 if(isset($_COOKIE['ID_my_site'])) 

 { 
	$email = $_COOKIE['ID_my_site']; 

 	$pass = $_COOKIE['Key_my_site']; 

 	 	$check = mysql_query("SELECT * FROM agent WHERE email = '$email' ")or die(mysql_error());

 	while($info = mysql_fetch_array( $check )) 	 

 		{ 


 //if the cookie has the wrong password, they are taken to the login page 

 		if ($pass != $info['password']) 

 			{ 			header("Location: agent_login.php"); 

 			} 

 

 //otherwise they are shown the admin area	 

 	

 		} 

 		} 

 else 

 

 //if the cookie does not exist, they are taken to the login screen 

 {			 

 header("Location: agent_login.php"); 

 } 


$title=  $_SESSION['title'];
$use=  $_SESSION['s_fname'];


?>


<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />

<link rel='stylesheet' href='../kollyronky-monex.com/me_files/css3menu1/style.css' type='text/css' /><style>._css3m{display:none}</style>
<link rel='shortcut icon' href='../kollyronky-monex.com/fvr.jpg' type='image/jpeg' />
<title> Kollyronky Agent Page </title>
<link href='' type='text/css' rel='stylesheet' />
<link rel='stylesheet' href='../Kollyronky.com/nav.css'>
<style type='text/css'>
<!--
body {
	background-color: #FFF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	color: #FFFFFF;
	font-size: 12px;
}

a:link {
	text-decoration: none;
	color: #F00;
}
a:visited {
	text-decoration: none;
	color: #906;
}
a:hover {
	text-decoration: none;
	color: #00F;
}
a:active {
	text-decoration: none;
	color: #F0F0F0;
}
.style10 {
	font-size: x-large;
	font-weight: bold;
	font-family: Georgia, 'Times New Roman', Times, serif;
	color: #F00;
}
.style12 {color: #FFFFFF; font-size: 10px; }
.style17 {
	font-size: 16px;
	font-weight: bold;
	font-family: Georgia, 'Times New Roman', Times, serif;
	color: #FFFF33;
}
.style19 {
	color: #FFFFFF;
	font-size: 9px;
}
.style20 {
	font-size: 9.5px;
	color: #FFFFFF;
}
ag {
	color: #F00;
}
rt {
	color: #F00;
}
.nw {
	color: #F00;
}
-->
</style>
</head>

<body>



<STYLE type='text/css'>
 /* List of address */
.SPLAddressListSt{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    margin-top: 0;
    margin-bottom: 0;
    width: 80mm;}
/* Line under the list box when address found */
.SPLAddressListStBottomLine{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 10px;
    text-align: center;
    margin-top: 0;
    margin-bottom: 0;
    }
/* Line if nothing is found */
.SPLAddressListStErrorLine{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
    text-align: center;
    margin-top: 0;
    margin-bottom: 0;
    }
/* License information line */
/* Shown only for 'Internal' Licenses, not Web Use */
 .SPLAddressListLicenseLine{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 10px;
    text-align: center
    margin-top: 0;
    margin-bottom: 0;
    }
 </STYLE>
											
	
<div id='header'>  
  <blockquote>
              <blockquote>&nbsp;</blockquote>
              <table width='750' height='180' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#CCCCCC'>
                <tr bgcolor='#339933'>
                  <th height='15' colspan='3' bgcolor='#FFFFFF' scope='row'><p><span class='style10'>KollyRonky ltd<img src='../kollyronky-monex.com/icon.jpg' width='37' height='41' /></span></p></th>
                  <th width='258' bgcolor='#FFFFFF' scope='row'><p align="left"><span class='nw' style='color: #633'>WELCOME</span><span class='style17' style='color: #633'>
                  
                  
                  
<?php 	
		if(isset($title)){
				   
		$title=  strtoupper($_SESSION['title']);
				
		echo "$title";} 
	
?>
				
					
					


<?php 	
				   if(isset($use)){
				   
$use=  strtoupper($_SESSION['s_fname']);
				
echo "$use";} 
?>
                        
                        
                    
                  !</span></p>
                    <div align="center"><span class="style"><span class="style12"><strong>AGENT ID</strong>:
                     
                     
                     
                     
                     

 <?php 	
	if(isset($use)){
				   
	$id=  $_SESSION['id'];
				
	echo "$id";
	
	}
	 ?>
    
    
    
                  </span></span></div></th>
                  <th width="53" bgcolor="#FFFFFF" scope="row"><div align="right" class="style19" style="color: #633">last login: -</div></th>
                  <th width="157" bgcolor="#FFFFFF" style="color: #FFFFFF" scope="row">
				  
				    <div align="left"><span class="style20" style="color: #633">
			        
					
<?php 	
				   if(isset( $_SESSION['date'])){
				   
				  $use=  strtoupper( $_SESSION['date']);
				
	echo "$use";} 

?>
    
    
    
    
		          &nbsp;</span></div></th>
                </tr>
                <tr bgcolor="#339933">
                  <th width="139" bgcolor="#FFFFFF" scope="row">&nbsp;</th>
                  <th width="139" bgcolor="#FFFFFF" scope="row">&nbsp;</th>
                  <th width="4" bgcolor="#FFFFFF" scope="row">&nbsp;</th>
                  <th width="258" height="29" bgcolor="#FFFFFF" scope="row"><div align="center"><span class="style20"><span class="style19"><span class="style1"><a href="../Kollyronky.com/companys details.php" target="mainframe" style="font-size: 10px; color: #633; font-weight: bold;">Our Bank Details </a></span></span></span></div></th>
                  <th colspan="2" bgcolor="#FFFFFF" class="style19" scope="row">
                  
                  
                  
<?php
					
					 if(isset($_SESSION['type']))
				  {
				  
				if ($_SESSION['type']== "admin"){
				 
				  echo "<a href='admin_page.php '> Switch to administration </a>";}
				  
				  
				  }
				  

?>
                  <span style="font-weight: bold"></span></th>
                </tr>
                
                <tr bgcolor="#FFFFFF">
                  <th height="14" colspan="6" scope="row">
                  <ul id="css3menu1" class="topmenu">
	<li class="topfirst">
	  <div align="center"><a href="../kollyronky-monex.com/agent_page.php" style="height:20px;line-height:20px;"><img src="../kollyronky-monex.com/me_files/css3menu1/home.png" alt=""/>Home</a></div>
	</li>
	<li class="topmenu">
	  <div align="center"><a href="../kollyronky-monex.com/agent_new_customer_reg.php" style="height:20px;line-height:20px;"><img src="../kollyronky-monex.com/me_files/css3menu1/service.png" alt=""/>Create New Customers</a></div>
	</li>
	<li class="topmenu">
	  <div align="center"><a href="../kollyronky-monex.com/agent_cust_list.php" style="height:20px;line-height:20px;">My Customer Beneficiaries</a></div>
	</li>
	<li class="topmenu">
	  <div align="center"><a href="../kollyronky-monex.com/agent_cust_trans_report.php" style="height:20px;line-height:20px;">Previous Transactions</a></div>
	</li>
	<li class="topmenu">
	  <div align="center"><a href="../kollyronky-monex.com/agent_edit.php" style="height:20px;line-height:20px;">Modify Profile</a></div>
	</li>
	<li class="topmenu">
	  <div align="center"><a href="../kollyronky-monex.com/agent_search_trans.php" style="height:20px;line-height:20px;"><img src="../kollyronky-monex.com/me_files/css3menu1/find.png" alt=""/>Search</a></div>
	</li>
	<li class="topmenu">
	  <div align="center"><a href="../kollyronky-monex.com/agent_commission.php" style="height:20px;line-height:20px;">My Commission</a></div>
	</li>
	<li class="topmenu">
	  <div align="center"><a href="../kollyronky-monex.com/agent_change_password.php" style="height:20px;line-height:20px;">Modiy Password</a></div>
	</li>
    
    <li class="topmenu">
	  <div align="center"><a href="#" style="height:20px; line-height:20px; color: #F00;">Credit Remaining=
&pound;<?php
	 
	  $email= mysql_real_escape_string($_SESSION['email']);
		
$link = mysql_connect("localhost","kollyronky_mone","ax3bUKbT")or die($mysql_error);
 mysql_connect("localhost", "kollyronky_mone", "ax3bUKbT") or die(mysql_error()); 
	 mysql_select_db("kollyronky_mone") or die(mysql_error()); 
 $check_ls1 = mysql_query("SELECT credit FROM agent WHERE email='$email' ORDER BY id DESC LIMIT 1  ") or die('Query failed: ' . mysql_error());
 $check_lv2 = mysql_query("SELECT * FROM agent") or die('Query failed: ' . mysql_error());

 $table_array = mysql_fetch_array($check_lv2);

  if(isset($table_array) && $table_array[0] != "") {
while($te=mysql_fetch_array($check_ls1)){

echo ($te['credit']);

}




 }
	
	?>
	  
      
      
      
      
      
      </a></div>
	</li>
	<li class="toplast">
	  <div align="center"><a href="../kollyronky-monex.com/logout.php" style="height:20px;line-height:20px;"><img src="../kollyronky-monex.com/me_files/css3menu1/register.png" alt=""/>Log Out</a></div>
	</li>
</ul><p class="_css3m"><a href="http://css3menu.com/">CSS3 Menu Link Css3Menu.com</a></p>
<!-- End css3menu.com BODY section -->
                  </th>
                </tr>
                <tr>
                  
                </tr>
                
    </table>
  </blockquote>
</div>  
<p>&nbsp;</p>
</body>
</html>
"

