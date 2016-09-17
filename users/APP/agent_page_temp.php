
<?php session_start();
require_once('calendar/classes/tc_calendar.php');
?><script language="javascript" src="calendar/calendar.js"></script>
<script type="text/javascript" src="SPL_AJAX_Full.js"></script>

<?php 



 // Connects to your Database 

 include "conn.php";  

 
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


if(isset($_POST['Search']))
			// if( $_SERVER['REQUEST_METHOD'] == 'POST' )
{ 




$_SESSION['txt']=$_POST['txt'];
echo" <script type='text/javascript'>
 
 {

window.location='agent_cust_search.php';
 }
</script> ";
	

}
?>
?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" href="me_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />

<link href="" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="../Kunzleltd.com/nav.css">
<style type="text/css">
<!--
body {
	background-color: #39F;
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
	font-size: large;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #F00;
}
.style12 {color: #FFFFFF; font-size: 10px; }
.style17 {
	font-size: 14px;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
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
.style13 {color: #330000; font-weight: bold; }
.style14 {	font-size: 9px;
	font-style: italic;
	font-weight: bold;
	color: #00FF00;
}
.style15 {	color: #FF0000;
	font-size: 10px;
}
.style171 {color: #0000FF}
.style191 {color: #660033}
.style201 {	font-size: 12px;
	font-style: italic;
}
.style4 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
.style9 {color: #000000}
.style11 {	color: #FFFFFF;
	font-size: 12px;
}
.style11 {	color: #FFFFFF;
	font-size: 18px;
}
.style2 {	font-size: 11px;
	font-style: italic;
	font-weight: bold;
}
.style16 {	color: #CCCCCC;
	font-size: 12px;
}
.style21 {	font-size: 18px;
	color: #FFFFFF;
}
.style3 {color: #FF0000}
.style41 {	font-size: 13px;
	color: #0000FF;
}
.style6 {font-size: 11px}
.style7 {font-size: 12px}
.style8 {font-size: 14px}
-->
</style>
</head>

<body>



<STYLE type="text/css">
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
/* Shown only for "Internal" Licenses, not Web Use */
 .SPLAddressListLicenseLine{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 10px;
    text-align: center
    margin-top: 0;
    margin-bottom: 0;
    }
 </STYLE>
											
	<script language="javascript" type="text/javascript">
    function toggleMe(val)
    {
	
    var b_actno = document.getElementById('b_actno');
    var b_abank = document.getElementById('b_abank');
	 var b_pbank = document.getElementById('b_pbank');
	 var b_idtype = document.getElementById('b_idtype');
    if(val=='Pick Up')
    {
    b_actno.style.display = "none";
    b_abank.style.display = "none";
	b_pbank.style.display = "block";
	b_idtype.style.display = "block";
	
    }
    else
    {
    b_actno.style.display = "block";
    b_abank.style.display = "block";
	b_pbank.style.display = "none";
	b_idtype.style.display = "none";
	
    }
    }
    </script>
	
	<?php
	if(isset($_GET['c_name']) && !empty($_GET['c_name']) AND isset($_GET['c_email']) && !empty($_GET['c_email']) )
{

	// Verify data
	$c_name = mysql_escape_string($_GET['c_name']); // Set email variable
	$c_email = mysql_escape_string($_GET['c_email']); // Set email variable

	//$_SESSION['r_fname']= $r_fname;
	
	//echo "<strong>Account holder: </strong>";
	//echo $_SESSION['email'];

//$_SESSION['r_actno']= "None";
	
	}
	
	
	
	
	?>
<div id="header">  
  <blockquote>
              <table width="870" height="1045" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
                <tr bgcolor="#339933">
                  <th height="15" colspan="3" bgcolor="#FFFFFF" scope="row"><p><span class="style10"><img src="about us_clip_image002.jpg" width="28" height="43" />Kunzle ltd</span></p></th>
                  <th width="221" bgcolor="#333300" scope="row"><p><span class="nw">Welcome</span><span class="style17">
<?php 	
				   if(isset($title)){
				   
				 $title=  strtoupper($_SESSION['title']);
				
	echo "$title";} ?>
				
					
					
					<?php 	
				   if(isset($use)){
				   
				  $use=  strtoupper($_SESSION['s_fname']);
				
	echo "$use";} ?>
                  !</span></p>
                    <div align="center"><span class="style"><span class="style12"><strong>AGENT ID</strong>:
                      <?php 	
				   if(isset($use)){
				   
				  $id=  $_SESSION['id'];
				
	echo "$id";} ?>
                  </span></span></div></th>
                  <th width="101" bgcolor="#333300" scope="row"><div align="right"><span class="style19">last login</span> <span class="style19">at: -</span></div></th>
                  <th width="180" bgcolor="#333300" scope="row">
				  
				    <div align="left"><span class="style20">
			        <?php 	
				   if(isset( $_SESSION['date'])){
				   
				  $use=  strtoupper( $_SESSION['date']);
				
	echo "$use";} ?>
		          &nbsp;</span></div></th>
                </tr>
                <tr bgcolor="#339933">
                  <th width="182" bgcolor="#FFFFFF" scope="row">&nbsp;</th>
                  <th width="182" bgcolor="#FFFFFF" scope="row">&nbsp;</th>
                  <th width="4" bgcolor="#FFFFFF" scope="row">&nbsp;</th>
                  <th width="221" height="29" bgcolor="#333300" scope="row"><div align="right"><span class="style20"><span class="style19"><span class="style1"><a href="../Kunzleltd.com/companys details.php" target="mainframe" style="font-size: 10px">Our Bank Details </a></span></span></span></div></th>
                  <th colspan="2" bgcolor="#333300" scope="row"><span class="style20"><span class="style19">
                    <?php if(isset($_SESSION['type']))
				  {
				  
				if ($_SESSION['type']== "admin"){
				 
				  echo "<a href='admin_page.php '> Switch to administration </a>";}
				  
				  
				  }
				  ?>
                  </span></span></th>
                </tr>
                
                <tr bgcolor="#FFFFFF">
                  <th height="14" colspan="6" bgcolor="#CCCCCC" scope="row">
                  <ul id="css3menu1" class="topmenu">
	<li class="topfirst">
	  <div align="center"><a href="agent_page.php" style="height:20px;line-height:20px;"><img src="me_files/css3menu1/home.png" alt=""/>Home</a></div>
	</li>
	<li class="topmenu">
	  <div align="center"><a href="agent_new_customer_reg.php" style="height:20px;line-height:20px;"><img src="me_files/css3menu1/service.png" alt=""/>Create New Customers</a></div>
	</li>
	<li class="topmenu">
	  <div align="center"><a href="agent_cust_list.php" style="height:20px;line-height:20px;">My Customer Beneficiaries</a></div>
	</li>
	<li class="topmenu">
	  <div align="center"><a href="agent_cust_trans_report.php" style="height:20px;line-height:20px;">Previous Transactions</a></div>
	</li>
	<li class="topmenu">
	  <div align="center"><a href="agent_edit.php" style="height:20px;line-height:20px;">Modify Profile</a></div>
	</li>
	<li class="topmenu">
	  <div align="center"><a href="agent_search_trans_php" style="height:20px;line-height:20px;"><img src="me_files/css3menu1/find.png" alt=""/>Search</a></div>
	</li>
	<li class="topmenu">
	  <div align="center"><a href="agent__commission.php" style="height:20px;line-height:20px;">My Commission</a></div>
	</li>
	<li class="topmenu">
	  <div align="center"><a href="agent_change_password" style="height:20px;line-height:20px;">Modiy Password</a></div>
	</li>
	<li class="toplast">
	  <div align="center"><a href="logout.php" style="height:20px;line-height:20px;"><img src="me_files/css3menu1/register.png" alt=""/>Log Out</a></div>
	</li>
</ul><p class="_css3m"><a href="http://css3menu.com/">CSS3 Menu Link Css3Menu.com</a></p>
<!-- End css3menu.com BODY section -->
                  </th>
                </tr>
<tr>
                  <th colspan="6" valign="top" scope="row"></th>
                </tr>
                <tr>
                  <th colspan="6" valign="top" scope="row"><table width="1178" height="70" border="0">
                    <tr>
                      <td width="50" height="32">&nbsp;</td>
                      <td width="29">&nbsp;</td>
                      <td width="29">&nbsp;</td>
                      <td width="29">&nbsp;</td>
                      <td width="948"><form id="form2" name="form2" method="post" action="">
                        <div align="right">
                          <table width="200" border="0">
                            <tr>
                              <td width="134"><input type="text" name="txt" id="txt" /></td>
                              <td width="56"><div align="right">
                                <input type="submit" name="Search" id="Search" value="Search" />
                              </div></td>
                            </tr>
                          </table>
                        </div>
                      </form></td>
                    </tr>
                    <tr>
                      <td height="32" colspan="5">
                      
                      
                     
                      
                      
                      
                      
                      &nbsp;</td>
                    </tr>
                    </table>
                  <p>&nbsp;
                  
                  
                  
                  
                  </p></th>
                </tr>
    </table>
  </blockquote>
</div>  
<p>&nbsp;</p>




</body>
</html>
