<?php session_start();

								//$r_transfer=($_GET['r_transfer']);
								$test =(rand(100,10000));
								//= (('dkl' . $test));
								$email= ($_SESSION['email']);
									$date=date("Y-m-d");
$rid=($_GET['rid']);									
$agcid=($_GET['agcid']);									
$bfname=($_GET['b_fname']);
$blname=($_GET['b_lname']);					
$sender_email = ($_GET['custe']);
echo $sender_email; echo $bfname;echo $blname;
$email= $_SESSION['email'];

$link = include "conn.php";
 include "conn.php";  
 $check = mysql_query("SELECT * FROM agent_new_customer") or die('Query failed: ' . mysql_error());
 $check0 = mysql_query("SELECT * FROM agent_new_customer WHERE id = '$agcid' ORDER BY fname  ")or die(mysql_error());
 $checkr = mysql_query("SELECT * FROM agent_cust_receiver WHERE id='$rid'  ")or die(mysql_error());
 $num=0;
$table_array = mysql_fetch_array($check);

if(isset($table_array) && $table_array[0] != "") {
 
while($row=mysql_fetch_array($check0)){

$c_name=$row['fname']." ". $row['lname'];
$c_email=$row['email'];
$_SESSION['']=$row['pnumber'];
$s_phone=$row['pnumber'];
$s_mphone=$row['mnumber'];
$addressc=$row['address'];
$postcode=$row['postcode'];
$town=$row['town'];
$county=$row['county'];
$country=$row['country'];

//echo $address;echo $postcode;echo $sender_email;

}
while($row=mysql_fetch_array($checkr)){

$r_transfer=$row['b_transfer'];
$r_transfer2=$row['b_transfer'];
$r_phone=$row['b_phone'];
echo $r_transfer;

if ($r_transfer=="Pick Up"){
	$r_bank=$row['b_pbank'];
	$r_idtype=$row['b_idtype'];
	$r_actno="None";

	}
	
	else {
	$r_bank=$row['b_abank'];
	$r_actno=$row['b_actno'];
	$r_idtype="None";
	}

//echo $address;echo $postcode;echo $sender_email;

}


}



	  
	

?> 


<?php 

								//$r_transfer=($_SESSION['r_transfer']);$email= ($_SESSION['email']);
								$email= ($_SESSION['email']);
								$c_email= ($_GET['custe']);
								$s_fname= (strtolower($_SESSION['s_fname']));
									$date=date("Y-m-d");
									  $r_name=$_GET['r_name'];
									  if(isset($address)){$senderd= $address;} if(!isset($address)){$senderd= "Unavailbl";}
									  
									 
									  
								
								
								
								
												$status=("Pending");
												 //$r_phone=($_SESSION['r_phone']);
												//$r_actno=($_SESSION['r_actno']);
												$ag_ps=("np");
												 $test =(rand(100,100000));
									
									include "transfer_code.php";
								include "code_proc.php";
								//echo "value=";echo $check2_code;
								
								//= (('tfc' . $test));
								include "time.php";
								
								//$dtime=date('Y-m-d H:i:s');
if (isset($_POST['Submit']) && $_POST['inputString']!=="" )
	
{

if($_POST['inputString']==0 ) {
 		{$msg = ' Empty field <br />';}

 	}	
include "conn.php"; 
 include "info.php"; 
 
$mon=$_POST['inputString'];
 				
				
				
	if ($ecredit==1){
$check_credit = mysql_query("SELECT * FROM agent WHERE email='$email'  ") or die('Query failed: ' . mysql_error());
while($ag_cr=mysql_fetch_array($check_credit)){
$ag_cred=$ag_cr['credit'];}

				 if ( $ag_cred >= $mon ){if (isset($_POST['Submit'])){include "pro.php";include "agent_quick_process.php";
				 
				 $newval=$ag_cred-$mon;
				 
				 mysql_query("UPDATE agent SET credit='$newval' WHERE email='$email'");
				
				 
				 	}else {echo "Insufficient credit";}}
	}
	
	if ($ecredit==0){
	// for Debt

 if (isset($_POST['Submit']))
  
  {
	
	include "pro.php";include "agent_quick_process.php";
		
	}
	
	
	}
									 
									 	
									 
								 
									 
								
									 
									 
			

}	

?>






