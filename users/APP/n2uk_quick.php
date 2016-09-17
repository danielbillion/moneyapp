<?php session_start();

								//$r_transfer=($_GET['r_transfer']);
								$test =(rand(100,10000));
								//= (('dkl' . $test));
								$email= ($_SESSION['email']);
									$date=date("Y-m-d");
									
									

	$nbank = ($_GET['nbank']);			
$custid = ($_GET['custid']);
$r_fname = ($_GET['r_fname']);
$r_lname = ($_GET['r_lname']);
$act_name = ($_GET['act_name']);
$email= $_SESSION['email'];
$r_name=  ($_GET['r_fname']). ($_GET['r_lname']) ;

$link = include "conn.php";
 include "conn.php";  
 $check = mysql_query("SELECT * FROM  trans2_customer") or die('Query failed: ' . mysql_error());
 $check0 = mysql_query("SELECT * FROM  trans2_customer WHERE custid = '$custid' ORDER BY fname  ")or die(mysql_error());
 $checkr = mysql_query("SELECT * FROM trans2_receiver WHERE b_fname = '$r_fname' && b_lname = '$r_lname'  ")or die(mysql_error());
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
$nbankno=$row['nbankno'];
$nbank=$row['nbank'];
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
											
	$date=date("Y-m-d");
												
											
