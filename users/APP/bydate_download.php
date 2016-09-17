<?php include "admin_p.php"; ?>
<?php 
require_once('calendar/classes/tc_calendar.php');
?>
<script language="javascript" src="calendar/calendar.js"></script>
 <script type="text/javascript" src="SPL_AJAX_Full.js"></script>
 

<?php  



 // Connects to your Database 

 include "conn.php";  

 
 //checks cookies to make sure they are logged in 

 


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" href="me_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />

<link href="" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="../Kunzleltd.com/nav.css">
<link rel="stylesheet" href="admin_menu_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>

<style type="text/css">
<!--
body {
	background-color: #D6D6D6;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	color: #00F;
	font-size: 18px;
	font-weight: bold;
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
	color: #FFF;
	background-color: #FFF;
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
	color: #FFF;
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
nx {
	font-size: 11px;
}
hg {
	color: #00F;
}
new {
	text-align: center;
}
gha {
	text-align: center;
}
.style30 {color: #F0F0F0}
.style30 {color: #FFFFFF}
fx1 {
	color: #FFF;
}
fgar {
	text-align: center;
}
adg {
	text-align: center;
}
body,td,th {
	color: #CCC;
}
.style101 {font-size: 12px;
	color: #000099;
	font-weight: bold;
}
.style111 {color: #000099}
.style161 {color: #330000;
	font-size: 12px;
	font-weight: bold;
}
.style31 {color: #FFFFFF;
	font-size: 12px;
}
.style31 {
	color: #00F;
	font-size: 18px;
}
.style22 {font-size: 11px}
.style61 {font-size: 10px}
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
	$c_name = ($_GET['c_name']); // Set email variable
	$c_email = ($_GET['c_email']); // Set email variable

	//$_SESSION['r_fname']= $r_fname;
	
	//echo "<strong>Account holder: </strong>";
	//echo $_SESSION['email'];

//$_SESSION['r_actno']= "None";
	
	}
	
	
	
	
	?>
<div id="header">  
  <blockquote>
    <div align="center">
    <table width="926" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <th width="455" colspan="3" class="style10" scope="row"><table width="638" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th colspan="3" class="style31" scope="row">&nbsp;</th>
          <th class="style31" scope="row">&nbsp;</th>
          </tr>
        <tr>
          <th colspan="3" class="style31" scope="row"><div align="left" class="style61"></div></th>
          <th class="style31" scope="row">Customer</th>
          </tr>
        <tr>
          <th colspan="4" scope="row"><table width="793" height="42" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
            <tr>
              <th width="793" scope="row"><form id="form1" name="form1" method="post" action="">
                <div align="left">
                  <table width="794" height="25" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <th scope="row">&nbsp;</th>
                      <th scope="row">&nbsp;</th>
                      <th scope="row">&nbsp;</th>
                      </tr>
                    <tr>
                      <th scope="row">&nbsp;</th>
                      <th scope="row">&nbsp;</th>
                      <th scope="row">&nbsp;</th>
                      </tr>
                    <tr>
                      <th width="371" scope="row">&nbsp;</th>
                      <th width="367" scope="row"><div align="left"><span class="style31">
                        <input name="Submit" type="submit" id="Submit" value="Submit" />
                        </span></div></th>
                      <th width="56" scope="row">&nbsp;</th>
                      </tr>
                    <tr>
                      <th colspan="3" scope="row">&nbsp;</th>
                      </tr>
                    <tr>
                      <th colspan="3" scope="row"><table width="361" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CC6633">
                        <tr>
                          <th width="98" bgcolor="#FFFFFF" class="style101" scope="row"><div align="center">From </div></th>
                          <th width="262" bgcolor="#FFFFFF" scope="row"> <?php 
				  
				   {$theDate3 = isset($_REQUEST["date3"]) ? $_REQUEST["date3"] : "";}
				  
				   $myCalendar3 = new tc_calendar("date3", true);
					  $myCalendar3->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar3->setDate(date('d'), date('m'), date('Y'));$myCalendar3->setPath("calendar/");
					  $myCalendar3->setYearInterval(2010, 2016); $myCalendar3->dateAllow('2010-01-01', '2016-03-01'); $myCalendar3->writeScript(); 
				  
				  ?>
                            &nbsp;</th>
                          </tr>
                        <tr>
                          <th bgcolor="#FFFFFF" scope="row"><span class="style10">
                            <label>
                            <div align="center">To</span></div>
                            <div align="center"></div>
                            </label></th>
                          <th bgcolor="#FFFFFF" scope="row"> <?php 
				  
				   {$theDate4 = isset($_REQUEST["date4"]) ? $_REQUEST["date4"] : "";}
				  
				   $myCalendar4 = new tc_calendar("date4", true);
					  $myCalendar4->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar4->setDate(date('d'), date('m'), date('Y'));$myCalendar4->setPath("calendar/");
					  $myCalendar4->setYearInterval(2010, 2016); $myCalendar4->dateAllow('2010-01-01', '2016-03-01'); $myCalendar4->writeScript(); 
				  
				  ?>
                            &nbsp;</th>
                          </tr>
                        </table></th>
                      </tr>
                    </table>
                  </div>
                </form></th>
              </tr>
            </table></th>
          </tr>
        </table></th>
    </tr>
    </table>
</div>
  </blockquote>
</div>  
<p>&nbsp;</p>
</body>
</html>
<?php session_start();


 if (isset($_POST['Submit'])) {

 

 		$ts3 = isset($_REQUEST["date3"]) ? $_REQUEST["date3"] : ""; 
		$ts4 = isset($_REQUEST["date4"]) ? $_REQUEST["date4"] : ""; 
		
		
		$_SESSION['ts3'] =  $ts3;
		$_SESSION['ts4'] =  $ts4;
		
	
 
 // header('Location: bydate_proc_download_c.php ');
  
   echo" <script type='text/javascript'>
 
 {

location='bydate_proc_download.php';
 }
</script> ";
  
  
 }
 
 


?>