<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<script type="text/javascript" src="jquery-1.2.1.pack.js"></script>
<script type="text/javascript">
	function lookup(inputString) {
		if(inputString.length == 0) {
			// Hide the suggestion box.
			$('#suggestions').hide();
		} else {
			$.post("calg.php", {queryString: ""+inputString+""}, function(data){
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
<script>
function exit()
{
var x=confirm("Are you sure you want to quit?")
if (x)
	window.location="agent_page.php"
	
	}s
</script>



<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title>Quick Transfer</title>
<style type='text/css'>
<!--
.style2 {
	color: #FFF;
	font-size: 22px;
}
.style7 {color: #0000FF}
.style10 {
	font-size: 12px;
	color: #000000;
}
.style12 {
	font-size: 16px;
}
.style13 {font-size: 12px; color: #000000; }
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style14 {font-size: 10px}
nwsize {
	font-size: 14px;
}
.style121 {	color: #000;
	font-size: 12px;
}
.style20 {	font-size: 9.5px;
	color: #FFFFFF;
}
.style21 {	font-size: 12px;
	color: #F00;
}
-->
</style>
</head>

<body>
<p align='left'></p>
	<form id='form1' name='form1' method='post' action=''>
	
  
  <label>
  
    <label></label>
    <div align="center">
      <table width="801" height="481" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <th width="797" height="479" scope="row"><div align="center">
            <blockquote>&nbsp;</blockquote>
            <table width="743" height="873" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <th height="49" colspan="5" style="font-size: 22px" scope="row"><img src="img_logo.php" width="28" height="54"  /><?php if(isset($_SESSION['name2'])){ echo  $_SESSION['name2'];} ?></th>
              </tr>
              <tr bgcolor="#CCCCCC">
                <th width="164" height="23" scope="row">&nbsp;</th>
                <th colspan="3" bgcolor="#993300" scope="row"><span class="style2">Quick Tranfer</span></th>
                <th width="172" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="23" colspan="5" class="style13" scope="row"><strong><span class="style14"><?php 
include "info.php";
 if (isset($addressbs)){ echo $addressbs; }  ?>
                </span>&nbsp;</strong></br><span class="style5">Phone:
                <?php if (isset($tel)){ echo $tel; }  ?>
,
<?php if (isset($tel2)){ echo $tel2; }  ?>
&nbsp; Email:
<?php if (isset($emailbs)){ echo $emailbs; }  ?>
,
<?php if (isset($web1)){ echo $web1; }  ?>
                </span></strong></strong></th>
              </tr>
              <tr>
                <th height="23" colspan="5" scope="row"><strong><span class="style14">&nbsp;</span></strong></th>
              </tr>
              <tr>
                <th height="40" scope="row">&nbsp;</th>
                <td class="style10">
                  <div align="right" class="style12"></div></td>
                <td colspan="2" class="style10"><div align="center" class="style12" style="font-size: 13px">
                  <div align="right"><span class="style12" style="font-size: 13px">
                    <?php if (isset($_GET['sdate']))
					$daten=$_GET['sdate'];
					//$dates=date("F j, Y, g:i a");
					$newDate = date("j  F  Y");
					echo $newDate;
				// echo $_GET['sdate'];
				 
				  ?>
                  </span></div>
                </div></td>
                <td class="style10"><div align="center">
                
                 
                  <?php if (isset($_GET['dtime']))
				   $ytime=$_GET['dtime'];
				  $newtime = date("h:i:A");
				   include "time.php";
				    
				  //$newtime = date("H:i:s a", time() + 0);
				// echo $_GET['dtime'];
				  echo $newtime;
				 
				  ?>
                </div></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="4" class="style10"><div align="center">
                
                 <?php  
    if(isset($msg)){  
		echo '<table width="200" border="0" bgcolor="#FF0033"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';} ?>
                
                
                </div></td>
              </tr>
              <tr>
                <th scope="row"><?php   if (isset($msg)) echo $msg;  ?></th>
                <td colspan="4" class="style10"><div align="left"></div></td>
              </tr>
              <tr>
                <th height="29" colspan="2" style="font-size: 14px" scope="row"><div align="left" class="style12">
                  <div align="center" style="font-size: 18px"><u>SENDER </u></div>
                  </div>                  <div align="center" class="style13">
                    <div align="left" class="style12"></div>
                </div></th>
                <td class="style10" style="font-size: 14px">&nbsp;</td>
                <td colspan="2" class="style10" style="font-size: 14px"><div align="center" style="font-size: 18px"><u>RECEIVER </u></div></td>
              </tr>
              
              <tr>
                <th height="47" style="font-size: 14px" scope="row"><div align="left" class="style12">SENDER NAME</div></th>
                <td class="style10" style="font-size: 14px"><div align="left"><span class="style12">
                  <?PHP  if (isset($c_name))
				
				echo  strtoupper($c_name);
				
				
				?>
                </span></div></td>
                <td width="27" class="style10" style="font-size: 14px"><div align="right" class="style12"></div></td>
                <td width="173" class="style10" style="font-size: 14px"><span class="style12">NAME</span></td>
                <td class="style10" style="font-size: 14px"><div align="left">
                  <?php if (isset($_GET['r_name'])) 
				  $r_name=$_GET['r_name'];
				  
				  echo strtoupper($_GET['r_name']);  ?>
                </div></td>
              </tr>
              <tr>
                <th rowspan="2" valign="top" class="style12" style="font-size: 14px" scope="row"><p align="left" class="style12">RESIDENCE</p></th>
                <td width="207" rowspan="2" class="style12" style="font-size: 14px"><div align="left">
                  <?php  
    if(isset($addressc)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo strtoupper ($addressc);} ?>
                  
                </div>                  
                  <div align="center" class="style12">
                    <div align="left">
                      
                    </div>
                  </div></td>
                <td height="27" valign="top" class="style12" style="font-size: 14px"><div align="right" class="style12"></div></td>
                <td height="27" valign="top" class="style12" style="font-size: 14px">PHONE NO</td>
                <td valign="top" class="style12" style="font-size: 14px"><div align="left">
                  <?php  if (isset($s_mphone)) echo strtoupper($s_mphone); ?> 
                  ;&nbsp; <?php  if (isset($s_phone)) echo strtoupper($s_phone); ?>
                </div></td>
              </tr>
              <tr>
                <td height="28" valign="top" class="style12" style="font-size: 14px"><div align="right" class="style12"></div></td>
                <td height="28" valign="top" class="style12" style="font-size: 14px">DESTINATION </td>
                <td valign="top" class="style12" style="font-size: 14px"><div align="left">NIGERIA</div></td>
              </tr>
              <tr>
                <th class="style12" style="font-size: 14px" scope="row"><div align="left" class="style12">POST CODE</div></th>
                <td class="style12" style="font-size: 14px">
                
                <?php  
    if(isset($postcode)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo strtoupper ($postcode);} ?>&nbsp;</td>
                <td height="35" colspan="2" class="style12" style="font-size: 14px"><div align="right"></div></td>
                <td class="style12" style="font-size: 14px"><div align="center"></div></td>
              </tr>
              <tr>
                <th height="32" style="font-size: 14px" scope="row"><div align="left" class="style12">COUNTRY</div></th>
                <td class="style10" style="font-size: 14px"><div align="left" class="style12">
                  <div align="left">UNITED KINGDOM</div>
                </div></td>
                <td colspan="2" class="style10" style="font-size: 14px"><div align="center"></div></td>
                <td class="style10" style="font-size: 14px"><div align="center"></div></td>
              </tr>
              <tr>
                <th height="35" style="font-size: 14px" scope="row"><div align="left" class="style12">PHONE NUMBER</div></th>
                <td class="style10" style="font-size: 14px"><div align="left" class="style12"><span class="style12" style="font-size: 14px">
                  <?php  
    if(isset($s_phone)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo strtoupper ($s_phone);} ?></span></div></td>
                <td colspan="2" class="style10" style="font-size: 14px"><div align="right"></div></td>
                <td class="style10" style="font-size: 14px"><div align="center"></div></td>
              </tr>
              <tr>
                <th height="24" colspan="5" style="font-size: 14px" scope="row"><hr /></th>
              </tr>
              <tr>
                <th height="24" style="font-size: 14px" scope="row"><div align="left" class="style12"></div></th>
                <td colspan="4" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th colspan="2" style="font-size: 14px" scope="row"><div align="left" class="style12">
                  <div align="left"><u style="font-size: 18px">TRANSACTIONS</u></div>
                </div>                  <div align="left" class="style12"></div></th>
                <td colspan="3" class="style10" style="font-size: 14px"><div align="left" class="style12"><u style="font-size: 18px; font-weight: bold;">MODE OF PAYMENT</div></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">Amount to be Sent</th>
                <td colspan="4" class="style13" style="font-size: 14px">
                 <input name="inputString"  id='inputString' onblur='fill();' onkeyup='lookup(this.value);' />
                
                &nbsp;</td>
              </tr>
              <tr>
                <th colspan="2" rowspan="8" style="font-size: 14px" scope="row"><div align="left">
                
                
          
          <div class="suggestionsBox" id="suggestion" style="display: none;">
				
				<div class="suggestionList" id="autoSuggestionList"> 
                
                
                
                </div></div></th>
                <td class="style10" style="font-size: 14px">
                  
                  <p align="center">&nbsp;</p></td>
                <td colspan="2" class="style10" style="font-size: 14px"><span class="style12">TODAY'S RATE: &pound;1= &#8358;
                    <?php 
				  $result = mysql_query('SELECT id,rate
                         FROM todays_rate
                     ORDER BY id DESC 
                        LIMIT 1') or die('Invalid query: ' . mysql_error());
						
						
						while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  
  echo number_format(($row['rate']),2);} 
				   ?>
                </span></td>
              </tr>
              <tr>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <td class="style10" style="font-size: 14px"><div align="center"></div></td>
                <td class="style10" style="font-size: 14px"><span class="style12">BANK PAYING</span></td>
                <td class="style10" style="font-size: 14px"><span class="style12">
                  <?php  if (isset($r_bank)) echo strtoupper( ($r_bank)); ?>
                </span></td>
              </tr>
              <tr>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <td class="style10" style="font-size: 14px"><div align="center" class="style12"></div></td>
                <td class="style10" style="font-size: 14px"><span class="style12">TRANSFER MODE</span></td>
               <td class="style10" style="font-size: 14px"><span class="style12">
                 <?php   echo $r_transfer2  ?>
               </span></td>
              </tr>
              <tr>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <td class="style13" style="font-size: 14px"><div align="center" class="style12"></div></td>
                <td class="style13" style="font-size: 14px"><span class="style12">MODE OF IDENTITY</span></td>
                <td class="style13" style="font-size: 14px">&nbsp;
                           <?php if (isset($r_idtype)){ 
				echo strtoupper(($r_idtype)); } ?>
     
                
                
                </td>
              </tr>
              <tr>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="left"><span class="style12">TRANSFER CODE </span></div></th>
                <td style="font-weight: bold" ><span>
                  <?php  if (isset($tcode)) echo ($tcode ); ?>
                </span></td>
                <td class="style13" style="font-size: 14px"><div align="center" class="style12"></div></td>
                <td class="style13" style="font-size: 14px"><span class="style12">ACCOUNT NUMBER</span></td>
                <td class="style13" style="font-size: 14px"><span class="style12">
                  <?php  if (isset($r_actno)) echo strtoupper( $r_actno); ?>
                </span></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="4" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="center" class="style12">
                  <div align="left">AGENT NAME</div>
                </div></th>
                <th style="font-size: 11px" scope="row"><div align="left"><span class="style13" style="font-size: 11px"><span class="style12"><?php if (isset($slogan2)) { echo $slogan2;}  ?></span></span></div></th>
                <th colspan="2" style="font-size: 14px" scope="row">&nbsp;</th>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="18" style="font-size: 14px" scope="row">&nbsp;</th>
                <th height="18" colspan="4" style="font-size: 14px" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="18" colspan="5" scope="row"><div align="left" class="style12"></div></th>
              </tr>
              <tr>
                <th height="18" scope="row">&nbsp;</th>
                <th height="18" colspan="3" scope="row"><table width="296" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="296">&nbsp;</td>
                    <th scope="row"><div align="right">
                      <input type="submit" name="Submit" value="Confirm" />
                    </div></th>
                    <th scope="row"><input type="button" name="Exit" value="Exit" onclick="exit()" /></th>
                    &nbsp;
                    <td></td>
                    <td></td></td>
                  </tr>
                </table></th>
                <th height="18" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="19" colspan="5" style="font-size: 12px; color: #00F;" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="19" colspan="5" style="font-size: 12px; color: #00F;" scope="row">Receipt of transaction will be email to you shortly. Thank You</th>
              </tr>
              <tr>
                <th height="19" colspan="5" scope="row"><span class="style121"><u>Please note</u>:<span class="style20"> <span class="style21">Any  Amount  exceeding &pound;650 will require  uploading your Identification in compliance financial service authority</span></span></span>
                
                
                
                </th>
              </tr>
              <tr>
                <th height="37" scope="row">&nbsp;</th>
                <th height="37" colspan="4" scope="row"><div align="right"><a href="agent_page.php" class="style14">Return to agent home page</a></div></th>
              </tr>
            </table>
          </div></th>
        </tr>
      </table>
      </label>
    </div>
</form>
<div align="center"></div>
<p>&nbsp; </p>
</body>


</html>



