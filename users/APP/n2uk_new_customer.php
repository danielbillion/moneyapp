<?php include "admin_p.php" ?>
<?php 
require_once('calendar/classes/tc_calendar.php');
?><script language="javascript" src="calendar/calendar.js"></script>
 <script type="text/javascript" src="SPL_AJAX_Full.js"></script>

<script>
function exit()
{
var x=confirm("Are you sure you want to quit?")
if (x)
	window.location="admin_page.php"
	
	}s
</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="me_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>

<link href="style2.css" rel="stylesheet" type="text/css">
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
.style8 {color: #5E338C; font-weight: bold; }
.style9 {color: #000000}
.style11 {font-size: 10px}
.style25 {font-size: 12px;
	font-weight: bold;
}
.style30 {color: #F0F0F0}
.style30 {color: #FFFFFF}
.style32 {	color: #333366;
	font-size: 10.5px;
}
.style33 {	color: #333366;
	font-size: 11px;
	font-weight: bold;
}
.style34 {
	color: #0066FF;
	font-weight: bold;
	font-size: large;
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
</head>

<body>
<div align="left">
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
</div>
<div align="center">
  <p><span style="color: #F00; font-weight: bold; font-size: 14px;">* </span>Marked fields are Compulsory</p>
  <table width="778" height="365" border="3" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      		<td width="746"><form action="" method="post" name="form1" id="form1">
        <div align="center">
          <table width="696" height="247" border="0">
              <tr bgcolor="#9900FF">
                <td nowrap="nowrap" bgcolor="#CCCCCC" style="color: #000; font-size: 18px;">&nbsp;</td>
              </tr>
              
              <tr>
                <td height="167"><div align="center">
                  <table width="691" border="0">
                      <tr>
                        <td colspan="5"><div align="center"></div></td>
                      </tr>
                      <tr>
                        <td width="105">&nbsp;</td>
                        <td width="240"><span style="color: #000; font-size: 18px;"><strong>New Customer N2UK</strong></span></td>
                        <td colspan="2">&nbsp;</td>
                        <td width="190"><label>
                          <div align="center"></div>
                        </label></td>
                      </tr>
                      <tr>
                        <td>Title </td>
                        <td>&nbsp;</td>
                        <td colspan="2">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2"><label>
                          <label></label>
                          </label>
                        <label>
                          <select name="select">
                            <option selected="selected">MR</option>
                            <option>MRS</option>
                            <option>MISS</option>
                          </select>
                        </label></td>
                        <td colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2">&nbsp;</td>
                        <td colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2"><span style="color: #F00; font-weight: bold; font-size: 14px;">*</span>First Name </td>
                        <td colspan="3"><div align="left"><span style="color: #F00; font-weight: bold; font-size: 14px;">*</span>Last Name</div></td>
                      </tr>
                      <tr>
                        <td colspan="2"><input name="fname" type="text" id="fname" value="<?php echo isset($_POST['fname']) ? ucfirst($_POST['fname']): '' ?>" /></td>
                        <td colspan="3"><input name="lname" type="text" id="lname" value="<?php echo isset($_POST['lname']) ? ucfirst($_POST['lname']): '' ?>"/></td>
                      </tr>
                      <tr>
                        <td><div align="left"></div></td>
                        <td><div align="left"></div></td>
                        <td colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2">Middle Name </td>
                        <td colspan="3"><div align="left">Date of Birth</div>
                        <div align="right"></div>  <div align="center"></div></td>
                      </tr>
                      <tr>
                        <td colspan="2"><input name="mname" type="text" id="mname" value="<?php echo isset($_POST['mname']) ? ucfirst($_POST['mname']): '' ?>"/></td>
                        <td colspan="3"><?php
				//if( $_SERVER['REQUEST_METHOD'] == 'POST' 
						if (isset($_POST['Submit'])){
								
								
								
								 {$theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";}
								 
						
						//echo $theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 
														
														include "conn.php";include "conn2.php";    
							
										
							
 													
																														
														
														$title=mysql_escape_string($_POST['select']);
														include "time.php";
														$reg_date= $dtime;
														$email=mysql_escape_string($_POST['email']);
														$fname=ucfirst(mysql_escape_string($_POST['fname']));
														$mname=ucfirst(mysql_escape_string($_POST['mname']));
														$lname=ucfirst(mysql_escape_string($_POST['lname']));
														$mnumber=mysql_escape_string($_POST['mnumber']);
														$pnumber=mysql_escape_string($_POST['pnumber']);
														$dob=isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 
														$address= $_POST['line1'] .' '. $_POST['line2'] .'
														 '. $_POST['line3'] .' '. $_POST['town'] .' '.
														 $_POST['county']. ' '.$_POST['country'] ;	
														 $postcode= $_POST['postcode'];
														 $line1=$_POST['line1'];
														 $line2=$_POST['line2'];
														 $line3=$_POST['line3'];
														 $town= $_POST['town'];
														 $county=$_POST['county'];
														 $country=$_POST['country'];
														$active=1;
														
														
							$check = mysql_query("SELECT * FROM  trans2_customer WHERE fname = '$fname' && lname = '$lname'  ")or die(mysql_error());
							$check2 = mysql_num_rows($check);
							
							$check0 = mysql_query("SELECT * FROM  trans2_customer ")or die(mysql_error());
							$table_array = mysql_fetch_array($check0);
							
							$checkdb = mysql_query("SELECT id FROM trans2_customer") or die('Query failed: ' . mysql_error());
							//$resultdb = mysqli_fetch_object($db,$checkdb );
							
							//$checkid = $db->query("SELECT id FROM trans2_customer ORDER BY id DESC LIMIT 1  ") or die('Query failed: ' . mysql_error());							
							
//if(isset($resultdb) && $resultdb[0] != "") {while ($result = $checkid ->fetch_object()) {$rid=$result->id;	$val=$rid + 1; $custid= "NU" .$val;}}else { $custid= "NU" ."1";}	
							
										
if(isset($table_array) && $table_array[0] != "") {while($rowpc=mysql_fetch_array($checkdb)){$rid=$rowpc['id'];	$val=$rid + 1; $custid= "NU" .$val;}}else { $custid= "NU" ."1";}	
										
											 
												
											if(empty($_POST['fname'])  | empty($_POST['lname'])| 
											 			 empty($_POST['line1'])| empty($_POST['mnumber']) )
														
														{$nmsg = 'Please fill all required fields ';}
												
											if(!empty($_POST['fname'])&& !empty($_POST['lname'])&& !empty($_POST['mnumber']) &&
											 		!empty($_POST['line1']))
													
													
								{
								
									if  ($check2 != 0) { $amsg = 'Sorry, this identity  '.$_POST['fname'].' '.$_POST['lname'].' is already in use.';}						
															else	{
																	
									
											mysql_query("INSERT INTO  trans2_customer (custid,fname,lname,mname,mnumber,
													pnumber,dob,email,address,postcode,date_reg,title,line1,line2,line3,town,county,country,active)
				
											VALUES ('$custid','$fname','$lname','$mname','$mnumber','$pnumber', '$dob','$email','$address','$postcode',
													'$reg_date','$title','$line1','$line2','$line3','$town','$county','$country','$active'														 
															 )") or die(mysql_error());
															 
															
															 
															 {$smsg = ' Congratulations! Your account has been created, <br />
															  please verify it by clicking the activation link that has been sent to your email.';}
															
															  
															  
															  
															  
					echo" <script type='text/javascript'>
					 {
					 window.alert('Congratulations! New Customer has been created')
					window.location='n2uk_new_customer.php';
					 }
					</script> ";
															  }
															  
								}
								
		
		
															}

							
							
							
						 
						 $myCalendar = new tc_calendar("date1", true);
					  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar->setDate(date('d'), date('m'), date('Y'));$myCalendar->setPath("calendar/");
					  $myCalendar->setYearInterval(1912, 2010); $myCalendar->dateAllow('1912-01-01', '2010-03-01'); $myCalendar->writeScript(); 
						//$dob = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 	
						
							?></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td width="92">&nbsp;</td>
                        <td colspan="2">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="5">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="5">		<div align="center">
                          <?php  
    if(isset($msg)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="#FF0033"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';

    } 
	if(isset($emsg)){  // Check if $msg is not empty  
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="#FF0033"><tr><th class="style1" scope="row">'.$emsg.'</th> </tr></table>';

    } 
	
	
	if(isset($pmsg)){  // Check if $msg is not empty  
        
	
	echo '<table width="200" border="0" bgcolor="#FF0033"><tr><th class="style1" scope="row">'.$pmsg.'</th> </tr></table>';
    }
	
	
	if(isset($nmsg)){  // Check if $msg is not empty  
        
	
	echo '<table width="200" border="0" bgcolor="#FF0033"><tr><th class="style1" scope="row">'.$nmsg.'</th> </tr></table>';
    }
	
	if(isset($smsg)){  // Check if $msg is not empty  
        
	
	echo '<table width="200" border="0" bgcolor="#0000FF"><tr><th class="style4" scope="row">'.$smsg.'</th> </tr></table>';
    }
	
	if(isset($amsg)){  // Check if $msg is not empty  
        
	
	echo '<table width="200" border="0" bgcolor="#0000FF"><tr><th class="style4" scope="row">'.$amsg.'</th> </tr></table>';
    }
	 
?> 
                        </div></td>
                      </tr>
                      <tr bgcolor="#5E338C">
                        <td colspan="5" bgcolor="#CCCCCC"><div align="center" class="myh1" style="color: #000; font-size: 16px;">
                          <div align="left">Contacts</div>
                        </div></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td colspan="2">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2"><div align="left">Phone Number </div></td>
                        <td colspan="3"><div align="center"></div>                          <span style="color: #F00; font-weight: bold; font-size: 14px;">*</span>Mobile Number 
                          <div align="center"></div></td>
                      </tr>
                      <tr>
                        <td colspan="2"><input name="pnumber" type="text" id="pnumber" value="<?php echo isset($_POST['pnumber']) ? ucfirst($_POST['pnumber']): '' ?>"/></td>
                        <td colspan="3"><input name="mnumber" type="text" id="mnumber" value="<?php echo isset($_POST['mnumber']) ? ucfirst($_POST['mnumber']): '' ?>"  /></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
         
		                <td colspan="2">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><div align="left">Email</div></td>
                        <td>&nbsp;</td>
                        <td colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2"><input name="email" type="text" size="40" id="email" value="<?php echo isset($_POST['email']) ? ucfirst($_POST['email']): '' ?>"/></td>
                        <td colspan="2">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td colspan="2">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td bgcolor="#CCCCCC"><div align="center" class="myh1" style="color: #000; font-size: 16px;">
                          <div align="left">Address</div>
                        </div></td>
                        <td bgcolor="#CCCCCC">&nbsp;</td>
                        <td bgcolor="#CCCCCC">&nbsp;</td>
                        <td width="40" bgcolor="#CCCCCC">&nbsp;</td>
                        <td bgcolor="#CCCCCC">&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="21" colspan="5"><div align="center"><div id="SPLSearchArea" /></div></td>
                      </tr>
                      <tr>
                        <td height="3" colspan="5"><div align="center">
                          <table width="500" border="0">
                            <tr>
                              <td width="83">Postcode</td>
                              <td width="380"><label>
                                <input type=text name=postcode id=postcode size=45 value="<?php echo isset($_POST['postcode']) ? ucfirst($_POST['postcode']): '' ?>" >
                              </label></td>
                            </tr>
                            <tr>
                               <td>Address 1 <span style="color: #F00; font-weight: bold; font-size: 14px;">*</span></td>
                              <td><input type=text name=line1 id=line1 size=45  value="<?php echo isset($_POST['line1']) ? ucfirst($_POST['line1']): '' ?>"></td>
                            </tr>
                            <tr>
                              <td>Address 2 </td>
                              <td><input type=text name=line2 id=line2 size=45  value="<?php echo isset($_POST['line2']) ? ucfirst($_POST['line2']): '' ?>"></td>
                            </tr>
                            <tr>
                              <td>Address 3 </td>
                              <td><input type=text name=line3 id=line3 size=45  value="<?php echo isset($_POST['line3']) ? ucfirst($_POST['line3']): '' ?>"></td>
                            </tr>
                            <tr>
                              <td>Town</td>
                              <td><input type=text name=town id=town size=45  value="<?php echo isset($_POST['town']) ? ucfirst($_POST['town']): '' ?>"></td>
                            </tr>
                            <tr>
                              <td>Country</td>
                              <td><input type=text name=county id=county size=45  value="<?php echo isset($_POST['county']) ? ucfirst($_POST['county']): '' ?>"></td>
                            </tr>
                            <tr>
                              <td>Country</td>
                              <td><input type=text name=country id=country size=45  value="<?php echo isset($_POST['country']) ? ucfirst($_POST['country']): '' ?>"></td>
                            </tr>
                          </table>
                        </div></td>
                      </tr>
                      <tr>
                        <td height="4" colspan="5">&nbsp;</td>
                      </tr>
                      <tr>
                        
                      </tr>
                      <tr>
                        <td height="21" colspan="5">&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="21" colspan="5">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="5">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="5"><div align="center">
                          <label></label>
                          <p>
                            <label>                            </label>
                            <label>
                            <input type="submit"   name="Submit" value="Submit" />
                            </label>
                          <input type="button" name="Exit" value="Exit" onClick="exit()" /></p>
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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>

