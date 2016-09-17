
<?php include "customer_p.php";
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
<title>Customer Registration</title>
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
</head>

<body onLoad="toggleMe(this.value)">

											
	
	
	
   
<div align="center">
  <table width="639" height="365" border="0" cellpadding="0" cellspacing="0" bordercolor="#5E338C" class="rectangle">
    <tr>
      		<td width="721"><form action="" method="post" name="form1" id="form1">
        <div align="center">
          <table width="604" height="247" border="0">
              <tr bgcolor="#9900FF">
                <td width="655" nowrap="nowrarrp" bgcolor="#CCCCCC">
                  <p align="center" class="style13"><u><span class="style19">REGISTER NEW RECEIVER</span></u></p>
                  <div align="center" class="style4">
                    <div align="left"></div>
                </div></td>
                <td width="80" nowrap="nowrap" bgcolor="#CCCCCC">&nbsp;</td>
              </tr>
              
              <tr>
                <td height="167" colspan="2"><div align="center">
                  <table width="739" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td colspan="6"><div align="center">
<?php 
												//if( $_SERVER['REQUEST_METHOD'] == 'POST' 
															if (isset($_POST['Register'])){
														include "conn.php";  
														
														$s_fname= $_SESSION['s_fname'];
														$s_email= $_SESSION['email'];
							
														$b_fname=($_POST['b_fname']);
														$b_lname=($_POST['b_lname']);
														$b_phone=($_POST['b_phone']);
														$b_idtype=($_POST['b_idtype']);
														$b_transfer=($_POST['b_transfer']);
														$b_actno=($_POST['b_actno']);
														$b_abank=($_POST['b_abank']);
														$b_pbank=($_POST['b_pbank']);
														
														$date=date("Y-m-d");
												
						 // $_POST['b_transfer']="Select Type of Transfer for your Receiver";
						  
												
	 if(empty($_POST['b_fname'])  | empty($_POST['b_lname'])|empty($_POST['b_phone'])| empty($_POST['b_transfer'])) 
	 
	
	{$msg = 'Please fill all required fields<br />'; $msg2 = '';}
	
	
	
	/* if(($_POST['b_transfer'])=="Select Type of Transfer for your Receiver"){$msg = 'Please fill all required fields<br />';}
														
														{$msg = 'Please fill all required fields<br />';}*/
														
				/*										
				if($trans=='Pick Up'){
												
												
									 if(empty($_POST['b_idtype'])  | empty($_POST['b_pbank'])  )
									
									{$msg = 'Please fill all required fields<br />'; $msg2 = '';}
										
												}	 
												
												if($trans=="Bank Account"){
												
												
									 if(empty($_POST['b_actno'])  | empty($_POST['b_abank'])  )
									
									{$msg = 'Please fill all required fields<br />'; $msg2 = '';}
										
												}
												
													*/	
		if (!empty($_POST['b_fname'])  && !empty($_POST['b_lname'])&& !empty($_POST['b_transfer'])&&
											 	!empty($_POST['b_phone']))
												
											 {
												 
												 
												 
												 
							  if(!empty($_POST['b_idtype'])  && !empty($_POST['b_pbank']))
	 
	 {include "conn.php";  
															
																		
							
															mysql_query("INSERT INTO receiver(sender_fname,sender_email,b_fname,b_lname,
															b_phone,b_idtype,b_transfer,b_pbank,b_abank,b_actno,date)
													
															VALUES ('$s_fname','$s_email','$b_fname','$b_lname','$b_phone','$b_idtype','$b_transfer',
															 '$b_pbank', '$b_abank','$b_actno','$date' )") or die(mysql_error());
															 
															 {$msg = ' New receiver has been registered.';}
$msg2 = "<a href='receivers_list.php'> view </a>";}					 
												 
												 
												 
												 
			else if(!empty($_POST['b_actno'])  && !empty($_POST['b_abank']))								
		 {
			
			include "conn.php";  
															
																		
							
															mysql_query("INSERT INTO receiver(sender_fname,sender_email,b_fname,b_lname,
															b_phone,b_idtype,b_transfer,b_pbank,b_abank,b_actno,date)
													
															VALUES ('$s_fname','$s_email','$b_fname','$b_lname','$b_phone','$b_idtype','$b_transfer',
															 '$b_pbank', '$b_abank','$b_actno','$date' )") or die(mysql_error());
															 
															 {$msg = ' New receiver has been registered.';}
$msg2 = "<a href='receivers_list.php'> view </a>";
			
			}
		
		
										 
								else{									
														
				{$msg = 'Please fill all required fields under transfer mode <br/>'; $msg2 = '';}											
				
										
			}			
		
													
	 
	
											
			
										}
															
															
							
								
															 

							
							
							}	
						 
															
						
							?>
						</div></td>
                      </tr>
                      <tr>
                        <td>First Name</td>
                        <td colspan="2"><input name="b_fname" type="text" id="b_fname" /></td>
                        <td>&nbsp;</td>
                        <td colspan="2" rowspan="3"><div align="center">
                          <label></label>
                        </div>
                          <label>
                          
                          <div align="left"></div>                          </label></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td colspan="2">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="115"><label>
                          <div align="left">Last Name</div>
                          </label></td>
                        <td colspan="2"><label>
                          
                          <div align="left">
                            <input name="b_lname" type="text" id="b_lname" />
                          </div>
                        </label></td>
                        <td width="1">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="6">		<div align="center">
                           
                        </div></td>
                      </tr>
                      <tr bgcolor="#5E338C">
                        <td colspan="6" bgcolor="#CCCCCC"><div align="center"><?php  
    if(isset($msg)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="#FF0033"><tr><th class="style1" scope="row">'.$msg.', '.$msg2.'</th> </tr></table>';

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
					    <td width="183">&nbsp;</td>
					    <td width="235">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>Phone Number </td>
					    <td colspan="2"><input name="b_phone" type="text" id="b_phone" maxlength="11" /></td>
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
					    <td colspan="4"><select name="b_transfer" id="b_transfer" onChange="toggleMe(this.value)">
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
					    <td>Bank Account </td>
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
					    <td colspan="2"><input name="b_actno" type="text" id="b_actno" />
				        <span style="font-size: 11px; color: #F00;"> Bank account No</span></td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td width="83"><div align="left"></div></td>
					    <td width="96">&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">
					      <div align="left"></div>
				          <div align="left"></div></td>
				      </tr>
					  <tr>
					    <td colspan="6"><div align="center">
					      <input name="Register" type="submit" id="Register" value="Register" />
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
</body>
</html>



