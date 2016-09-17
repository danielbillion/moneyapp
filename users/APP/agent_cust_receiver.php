
<?php 
include "agent_p.php";
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
<script type="text/javascript" src="jquery-1.2.1.pack.js"></script>

<script language="javascript" type="text/javascript">
    function toggleMe9(val)
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
    else if(val=='Bank Account')
    {
    b_actno.style.display = "block";
    b_abank.style.display = "block";
	b_pbank.style.display = "none";
	b_idtype.style.display = "none";
	
    }
	
	
	else
    {
    b_actno.style.display = "none";
    b_abank.style.display = "none";
	b_pbank.style.display = "none";
	b_idtype.style.display = "none";
	
	
	
    }
    }
	
	
	function lookup(srv) {
		if(srv.length == 0) {
			// Hide the suggestion box.
			$('#rb').hide();
		} else {
			$.post("cp_r.php", {sv: ""+srv+""}, function(data){
				if(data.length >0) {
					
					
				$('#rb').show();
					$('#rbl').html(data);
					
						
				}
			});
		}
	} // lookup
    </script>
<?php 
require_once('calendar/classes/tc_calendar.php');
?><script language="javascript" src="calendar/calendar.js"></script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="act.css" type="text/css" rel="stylesheet" />  

 <script type="text/javascript" src="SPL_AJAX_Full.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Customer Beneficiary Registration</title>
