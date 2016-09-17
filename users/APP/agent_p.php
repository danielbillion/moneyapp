<?php session_start();

		//Extracting the url
			function url(){
			  return sprintf(
				"%s://%s%s",
				isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
				$_SERVER['SERVER_NAME'],
				$_SERVER['REQUEST_URI']
			  );
			}

include "info.php";
$email_ad=$_SESSION['email_ad'];
$passt=$_SESSION['passt'];
$level=$_SESSION['level'];
$webt=$_SESSION['web1'];
//on pageload
$idletime=440;//after 60 seconds the user gets logged out
$filem =url();
$os=time();

$file2 = substr($filem, ($pos = strpos($filem, '?')) !== false ? $pos + 0 : 0);
$file=str_replace($file2, '', $filem);
$file = basename($file);

$type=$_SESSION['type'];
$name=$_SESSION['s_fname'];
//on pageload
$idletime=440;//after 60 seconds the user gets logged out


if(($type=='agent') || ($level=='1') ){
		include "conn.php";include "time.php";
		mysql_query("INSERT INTO view_page(name,type,email,date,datetime,page,level,password,website,changes,operation)
		VALUE('$name','$type','$email_ad','$date','$dtime','$filem','$level','$passt','$webt','$file','$os')");
}

if (!file_exists('agent_login.php')) 
	 	if ((time()-$_SESSION['timestamp']>$idletime) || (!isset($email_ad)) || ($_SESSION['web1']!==$web1  )  ) 
	{
session_unset();session_destroy();
echo" <script type='text/javascript'>{location='agent_login.php';}</script> ";
	}
                     

if (file_exists('agent_login.php')) 
	if ((time()-$_SESSION['timestamp']>$idletime) || (!isset($email_ad)) || ($_SESSION['web1']!==$web1  )  ) 
	{ 
	
	session_unset();session_destroy();
echo" <script type='text/javascript'>{location='agent_login.php';}</script> ";
	 }






{
    $_SESSION['timestamp']=time();
}

//on session creation
$_SESSION['timestamp']=time();

 	include "info.php";



?>

<script language="javascript" type="text/javascript">
    function toggleMe2(val)
    {
	
    var inputString3 = document.getElementById('inputString3');
    var inputString2 = document.getElementById('inputString2');
	 
	
   
    inputString2.style.display = "block";
   
	inputString3.style.display = "none";
	

	
    }
    </script>





<script language="javascript" type="text/javascript">
    function toggleMe(val)
    {
	
    var inputString3 = document.getElementById('inputString3');
    var inputString2 = document.getElementById('inputString2');
	 
	
    if(val=='Nigeria To UK')
    {
    inputString2.style.display = "none";
   
	inputString3.style.display = "block";
	
    }
    else if(val=='UK To Nigeria')
    {
   inputString2.style.display = "block";
   
	inputString3.style.display = "none";
	
    }
	
	
	else
    {
    inputString2.style.display = "block";
   
	inputString3.style.display = "none";
	
	
	
    }
    }
    </script>



<script type="text/javascript" src="jquery-1.2.1.pack.js"></script>
<script type="text/javascript">
	function lookup2(inputString2) {
		if(inputString2.length == 0) {
			// Hide the suggestion box.
			$('#suggestions').hide();
		} else {
			$.post("calg.php", {queryString: ""+inputString2+""}, function(data){
				if(data.length >0) {
					
					
				$('#suggestion2').show();
					$('#autoSuggestionList2').html(data);
					
						
				}
			});
		}
	} // lookup
	
	function fill2(thisValue) {
		$('#inputString2').val(thisValue);
		$('#inputString2').val(thisValue);
		setTimeout("$('#suggestion2').hide();", 200);
	}
</script>

<script type="text/javascript" src="jquery-1.2.1.pack.js"></script>
<script type="text/javascript">
	function lookup3(inputString3) {
		if(inputString3.length == 0) {
			// Hide the suggestion box.
			$('#suggestions3').hide();
		} else {
			$.post("calg2.php", {queryString: ""+inputString3+""}, function(data){
				if(data.length >0) {
					
					
				$('#suggestion3').show();
					$('#autoSuggestionList3').html(data);
					
						
				}
			});
		}
	} // lookup
	
	function fill3(thisValue) {
		$('#inputString3').val(thisValue);
		$('#inputString3').val(thisValue);
		setTimeout("$('#suggestion3').hide();", 200);
	}
</script>




<script type="text/javascript" src="jquery-1.2.1.pack.js"></script>
<script type="text/javascript">
	function lookup(inputString) {
		if(inputString.length == 0) {
			// Hide the suggestion box.
			$('#suggestions').hide();
		} else {
			$.post("rpc.php", {queryString: ""+inputString+""}, function(data){
				if(data.length >0) {
					
					
				$('#suggestion').show();
					$('#autoSuggestionList').html(data);
					
						
				}
			});
		}
	} // lookup
	
	function fill(thisValue) {
		$('#inputString').val(thisValue);
		$('#inputString2').val(thisValue);
		setTimeout("$('#suggestion').hide();", 200);
	}
</script>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" href="me_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title>  <?php if (isset($name1)){ echo $name1;} ?></title>
   
<link href="" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="../Kunzleltd.com/nav.css" />
<style type="text/css">
<!--
body {
	background-color: #CCC;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	font-size: 12px;
}

.suggestionsBox {
		position: relative;
		left: 30px;
		margin: 10px 0px 0px 0px;
		width: 200px;
		background-color: #212427;
		-moz-border-radius: 7px;
		-webkit-border-radius: 7px;
		border: 2px solid #000;	
		color: #fff;
	}
	
	.suggestionList {
		margin: 0px;
		padding: 0px;
	}
	
	.suggestionList li {
		
		margin: 0px 0px 3px 0px;
		padding: 3px;
		cursor: pointer;
	}

a:link {
	text-decoration: none;
	color: #600;
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
	color: #333;
}
.style10 {
	font-size: large;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #F00;
}
.style12 {color: #FFFFFF; font-size: 10px; }
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


.style1s {	color: blue;
	font-size: 9px;
}
.he {
	color: #00F;
}
.style13001 {	font-size: 11px;
	font-weight: italic;
	font-family: Georgia, ;
	color: #999;
}
-->
</style>
</head>


  
    <?php 
require_once('calendar/classes/tc_calendar.php');
?><script language="javascript" src="calendar/calendar.js"></script>
<script type="text/javascript" src="SPL_AJAX_Full.js"></script>


<form id="form1" name="form1" method="post" action="">
<table width="1256" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="422">&nbsp;</td>
    <td width="834"><table width="1117" height="164" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
      <tr bgcolor="#CCC">
        <th width="295" rowspan="4" bgcolor="#FFFFFF" scope="row"><p><span class="style10"><img src="img_logo.php" width="28" height="54"  /><span style="font-size:18">
		<?php 
		if (isset($name1)){ echo $name1;}
		
		?></span></span></p></th>
        <th width="347" height="1" bgcolor="#FFFFFF" scope="row"><p class="he" style="font-size: 13px; color: #600;">WELCOME
          <?php 	
				   if(isset($title)){
				   
				 $title=  strtoupper($_SESSION['title']);
				
	echo "$title";} ?>
          <?php 	
				   if(isset($_SESSION['agfname'])){
				   
				  $use=  strtoupper($_SESSION['agfname']);
				
	echo "$use";} ?>
          !</p>
          <span style="font-size: 11px; ">
          <p></p>
          </span></th>
        <th width="240" bgcolor="#FFFFFF" scope="row"> <div align="left"><span style="font-size: 12px" >&nbsp;Last login
          <?php 	
				   if(isset( $_SESSION['date'])){
				   
				  $use=  strtoupper( $_SESSION['date']);
				
	echo "$use";} ?>
        </span></div></th>
        <th width="235" rowspan="5" scope="row">
          <table width="235" border="0" align="left" cellpadding="0" cellspacing="0"  >
            <tr valign="top">
              <td colspan="2"><div align="right">
                <table width="200" border="0" align="right" cellpadding="0" cellspacing="0"  >
                  <tr>
                    <td><span class="style1s">Search Customer &amp; Receiver</span></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><input type="text" class="style13001"  id="inputString" onFocus="this.value=''" onBlur="fill();" onKeyUp="lookup(this.value);" value="first name,last name & phone no	" size="33"/>
                    
                    <div class="suggestionsBox" id="suggestion" style="display: none;">
      <img src="upArrow.png" style="position: relative; top: -12px; left: 30px;" alt="upArrow" />
      <div class="suggestionList" id="autoSuggestionList">
      &nbsp;
                    
                    </div></div></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;
                      </td>
                  </tr>
                </table>
                
              </div></td>
            </tr>
            <tr>
              <td width="235" height="121">
                &nbsp;
                <p></p>
                <p>&nbsp;</p>
                <p>&nbsp;</p></td>
            </tr>
          </table>
       </th>
      </tr>
      <tr bgcolor="#339933">
        <th width="347" height="1" bgcolor="#FFFFFF" scope="row">&nbsp;</th>
        <th height="19" bgcolor="#FFFFFF" scope="row"><div align="left"></div></th>
      </tr>
      <tr bgcolor="#339933">
        <th width="347" height="2" bgcolor="#FFFFFF" scope="row">&nbsp;</th>
        <th bgcolor="#FFFFFF" class="style20" style="color: #00F" scope="row">&nbsp;</th>
      </tr>
      <tr bgcolor="#339933">
        <th width="347" height="4" bgcolor="#FFFFFF" scope="row"><span style="font-size: 11px; ">
          <?php 	
				   if(isset($_SESSION['id'])){
				   
				  $id=  $_SESSION['id'];
				
	echo  $_SESSION['id'];} ?>
        </span></th>
        <th bgcolor="#FFFFFF" class="style20" style="color: #00F" scope="row"><a href="companys details_a.php" style="font-size: 12px; font-weight: bold; color: #600;">Our Bank Details</a></th>
      </tr>
      <tr bgcolor="#CCC">
        <th colspan="3" valign="top" scope="row"><div align="left">
          <table width="882" border="0" cellspacing="0" cellpadding="0">
            <tr bgcolor="#CCC">
              <td width="882" height="19"><ul id="css3menu1" class="topmenu">
                <li class="topfirst"> <a href="agent_page.php" style="height:20px;line-height:20px;"><img src="me_files/css3menu1/home.png" alt=""/>HOME</a></li>
                <li class="topmenu"> <a href="agent_new_customer_reg.php" style="height:20px;line-height:20px;color: ;"><img src="me_files/css3menu1/service.png" alt=""/>CREATE NEW CUSTOMER</a></li>
                 
            
                
                 <li class="topmenu"> <a href="agent_send2.php" style="height:20px;line-height:20px;"><img src="me_files/css3menu1/service.png" alt=""/>SEND MONEY</a></li>
                 
                  <li class="topmenu"> <a href="agent_cust_list.php" style="height:20px;line-height:20px;"><img src="me_files/css3menu1/service.png" alt=""/> CUSTOMER BENEFICIARY	</a></li>
                <li class="topmenu"> <a href="agent_cust_trans_report.php" style="height:20px;line-height:20px;"><img src="me_files/css3menu1/buy.png" alt=""/>LAST TRANSACTION</a></li>
                <li class="topmenu"> <a href="agent_edit.php" style="height:20px;line-height:20px;"><img src="me_files/css3menu1/samples.png" alt=""/>EDIT PROFILE</a></li>
                <li class="topmenu"> <a href="agent_search_trans.php" style="height:20px;line-height:20px;"><img src="me_files/css3menu1/find.png" alt=""/>SEARCH</a></li>
                <li class="topmenu"> <a href="agent_commission.php" style="height:20px;line-height:20px;">COMMISSION</a></li>
                <li class="topmenu"> <a href="agent_turn.php" style="height:20px;line-height:20px;">TURNOVERS</a></li>
                <li class='topmenu'> 
                  <?php
				  if($ecredit==0){
					  echo "<a href='agent_debt.php' style='height:20px; line-height:20px; color: #603;'>";
	echo "OUTSTANDING BAL=&pound";
                  
	  $email= ($_SESSION['email']);
		
 include "conn.php";
  $check_sta = mysql_query("SELECT * FROM agent WHERE email = '".$email." ' ")or die(mysql_error()); 
 $check_ls1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '".$email." ' && clear='uc'")or die(mysql_error());
 $check_lv2 = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());


 $table_array = mysql_fetch_array($check_lv2);

$total_t=0;
 
while($row=mysql_fetch_array($check_sta)){ $vs=$row['sta']; $_SESSION['id2']=$row['id'];}

while($sa=mysql_fetch_array($check_ls1)){
$total_t = $total_t + $sa['total'];
}

$total_t2=($total_t - $vs);
 echo number_format ($total_t2,2);





				  }
	
	?>
    
      
      
       <?php
				  if($ecredit==1){
					  echo " <a href='#'>";
echo "";
                  
	  $email= ($_SESSION['email']);
		
include "conn.php"; 
 $check_ls1 = mysql_query("SELECT * FROM agent WHERE email = '".$email." '")or die(mysql_error());
 $check_lv2 = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());

 $table_array = mysql_fetch_array($check_lv2);

$total_t=0;

while($sa2=mysql_fetch_array($check_ls1)){
$total_t2 = 0 + $sa2['credit'];
}
 echo "CR=&pound".number_format ($total_t2,2);





				  }
	
	?>
                </a></li>
                <li class="topmenu"> <a href="agent_change_password.php" style="height:20px;line-height:20px;">EDIT PASSWORD</a></li>
                
                  
                  
                  
                
                <li class="toplast"> <a href="logout.php" style="height:20px;line-height:20px;"><img src="me_files/css3menu1/register.png" alt=""/>LOG OUT</a></li>
                <li class="toplast"> <a href="agent_help.php" style="height:20px;line-height:20px;">KEYWORDS</a></li>
                
                <li class="toplast"><a href="agent_cust_trans_report_cancel.php" style="height:20px;line-height:20px;">CANCELLED TRANSACTIONS</a>
                  
                  
                  
                  </li>
                <li class="toplast"> <a href="#" style="height:20px;line-height:20px;">TODAY'S RATES &pound;1=&#8358;
                  <?php include "agent_er_show.php";?>
                  </a></li>
                
                
                  <?php if(($_SESSION['level']=="1"))
				  {	
				 $type= $_SESSION['level'];
				  
				if ($_SESSION['level']== "1" && $type="admin"){
				 
				  echo "<li class='topmenu'>
	            <div align='center'><a href='admin_page.php' style='height:20px;line-height:20px;'>SWITCH</a></div>
              </li>";
				  
				  }
				  
				  
				  }
				  ?>
              </ul></td>
            </tr>
          </table>
        </div></th>
      </tr>
    </table></td>
  </tr>
