



<?php  include "agent_p.php";
require_once('calendar/classes/tc_calendar.php' );
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
	color:#630;font-weight: bold;
	font-size: 12px;
}
.style17 {color: #0000FF}
.style19 {color: #660033}
.style20 {
	font-size: 12px;
	font-style: italic;
}
-->
</style>
</head>

<body onLoad="toggleMe(this.value)">
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
   
<div align="center">
  <table width="639" height="365" border="0" cellpadding="0" cellspacing="0" bordercolor="#5E338C">
    <tr>
      		<td width="721"><form action="" method="post" name="form1" id="form1">
        <div align="center">
          <table width="604" height="247" border="0">
              <tr bgcolor="#9900FF">
                <td width="655" nowrap="nowrap" bgcolor="#CCCCCC">
                  <p align="center" class="style13"><u><span class="style19">MODIFY EXISTING RECEIVER</span><span class="style17"> (  CUSTOMER : 
                        <?php if (isset($_GET['c_name'])) echo strtoupper($_GET['c_name']); ?> 
                  ) </span></u></p>
                  <div align="center" class="style4">
                    <div align="left"></div>
                </div></td>
                <td width="80" nowrap="nowrap" bgcolor="#CCCCCC"><span class="style13"><span class="style20"><a href="agent_page.php" target="_parent">Main Page</a></span></span></td>
              </tr>
              
              <tr>
                <td height="167" colspan="2"><div align="center">
                  <table width="739" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td colspan="6"><div align="center">
<?php 
												//if( $_SERVER['REQUEST_METHOD'] == 'POST' 
															if (isset($_POST['Modify'])){
														include "conn.php";  
														
														$xb="Select Bank with Bank Account Option";
														$xp="Select Bank for Pick up Option";
														$xid="Select ID";
													
														
														
														 $r_lname = ($_GET['r_lname']); // Set email variable
														  $r_fname = ($_GET['r_fname']); // Set email variable
														
														$b_transfer=($_POST['b_transfer']);
														$b_lname=($_POST['b_lname']);
														$b_fname=($_POST['b_fname']);
														$b_phone=($_POST['b_phone']);
														$b_idtype=($_POST['b_idtype']);
														$b_transfer=($_POST['b_transfer']);
														$b_actno=($_POST['b_actno']);
														$b_abank=($_POST['b_abank']);
														$b_pbank=($_POST['b_pbank']);
														
														$date=date("Y-m-d");
						
						if(	$b_transfer==""){					
								
			mysql_query("UPDATE agent_cust_receiver SET b_phone = '$b_phone', 
			    b_fname = '$b_fname', b_lname = '$b_lname' WHERE b_fname = '$r_fname' && b_lname='$r_lname' ");
		
		echo "<script>alert(\"Thank you,your new receivers details and Contact no has been updated.\");</script>";}
															
							
						 
						 
						 if($b_transfer !==""){		
						 			if($b_pbank==$xp){ $b_pbank="-"; }
									if($b_abank==$xb){ $b_bank="-";}
									
									
									if ($b_transfer =="Pick Up"){
										
						//	if ($b_idtype==$xid){ $msg=" Please Choose ID";}if ($b_pbank==$xid){ $msg=" Please Bank for the Pick up";}	
								
mysql_query("UPDATE agent_cust_receiver SET b_phone = '$b_phone', b_fname = '$b_fname', b_lname = '$b_lname', b_transfer='$b_transfer', b_idtype = '$b_idtype' , b_pbank = '$b_pbank' WHERE b_fname = '$r_fname' && b_lname='$r_lname' ");
}



									if ($b_transfer =="Bank Account"){
			//if ($b_actno==""){ $msg=" Please enter account no";}if ($b_abank==$xb){ $msg=" Please Bank for the Bank Account Option";}
					
mysql_query("UPDATE agent_cust_receiver SET b_phone = '$b_phone', b_fname = '$b_fname', b_lname = '$b_lname', b_transfer='$b_transfer', b_abank = '$b_abank' , b_actno = '$b_actno' WHERE b_fname = '$r_fname' && b_lname='$r_lname' ")
									
;}



		
		echo "<script>alert(\"Thank you,your new receivers details and Contact no has been updated.\");</script>";}
															
							}	
						
						
							?>
						</div></td>
                      </tr>
                      <tr>
                        <td>First Name</td>
                        <td colspan="2"><input name="b_fname" type="text" id="b_fname"   value=
                        
                        <?php
						

						 if (isset($_GET['r_fname']))
						{ echo strtolower ($_GET['r_fname']);} ?>
						
						 
                        
                         /></td>
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
                        <td width="97"><label>
                          <div align="left">Last Name</div>
                          </label></td>
                        <td colspan="2"><label>
                          
                          <div align="left">
                            <input name="b_lname" type="text" id="b_lname"    value=
                        
                        <?php
						// $r_lname = ($_GET['r_lname']); // Set email variable

						 if (isset($_GET['r_lname']))
						{ echo strtolower ($_GET['r_lname']);} ?> />
                          </div>
                        </label></td>
                        <td width="8">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="6">		<div align="center">
                           
                        </div></td>
                      </tr>
                      <tr bgcolor="#5E338C">
                        <td colspan="6" bgcolor="#CCCCCC"><div align="center"><?php  
    if(isset($msg)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="#FF0033"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';

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
					    <td width="77">&nbsp;</td>
					    <td width="170">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>Phone Number </td>
					    <td colspan="2"><input name="b_phone" type="text" id="b_phone"  value=
                        
                        <?php
						 $r_phone = ($_GET['r_phone']); // Set email variable

						 if (isset($_GET['r_phone']))
						{ echo strtolower ($r_phone);} ?> maxlength="11"/></td>
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
					    <td><select name="b_transfer" id="b_transfer" onChange="toggleMe9(this.value)">
					      <option></option>
					      <option>Pick Up</option>
					      <option>Bank Account</option>
					      </select> 
				        <span class="style15">Currently <u>
				        <?php if(isset($_GET['r_transfer'])){ echo $_GET['r_transfer']; } ?>
				        </u></span></td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
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
					    <td>Pick Up </td>
					    <td><select name="b_pbank" id="b_pbank">
					      <option>Select Bank for Pick up Option</option>
                          <option>Skye Bank</option>
                          <option>Fidelity Bank</option>
                                                                                                                        </select></td>
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
					    <td>Type of ID</td>
					    <td><select name="b_idtype" id="b_idtype">
                          <option>National ID</option>
                          <option>Int'l Passport</option>
                          <option>Drivers Lincence</option>
                          <option>Any type of ID</option>
                          <option selected="selected">Select ID</option>
                        </select> 
					      <span class="style14"><span class="style15">compulsory for pickup </span></span></td>
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
					    <td><select name="b_abank" id="b_abank">
					      <option>Select Bank with Bank Account Option</option>
                          <option>Skye Bank</option>
                          <option>Access Bank</option>
                          <option>Oceanic Bank</option>
                          <option>Guarantee Trust Bank</option>
                          <option>Zenith Bank</option>
                          <option>Bank PHP</option>
                          <option>First Bank</option>
                          <option>Union Bank</option>
                          <option>United Bank Of Africa</option>
                          <option>Fidelity Bank</option>
                          
                          <option>Keystone Bank</option>
						   <option>Mainstreet Bank</option>
						    <option>Sterlin Bank</option>
                           <option>Spring Bank</option>
                          <option>First Inland Bank</option>
                          <option>First City Monument Bank</option>
                          <option>Stanbic Bank</option>
                        
                          <option>Diamond Bank</option>
						   <option>Eco Bank</option>
                         
                          
                          <option>Wema Bank</option>
                                                                                                </select></td>
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
					    <td>Account No </td>
					    <td><input name="b_actno" type="text" id="b_actno" /></td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td width="379"><div align="left"></div></td>
					    <td width="8">&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">
					      <div align="left"></div>
				          <div align="left"></div></td>
				      </tr>
					  <tr>
					    <td colspan="6"><div align="center">
					      <input name="Modify" type="submit" id="Modify" value="Modify" />
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