<style type="text/css">
<!--
.myh1 {
	color: #FFFFFF;
	font-weight: bold;
}
body {
	background-color: #CCCCCC;
}
.style4 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
.style9 {color: #000000}
.style13 {color: #330000; font-weight: bold; }
.style14 {
	font-size: 9px;
	font-style: italic;
	font-weight: bold;
	color: #00FF00;
}
.style15 {
	color: #FF0000;
	font-size: 10px;
}
.style17 {color: #0000FF}
.style19 {color: #660033}
.style20 {
	font-size: 12px;
	font-style: italic;
}
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
-->
</style>
<STYLE type="text/css">
 /* List of address */
 .shout-btn2{
	padding:5px;
	margin-bottom:20px;
	width:20%;
	margin:10 auto;
	color: black;
	background: #0FF;
	font-size:15px;
	cursor:pointer;
	-webkit-border-radius: 10px;
	border-radius:10px;
	text-align: center;
						}
 .rectangle{
	
	width: 600px;
  height: 550px;
	background: #FFC;
	border-radius: 20px 20px 20px 40px;
  border-width: 30px 10px 20px 10px;
  padding: 10px 20px 10px 10px;
  margin: 5px 5px 5px 5px;
  float:center;

}
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
</head>



											
	
	
	
<body onLoad="toggleMe9(this.value)">
<div align="center"><div class=" rectangle">
  <table width="639" height="365" border="0" cellpadding="0" cellspacing="0" bordercolor="#5E338C">
    <tr>
      		<td width="721"><form action="" method="post" name="form1" id="form1">
        <div align="center">
          <table width="604" height="247" border="0">
              <tr bgcolor="#9900FF">
                <td width="655" nowrap="nowrarrp" bgcolor="#CCCCCC">
                  <p align="center" class="style13"><u><span class="style19">REGISTER NEW RECEIVER FOR </span></u> <?php  if(isset($_GET['c_name'])){echo strtoupper($_GET['c_name']);} ?></p>
                  <div align="center" class="style4">
                    <div align="left"></div>
                </div></td>
                <td width="80" nowrap="nowrap" bgcolor="#CCCCCC"><span class="style13"><span class="style20"><a href="agent_page.php" target="_parent">Main Page</a></span></span></td>
              </tr>
              
              <tr>
                <td height="167" colspan="2"><div align="center">
                  <table width="739" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td colspan="6">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="6"><div align="center"><?php 
												//if( $_SERVER['REQUEST_METHOD'] == 'POST' 
															if (isset($_POST['Register'])){
														include "conn.php"; 
														
														$c_name = ($_GET['c_name']); // Set email variable
														$c_email = ($_GET['c_email']); // Set email variable
														
														$checkcn=mysql_query("SELECT * FROM agent_new_customer WHERE email='$c_email' ")or die(mysql_error()) ;
														while($row=mysql_fetch_array($checkcn)){ $c_fname=$row['fname'];$c_lname=$row['lname'];
														$sender=$c_fname." ".$c_lname;$c_address=$row['address'];}
														
														
														$address = ($_GET['address']);
														$c_email = ($_GET['c_email']); // Set email variable
														$s_phone = ($_GET['s_phone']); // Set email variable
														$s_mphone = ($_GET['s_mphone']); // Set email variable
														
														
														
														$s_fname= $_SESSION['s_fname'];
														$ag_email= $_SESSION['email'];
							
														$b_fname=($_POST['b_fname']);
														$b_lname=($_POST['b_lname']);
														$b_phone=($_POST['b_phone']);
														$b_idtype=($_POST['b_idtype']);
														$b_transfer=($_POST['b_transfer']);
														$b_actno=($_POST['b_actno']);
														$b_abank=($_POST['b_abank']);
														$b_pbank=($_POST['b_pbank']);
														
														$date=date('Y-m-d H:i:s');
														$trans=$_POST['b_transfer'];
												
						 // $_POST['b_transfer']="Select Type of Transfer for your Receiver";
						  
												
	 if(empty($_POST['b_fname'])  | empty($_POST['b_lname'])| empty($_POST['b_transfer'])) 
	 
	
	{$msg = 'Please fill all required fields<br />'; $msg2 = '';}
	
	
	
	
		if (!empty($_POST['b_fname'])  && !empty($_POST['b_lname'])&& !empty($_POST['b_transfer']))
												
											 {
												 
												 
												 
												 
							  if(!empty($_POST['b_idtype'])  && !empty($_POST['b_pbank']))
	 
	 {include "conn.php";
															
												$postcode="none";
								$town ="none";
									$county  ="none";	
									$country  ="none";							
							
															mysql_query("INSERT INTO agent_cust_receiver(agent_cust_email,agent_email,c_name,b_fname,b_lname,
															b_phone,b_idtype,b_transfer,b_pbank,b_abank,b_actno,date)
													
															VALUES ('$c_email','$ag_email','$c_name','$b_fname','$b_lname','$b_phone','$b_idtype','$b_transfer',
															 '$b_pbank', '$b_abank','$b_actno','$date' )") or die(mysql_error());
															 
															 {$msg = ' New receiver has been registered.';}
$msg2 = "<a href='agent_send2.php?c_name=$c_name & sender=$sender & c_email=$c_email & address=$address & s_phone=$s_phone & s_mphone=$s_mphone  & postcode=$postcode
 & town  =$town & county  =$county  & country =$country & fname= $c_fname & lname=$c_lname & address= $c_address '> Send Money </a>";}					 
												 
												 
												 
												 
			else if(!empty($_POST['b_actno'])  && !empty($_POST['b_abank']))								
		 {
			
			include "conn.php";  
															
								$postcode="none";
								$town ="none";
									$county  ="none";	
									$country  ="none";	
							
															mysql_query("INSERT INTO agent_cust_receiver(agent_cust_email,agent_email,c_name,b_fname,b_lname,
															b_phone,b_idtype,b_transfer,b_pbank,b_abank,b_actno,date)
													
															VALUES ('$c_email','$ag_email','$c_name','$b_fname','$b_lname','$b_phone','$b_idtype','$b_transfer',
															 '$b_pbank', '$b_abank','$b_actno','$date' )") or die(mysql_error());
															 
															 {$msg = ' New receiver has been registered.';}
$msg2 = "<a href='agent_send2.php?c_name=$c_name & sender=$sender & c_email=$c_email & address=$address & s_phone=$s_phone & s_mphone=$s_mphone & postcode=$postcode
 & town  =$town & county  =$county  & country =$country & & fname= $c_fname & lname=$c_lname & address= $c_address '> Send Money </a>";
			
			}
		
		
										 
								else{									
														
				{$msg = 'Please fill all required fields under transfer mode'; $msg2 = '';}											
				
										
			}			
											
			
										}
							
							}	
						 
															
						
							?>
						</div></td>
                      </tr>
                      <tr>
                        <td style="font-weight: bold; font-size:18px;">Search Customer </td>
                        <td colspan="2"><input name="sv" type="text" id="sv" placeholder=" RECEIVER FIRST NAME"  onFocus="this.value=''" onBlur="fill();" onKeyUp="lookup(this.value);"  
         value=" <?php if(isset($_GET['c_name'])) echo $_GET['c_name']; ?>" size="40"/> &nbsp;</td>
                        <td>&nbsp;</td>
                        <td colspan="2"><label>                          </label></td>
                      </tr>
                      <tr>
                        <td>--------------------</td>
                        <td colspan="2">
                        
                        <div align="center" class="rb" id="rb" style="display: none;"></div>
      <div align="center" class="rbl" id="rbl"></div>
      
                        
                        &nbsp;</td>
                        <td>&nbsp;</td>
                        <td colspan="2">--------------</td>
                      </tr>
                      <tr>
                        <td>Receiver First Name</td>
                        <td colspan="2"><input name="b_fname" type="text" id="b_fname" size="40" /></td>
                        <td>&nbsp;</td>
                        <td colspan="2">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td colspan="2">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td colspan="2">&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="136"><label>
                          <div align="left">Receiver Last Name</div>
                          </label></td>
                        <td colspan="2"><label>
                          
                          <div align="left">
                            <input name="b_lname" type="text" id="b_lname" size="40" />
                          </div>
                        </label></td>
                        <td width="6">&nbsp;</td>
                        <td colspan="2">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="6">		<div align="center">
                           
                        </div></td>
                      </tr>
                      <tr bgcolor="#5E338C">
                        <td colspan="6" bgcolor="#CCCCCC"><div align="center"><?php  
    if(isset($msg)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="#FF0033"><tr><th class="style1" scope="row">'.$msg.''.$msg2.'</th> </tr></table>';

    } 
	
	
	
	
	 
?></div></td>
                      </tr>
                      <tr>
                        <td><div align="left"></div></td>
                        <td colspan="2"><label>
                          <div align="left"></div>
                        </label></td>
                        <td>&nbsp;</td>
                        <td colspan="2"><div align="center" class="style9"></div>                          <div align="center"></div></td>
                      </tr>
                     
					  <tr>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
					    <td>&nbsp;</td>
					    <td width="105">&nbsp;</td>
					    <td width="187">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>Receiver Phone No</td>
					    <td colspan="2"><input name="b_phone" type="text" id="b_phone" size="40" maxlength="11" /></td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
				      </tr>
					  <tr>
					    <td><span class="style9"><u>Transfer Mode</u></span></td>
					    <td colspan="4"><select name="b_transfer" id="b_transfer" onChange="toggleMe9(this.value)">
					      <option></option>
					      <option>Pick Up</option>
					      <option>Bank Account</option>
					      </select>
					      <span style="font-size: 11px; font-style: italic; font-weight: bold; color: #F00;">Select Type of Transfer for your Receiver</span></td>
					    <td>&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>Pick Up </td>
					    <td colspan="2"><select name="b_pbank" id="b_pbank">
					      <option></option>
					      <?php
						  
 include "conn.php";
 $check = mysql_query("SELECT * FROM bank WHERE status='p' ORDER BY bank") or die('Query failed: ' . mysql_error());
						   
					while($row=mysql_fetch_array($check)){
						$bank=$row['bank'];	
						 echo"<option>"; echo $bank; echo"</option>";
					}
						   ?>
					      </select>
					      <span style="font-size: 11px; color: #F00;">Select Bank for Pick Up option</span></td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td colspan="2" style="font-size: 12px; font-style: italic; font-weight: bold; color: #F00;">&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>Type of ID</td>
					    <td><select name="b_idtype" id="b_idtype">
                         <option selected></option>
                          <option>National ID</option>
                          <option >Intl Passport</option>
                          <option>Drivers Lincence</option>
                          <option>Any type of ID</option>
                         
                        </select> 
					      <span class="style14" style="font-size: 11px"><span class="style15">compulsory for pickup </span></span></td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>Bank </td>
					    <td colspan="2" style="font-size: 11px; color: #F00;">
					      <select name="b_abank" id="b_abank">
					        <option></option>
					        
					        <?php
						  
 include "conn.php"; 
 $check = mysql_query("SELECT * FROM bank WHERE status='b'ORDER BY bank ") or die('Query failed: ' . mysql_error());
						   
					while($row=mysql_fetch_array($check)){
						$bank=$row['bank'];	
						 echo"<option>"; echo $bank; echo"</option>";
					}
						   ?>
					        
					        
					        
				          </select>
				        Select Bank for Bank account option</td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td colspan="2">&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>Account No </td>
					    <td colspan="2"><input name="b_actno" type="text" id="b_actno" size="40" />
				        <span style="font-size: 11px; color: #F00;"> Bank account No</span></td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td width="174"><div align="left"></div></td>
					    <td width="131">&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">
					      <div align="left"></div>
				          <div align="left"></div></td>
				      </tr>
					  <tr>
					    <td colspan="6"><div align="center">
					      <input name="Register" class="shout-btn2" type="submit" id="Register" value="Register" />
					    </div>
					      <div align="center"></div>
					      <div align="left"></div>					      <div align="center">
                            <label></label>
                            <p>
                              <label>                            </label>
                              <label></label>
                            </p>
                        </div></td>
				      </tr>
                    </table>
                </div></td>
              </tr>
            </table>
        </div>
      </form>
      </td>
    </tr>
  </table>
  </div>
</div>
</body>
</html>