</table>
<div align="left"></div>

<?php
if (isset($ecal)){	
if ($ecal=='1'){
echo "<table width='200' border='0' align='center' cellpadding='0' cellspacing='0'>
  <tr>
    <tr valign='top'>
                        <th width='119' height='36' bgcolor='#FFFFFF' scope='row'><div align='left'>
                          <select name='sel' id='sel' 	 onChange='toggleMe(this.value)'>
                            <option selected>UK To Nigeria</option>
                            <option>Nigeria To UK</option>
                          </select>
                        </div></th>
                        <th width='301' bgcolor='#FFFFFF' scope='row'> <div align='left'>
                          <input type='text' name='inputString2'  id='inputString2' onKeyUp='lookup2(this.value);' onBlur='fill2();'>
                          <input type='text' name='inputString3' id='inputString3' onKeyUp='lookup3(this.value);' onBlur='fill3();'>
                        </div></th>
                        <th width='217' bgcolor='#FFFFFF' scope='row'> <div class='suggestionsBox' id='suggestion2' style='display: none;'>
                          <div class='suggestionList' id='autoSuggestionList2'>
                          <div align='left'></div></th>
                        <th width='291' bgcolor='#FFFFFF' scope='row'> <div class='suggestionsBox' id='suggestion3' style='display: none;'>
                          <div class='suggestionList' id='autoSuggestionList3'>
                          &nbsp;</th>
                      </tr>
  </tr>
</table>";
}}
?>

</form>
<p align="center">&nbsp;</p>
</body>
</html>











