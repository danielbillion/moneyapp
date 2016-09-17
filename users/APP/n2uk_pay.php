<?php include "admin_p.php"?>


 



 <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title>Operation Delete</title>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
.style1 {
	color: #663300;
	font-weight: bold;
	font-size: 18px;
}
.style3 {
	font-size: 12px;
	font-style: italic;
	color: #0000FF;
	font-weight: bold;
}
.style4 {
	font-size: 12px;
	font-style: italic;
}
-->
</style></head>
</head>

<p align='left'></p>
	<form id='form1' name='form1' method='post' action=''>
	
  
  <label>
  
    <label></label>
 
      <label></label>
      
      </label>
	  
	<html><head>
	<script>

function exit()
{
var x=confirm("Are you sure you want to quit?")
if (x)
	window.location="admin_page.php"
	
	}
</script>



<?PHP
	  
	  $email= $_SESSION['email_ad'];
	  $name=$_SESSION['sfname_ad'];
	  
	  echo $email;


 if (isset($_POST['Submit'])) { 

 
include "conn.php";

/* Begining of Administrative confirmation */



	
 						$check_email = mysql_query("SELECT * FROM agent WHERE email = '".$_SESSION['email']."'")or die(mysql_error());
   
   				while($info_email = mysql_fetch_array( $check_email )) { 	

 
						$_POST['pass'] = stripslashes($_POST['pass']);$info_email['password'] = stripslashes($info_email['password']);
 
			
					 	$_POST['pass'] = md5($_POST['pass']);
				
			if ($_POST['pass'] != $info_email['password']) {{$msg = 'Incorrect password, please try again.';}}

			else {  
			
			
			
			
			
			/* Delete N2uk Cystomer */
			
			 if(isset($_GET['cstd']))
			{
				 include "time.php";$time=time("H:i:s");$type="deleted N2uk customer";$nametype=$_GET['c_name'];
				mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
		
				
				   $custid=$_GET['custid'];
				   
				   /* Move Operation to cancel table for new customer */
		   mysql_query("INSERT INTO  trans2_customer_cancel (custid,fname,lname,mname,mnumber,pnumber,dob,email,address,postcode,date_reg,title,line1,line2,line3,town,county,country,active)
				
			SELECT custid,fname,lname,mname,mnumber,pnumber,dob,email,address,postcode,date_reg,title,line1,line2,line3,town,county,country,active
				 
				  FROM trans2_customer WHERE custid='$custid' ");
   
   /* Move Operation to cancel table for agnew customer */
   
				
				 mysql_query("DELETE FROM trans2_customer WHERE custid='$custid'  ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
				 
				 echo" <script type='text/javascript'>
				 
				 {
				 window.alert('Your N2Uk Customer has now been Successful Cancelled')
				window.location='n2uk_cust_list.php';
				 }
				</script> ";
			
			}
			
			/* end code Delete N2uk Cystomer */
			
			
			/* Transaction status update */
			 if(isset($_GET['op']))
			 
			{$custid=$_GET['custid'];
$tcode=$_GET['tcode'];
$date=$_GET['date'];
$sender=$_GET['sender'];
$r_name=$_GET['r_name'];
$amtn=$_GET['amtn'];
$amtp=$_GET['amtp'];
$bou=$_GET['bou'];
$sold=$_GET['sold'];
$margin=$_GET['margin'];
$profit=$_GET['profit'];
$bankn= $_GET['bankn'];
$bankna= $_GET['bankna'];
$status= $_GET['status'];
$r_phone= $_GET['r_phone'];
$banki= $_GET['banki'];
$r_transfer= $_GET['r_transfer'];
$r_idtype= $_GET['r_idtype'];
$tsk= $_POST['tsk2'];
				
				 include "time.php";$time=time("H:i:s");$type="n2uk_trans_upd";$nametype=$_GET['sender'];
				mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
				
								 mysql_query("UPDATE trans2 SET status = '$tsk' WHERE tcode = '$tcode' ") or
						   die( "<b>Error:</b> Something went wrong, could not edit link status.");

				echo" <script type='text/javascript'>
				 
				 {
				
				window.location='n2uk_report.php?custid=$custid & sender=$sender & amtn=$amtn & tcode=$tcode & bou=$bou & amtp=$amtp';
				 }
				</script> ";
				
			}
			
			/* end Transaction status update */
			
			
			/* delete Transaction s */
			
			if(isset($_GET['opd']))
			 
{$custid=$_GET['custid'];
$tcode=$_GET['tcode'];
$date=$_GET['date'];
$sender=$_GET['sender'];
$r_name=$_GET['r_name'];
$amtn=$_GET['amtn'];
$amtp=$_GET['amtp'];
$bou=$_GET['bou'];
$sold=$_GET['sold'];
$margin=$_GET['margin'];
$profit=$_GET['profit'];
$bankn= $_GET['bankn'];
$bankna= $_GET['bankna'];
$status= $_GET['status'];
$r_phone= $_GET['r_phone'];
$banki= $_GET['banki'];
$r_transfer= $_GET['r_transfer'];
$r_idtype= $_GET['r_idtype'];
				
				 include "time.php";$time=time("H:i:s");$type="n2uk_trans_delete";$nametype=$_GET['sender'];
				mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
				
				
				
				
				
				mysql_query("INSERT INTO trans2_cancel(date,custid,s_phone,r_phone,s_name,r_name,status,tcode,amt_n,amt_p,bou_r,sold_r,margin,profit,bank_info,bank_n, r_transfer,address,banknig,id_type,act_name)
				
			SELECT date,custid,s_phone,r_phone,s_name,r_name,status,tcode,amt_n,amt_p,bou_r,sold_r,margin,profit,bank_info,bank_n, r_transfer,address,banknig,id_type,act_name
				 
				  FROM trans2 WHERE tcode='$tcode' ");
   
   /* Move Operation to cancel table for agnew customer */
    
   
				
				 mysql_query("DELETE FROM trans2 WHERE tcode='$tcode'  ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
				 
				 echo" <script type='text/javascript'>
				 
				 {
				 window.alert('Your N2Uk transaction cancelled')
				window.location='n2uk_report.php';
				 }
				</script> ";
				
				
				
				
				
				
				
			}
			
			
			
			
			
			/* delete receiever */
			
			
			
			if(isset($_GET['opdr']))
			 
{

$r_fname= $_GET['r_fname'];
$r_lname= $_GET['r_lname'];
				
				 include "time.php";$time=time("H:i:s");$type="n2uk_receiver_delete";$nametype=$_GET['c_name']."/$r_fname";
				mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
				
				
				
				
				
				mysql_query("INSERT INTO  trans2_receiver_cancel(custid,cust_name,b_fname,b_lname,b_phone,b_idtype,b_transfer,b_pbank,b_abank,b_actno,date,nbank,act_name)
															
				
			SELECT custid,cust_name,b_fname,b_lname,b_phone,b_idtype,b_transfer,b_pbank,b_abank,b_actno,date,nbank,act_name
				 
				  FROM  trans2_receiver WHERE b_fname='$r_fname' && b_lname='$r_lname' ");
   
   /* Move Operation to cancel table for agnew customer */
    
   
				
				 mysql_query("DELETE FROM trans2_receiver WHERE b_fname='$r_fname' && b_lname='$r_lname'  ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
				 
				 echo" <script type='text/javascript'>
				 
				 {
				 window.alert('Your N2Uk Receiver deleted')
				window.location='n2uk_cust_list.php';
				 }
				</script> ";
				
				
				
				
				
				
				
			}
			
			
			
			
			
			
			}}}
 
 
 
 
 


?>


</head>

<body>
<div align="center">
  <table width="680" height="194" border="1" cellpadding="0" cellspacing="0">
    <tr bgcolor="#FFFFFF">
      <th width="676" scope="row"><form id="form1" name="form1" method="post" action="">
        <table width="650" height="232" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <th colspan="6" scope="row"><div align="center"><span class="style1"> Confirm Cancellation</span> &amp; Update
                    <hr />
              </div></th>
            </tr>
          <tr>
            <th colspan="6" scope="row"><span class="style3">The following details will be affected </span></th>
            </tr>
          <tr>
            <th colspan="3" scope="row">&nbsp;</th>
            <th colspan="3" scope="row">&nbsp;</th>
            </tr>
          <tr>
            <th width="97" scope="row"><div align="right"></div></th>
            <th width="70" scope="row">Name</th>
            <th width="112" scope="row">&nbsp;</th>
            <th width="110" scope="row"> <div align="left"><span class="style4" style="color: #00F">
              <?php
		  
		  
		  if (isset($_GET['c_name']))
		  
		  {
		  echo strtolower($_GET['c_name']);
		  
		  }
		  
		    if (isset($_GET['sender']))
		  
		  {
		  echo strtoupper($_GET['sender']);
		  
		  }
		  
		  
		 else if (isset($_GET['fname']))
		  
		  {
		  echo strtolower($_GET['fname']);
		  
		  }
		  ?>
              &nbsp;</span></div></th>
            <th width="157" scope="row">&nbsp;</th>
            <th width="104" scope="row">&nbsp;</th>
            </tr>
          <tr>
            <th colspan="3" scope="row">&nbsp;</th>
            <th colspan="3" scope="row">&nbsp;</th>
            </tr>
          <tr>
            <th colspan="3" scope="row"><div align="right"></div>
              <div align="center">Customer/ Sender Email / ID</div></th>
            <th class="style4" style="color: #00F" scope="row"> <?php
		  
		  
		  if (isset($_GET['custid']))
		  
		  {
		  echo strtolower($_GET['custid']);
		  
		  }
		  
		  if (isset($_GET['age_email']))
		  
		  {
		  echo strtolower($_GET['age_email']);
		  
		  }
		  
		  
		  
		   if (isset($_GET['ag_email']))
		  
		  {
		  echo strtolower($_GET['ag_email']);
		  
		  }
		  ?>
              &nbsp;</th>
            <th class="style4" scope="row">&nbsp;</th>
            <th class="style4" scope="row">&nbsp;</th>
            </tr>
          <tr>
            <th colspan="3" scope="row">&nbsp;</th>
            <th colspan="3" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th colspan="3" scope="row">Operation Type</th>
            <th colspan="3" scope="row"><div align="left">
            <?php
			
			$tcode=$_GET['tcode'];
$date=$_GET['date'];
$sender=$_GET['sender'];
$r_name=$_GET['r_name'];
$amtn=$_GET['amtn'];
$amtp=$_GET['amtp'];
$bou=$_GET['bou'];
$sold=$_GET['sold'];
$margin=$_GET['margin'];
$profit=$_GET['profit'];
$bankn= $_GET['bankn'];
$bankna= $_GET['bankna'];
$status= $_GET['status'];
$r_phone= $_GET['r_phone'];
$banki= $_GET['banki'];
$r_transfer= $_GET['r_transfer'];
$r_idtype= $_GET['r_idtype'];
			if(isset($_GET['op']) ||isset( $_GET['op'])){ echo "</br>";echo "Transaction Confirmation";
					echo"<select name='tsk2' id='tsk'>
                			<option selected>Pending</option>
                			<option>PAID</option>
							<option>UNPAID</option>
							<option>SUSPENDED</option>
              			</select>";echo "</p>";
						echo "Sender:"; echo strtoupper($_GET['sender']);echo"</br>";
						echo "Transfer Code: ";echo  strtoupper( $_GET['tcode']);echo "</br>";echo "Amount to be Sent:  N";echo  (($_GET['amtn']));
						
					
					}
			
			?>
            
            
            </div></th>
            </tr>
          <tr>
            <th colspan="6" scope="row"> <div align="center">
              <?php  
    if(isset($msg)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="#FF0033"><tr><th class="style3" scope="row">'.$msg.'</th> </tr></table>';} ?>
              &nbsp;</div></th>
            </tr>
          <tr>
            <th colspan="3" scope="row">&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
            </tr>
          <tr>
            <th colspan="3" scope="row">&nbsp;</th>
            <th colspan="3" class="style3" scope="row"><span style="font-size: 14px">Administrative Confirmation for </span>
              <?php 	
				   if(isset($_SESSION['sfname_ad'])){
				   
				  $use=  strtoupper($_SESSION['sfname_ad']);
				
	echo "$use";} ?></th>
            </tr>
          <tr>
            <th colspan="3" scope="row">&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
            </tr>
          <tr>
            <th colspan="3" style="font-size: 12px; color: #906;" scope="row">Password</th>
            <th colspan="2" scope="row"><input name="pass" type="password" id="pass" value="" size="35" /></th>
            <th scope="row">&nbsp;</th>
            </tr>
          <tr>
            <th colspan="3" style="font-size: 14px; color: #906;" scope="row">&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
            </tr>
          
          
          <tr>
            <th height="28" colspan="3" scope="row">&nbsp;</th>
            <th scope="row"><div align="right">
              <input type="submit" name="Submit" value="Confirm" />
              </div></th>
            <th scope="row"><input type="button" name="Exit" value="Exit" onclick="exit()" /></th>
            <th scope="row"><div align="left"></div></th>
            </tr>
          <tr>
            <th colspan="6" scope="row"><label></label></th>
            </tr>
          </table>
      </form></th>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
</body></html>






     

    </div>
	</form>
<div align="center"></div>
<p>&nbsp; </p>
</body>


</html>";