include "transfer_code.php";
include "code_proc.php";
								
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
 				
	
	}
	
	
	// for Debt

 if (isset($_POST['Submit']) && ($_POST['inputString']!==""))
  
  {
	  
	  	/* Database*/
 $result = mysql_query('SELECT id,bou,sold FROM  trans2_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
		

		while ($row = mysql_fetch_assoc($result)) {
		  //echo $row['messageid'];
		  $bou= $row['bou']; $sold= $row['sold']; $bou=number_format(($bou),2); $sold=number_format(($sold),2); }
		  
			$mon =($_POST['inputString']);
			$m_n=($mon);
			$m_p=($mon/$bou);
			$mar=($bou-$sold);	
			$pro=($mar*$m_p);
			$status="PENDING";
	
mysql_query("INSERT INTO trans2 (date,custid,s_phone,r_phone,s_name,r_name,status,tcode,amt_n,amt_p,bou_r,sold_r,margin,profit,bank_info,bank_n, r_transfer,address,banknig,id_type,act_name,nbankno)
		

 VALUES ('$dtime','$custid', '$s_phone','$r_phone', '$c_name', '$r_name','$status','$tcode','$m_n','$m_p','$bou','$sold','$mar','$pro','$r_bank','$r_actno','$r_transfer','$addressc','$nbank','$r_idtype','$act_name','$nbankno') ") or die(mysql_error());
 
 echo" <script type='text/javascript'>
 
 {
 window.alert('New Data Entry Successful ')
window.location='n2uk_report.php';
 }
</script> ";
		
	}
	
	
	
			if($r_transfer=="Pick Up"){
	$r_bank=$row['b_pbank'];
	$r_idtype=$row['b_idtype'];
	$r_actno="None";}
						 
									 	
									 
								 
									 
								
									 
									 
			

	

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
			$.post("n2uk_cal.php", {queryString: ""+inputString+""}, function(data){
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
	window.location="admin_page.php"
	
	}s
</script>



<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<link href="style2.css" rel="stylesheet" type="text/css">
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
            <table width="743" height="1032" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <th height="49" colspan="5" style="font-size: 22px" scope="row"><img src="img_logo.php" width="28" height="54"  /><?php if(isset($_SESSION['name2'])){ echo  $_SESSION['name2'];} ?></th>
              </tr>
              <tr bgcolor="#CCCCCC">
                <th width="164" height="23" bgcolor="#999966" scope="row">&nbsp;</th>
                <th colspan="3" bgcolor="#0066CC" scope="row"><span class="style2">N2UK Transaction</span></th>
                <th width="172" bgcolor="#999966" scope="row">&nbsp;</th>
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
				  
				  echo strtoupper($_GET['r_fname']). strtoupper($_GET['r_lname']);  ?>
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
                   <?php  if (isset($_GET['r_phone'])) echo $_GET['r_phone']; ?>
                </div></td>
              </tr>
              <tr>
                <td height="28" valign="top" class="style12" style="font-size: 14px"><div align="right" class="style12"></div></td>
                <td height="28" valign="top" class="style12" style="font-size: 14px">DESTINATION </td>
                <td valign="top" class="style12" style="font-size: 14px"><div align="left">UNITED KINGDOM</div></td>
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
                <th height="24" colspan="5" style="font-size: 14px" scope="row">&nbsp;</th>
              </tr>
              <tr bgcolor="#CCCCCC">
                <th height="23" scope="row">&nbsp;</th>
                <th colspan="3" bgcolor="#993300" scope="row"><span class="style2">Transaction Details</span></th>
                <th scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="24" colspan="5" style="font-size: 14px" scope="row"><div align="left" class="style12"></div></th>
              </tr>
              <tr>
                <th colspan="2" style="font-size: 14px" scope="row"><div align="left" class="style12">
                  <div align="left"><u style="font-size: 18px">TRANSACTIONS</u></div>
                </div>                  <div align="left" class="style12"></div></th>
                <td colspan="3" class="style10" style="font-size: 14px"><div align="left" class="style12"><u style="font-size: 18px; font-weight: bold;">MODE OF PAYMENT</div></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="4" class="style13" style="font-size: 14px"><input name="inputString"  id='inputString' onblur='fill();' onkeyup='lookup(this.value);' maxlength="10" />                </td>
              </tr>
              <tr>
                <th colspan="2" rowspan="9" style="font-size: 14px" scope="row"><table width="301" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>AMOUNT TO BE SENT: </td>
                    <td width="136" rowspan="7">
                      
                      
                      <div  align="left" class="suggestionsBox" id="suggestion" style="display: none;">
                      <div align="left" class="suggestionList" id="autoSuggestionList"> </div>
                      
                      &nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>AMOUNT :</td>
                    </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>BOU RATE:</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>SOLD RATE:</td>
                  </tr>
                  </table>
                  <p>
                  
                  
                &nbsp;</th>
                <td colspan="3" class="style10" style="font-size: 14px">
                  
                  <p align="center">&nbsp;</p>                  <span class="style12">BOU RATE: &pound;1= &#8358;
                    <?php 
				  $result = mysql_query('SELECT id,bou
                         FROM trans2_rate
                     ORDER BY id DESC 
                        LIMIT 1') or die('Invalid query: ' . mysql_error());
						
						
						while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  
  echo number_format(($row['bou']),2);} 
				   ?>
                </span></td>
              </tr>
              <tr>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" class="style10" style="font-size: 14px"><div align="center"></div>                  <span class="style12">BANK PAYING</span></td>
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
                <td colspan="2" class="style10" style="font-size: 14px"><div align="center" class="style12"></div>                  <span class="style12">TRANSFER MODE</span></td>
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
                <td colspan="2" class="style13" style="font-size: 14px"><div align="center" class="style12"></div>                  <span class="style12">MODE OF IDENTITY</span></td>
                <td class="style13" style="font-size: 14px">&nbsp;
                           <?php if (isset($r_idtype)){ 
				echo strtoupper(($r_idtype)); } ?>
     
                
                
                </td>
              </tr>
              <tr>
                <td height="18" colspan="2" class="style13" style="font-size: 14px">&nbsp;</td>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <td height="26" colspan="2" class="style13" style="font-size: 14px"><span class="style13" style="font-size: 14px"><span class="style12">BANK NIGERIA</span></span></td>
                <td class="style13" style="font-size: 14px"><span class="style13" style="font-size: 14px"><span class="style13" style="font-size: 14px"><span class="style13" style="font-size: 14px"><span class="style13" style="font-size: 14px">
                  <?php if (isset($nbank)){ 
				echo strtoupper(($nbank)); } ?>
                </span></span></span></span></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td style="font-weight: bold" >&nbsp;</td>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td style="font-weight: bold" >&nbsp;</td>
                <td colspan="2" class="style13" style="font-size: 14px"><span class="style12">ACCOUNT NAME</span></td>
                <td class="style13" style="font-size: 14px"><span class="style13" style="font-size: 14px"><span class="style13" style="font-size: 14px">
                  <?php if (isset($_GET['act_name'])){ 
				echo strtoupper(($_GET['act_name'])); } ?>
                </span></span></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td style="font-weight: bold" >&nbsp;</td>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
                <td class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="left"><span class="style12">TRANSFER CODE </span></div></th>
                <td style="font-weight: bold" ><span>
                  <?php  if (isset($tcode)) echo ($tcode ); ?>
                </span></td>
                <td colspan="2" class="style13" style="font-size: 14px"><div align="center" class="style12"></div>                  <span class="style12">SORT / ACCT NUMBER:</span></td>
                <td class="style13" style="font-size: 14px"><span class="style12">
                  <?php  if (isset($r_actno)) echo strtoupper( $r_actno); ?>
                </span></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="4" class="style13" style="font-size: 14px">&nbsp;</td>
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
                <th height="37" scope="row">&nbsp;</th>
                <th height="37" colspan="4" scope="row"><div align="right"><a href="admin_page.php" class="style14">Return to admin home page</a></div></th>
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



