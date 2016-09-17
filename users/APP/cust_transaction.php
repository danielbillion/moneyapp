<?php include "customer_p.php";    ?>
<?php

if(isset($_GET['r_fname']) && !empty($_GET['r_fname']) AND isset($_GET['r_lname']) && !empty($_GET['r_lname']) 
AND isset($_GET['r_phone']) && !empty($_GET['r_phone'])AND isset($_GET['r_transfer']) && !empty($_GET['r_transfer'])
AND isset($_GET['r_pbank']) && !empty($_GET['r_pbank'])AND isset($_GET['r_idtype']) && !empty($_GET['r_idtype']))

{

	// Verify data
	$r_fname = ($_GET['r_fname']); // Set email variable
	$r_lname = ($_GET['r_lname']); // Set email variable
	$r_phone = ($_GET['r_phone']);
	$r_transfer = ($_GET['r_transfer']);
	$r_bank = ($_GET['r_pbank']);
	$r_idtype = ($_GET['r_idtype']);

	$_SESSION['r_fname']= $r_fname;
	$_SESSION['r_lname']= $r_lname;
	$_SESSION['r_phone']= $r_phone;
	$_SESSION['r_transfer']=$r_transfer;
	$_SESSION['r_bank']=$r_bank;
	$_SESSION['r_idtype']=$r_idtype;
	//echo "<strong>Account holder: </strong>";
	//echo $_SESSION['email'];

$_SESSION['r_actno']= "None";
	
	}
	
	
	else 
	{
	
	$r_fname = ($_GET['r_fname']); // Set email variable
	$r_lname = ($_GET['r_lname']); // Set email variable
	$r_phone = ($_GET['r_phone']);
	$r_transfer = ($_GET['r_transfer']);
	$r_bank = ($_GET['r_abank']);

	$r_actno = ($_GET['r_actno']);

	$_SESSION['r_fname']= $r_fname;
	$_SESSION['r_lname']= $r_lname;
	$_SESSION['r_phone']= $r_phone;
	$_SESSION['r_transfer']=$r_transfer;
	$_SESSION['r_bank']=$r_bank;
	$_SESSION['r_actno']= $r_actno;
	$_SESSION['r_idtype']="None";
	//echo "<strong>Account holder: </strong>";
	//echo $_SESSION['email'];
	
	


	
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #CCCCCC;
	font-size: 12px;
}
.style2 {
	font-size: 18px;
	color: #FFFFFF;
}
.style3 {color: #FF0000}
.style4 {
	font-size: 13px;
	color: #0000FF;
}
.style6 {font-size: 11px}
.style7 {font-size: 12px}
.style8 {font-size: 14px}
.style9 {font-size: 14; }
-->
</style>
</head>

<body>
<div align="center">
  <table width="680" height="501" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <th width="583" scope="row"><form id="form1" name="form1" method="post" action="">
        <table width="558" height="448" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <th height="30" scope="row">&nbsp;</th>
            <th height="30" scope="row">&nbsp;</th>
            <th height="30" colspan="2" scope="row"><strong>INSTANT MONEY TRANSFER </strong><strong>&nbsp;With
                <?php if (isset($name1)){ echo $name1;} ?>
            </strong></th>
            </tr>
          <tr>
            <th height="30" colspan="2" scope="row">&nbsp;</th>
            <th colspan="2" class="style3" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th height="30" colspan="2" scope="row"><div align="right"><span class="style3">PROFILE DETAILS</span> </div></th>
            <th colspan="2" class="style3" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th height="30" colspan="2" scope="row"><div align="left" class="style4">SENDER DETAILS </div></th>
            <th colspan="2" class="style4" scope="row"><div align="left"></div></th>
          </tr>
          <tr>
            <th width="104" height="31" scope="row"><div align="left"><span class="style8">Name</span></div></th>
            <th width="153" scope="row">
              <span class="style7">
              <?PHP if(isset($_SESSION['s_fname'])){ echo strtoupper($_SESSION['s_fname']);}
			 ?>
              </span>              <span class="style6">              &nbsp;</span></th>
            <th width="112" scope="row">&nbsp;</th>
            <th width="189" scope="row"><span class="style3">QUICK CALCULATOR</span></th>
          </tr>
          <tr>
            <th height="30" class="style7" scope="row"><div align="left"><span class="style8">Phone Numbe</span>r</div></th>
            <th height="30" class="style7" scope="row"><?php
			if( isset($_SESSION['s_phone'])){ echo $_SESSION['s_phone'];}?>
			
			&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th height="22" colspan="2" class="style4" scope="row">&nbsp;</th>
            <th width="112" class="style4" scope="row">&nbsp;</th>
            <th width="189" class="style4" scope="row">AMOUNT TO BE SENT &pound;</th>
          </tr>
          <tr>
            <th height="31" colspan="2" class="style4" scope="row"><div align="left">RECEIVER DETAILS </div></th>
            <th colspan="2" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th class="style8" scope="row">&nbsp;</th>
            <th class="style7" scope="row">&nbsp;</th>
            <th width="112" scope="row"><label></label></th>
            <th width="189" scope="row"><input name="mon" type="text" id="mon" /></th>
          </tr>
          <tr>
            <th class="style8" scope="row"><div align="left">First Name </div></th>
            <th class="style7" scope="row"><?php
			if( isset($r_fname)){ echo strtoupper($r_fname);}?>&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th class="style8" scope="row">&nbsp;</th>
            <th class="style7" scope="row">&nbsp;</th>
            <th width="112" scope="row"><label></label></th>
            <th width="189" scope="row"><input name="Calculate" type="submit" id="Calculate" value="Calculate" /></th>
          </tr>
          <tr>
            <th class="style8" scope="row"><div align="left">Last Name </div></th>
            <th class="style7" scope="row"><?php
			if( isset($r_lname)){ echo strtoupper($r_lname);}?>&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th class="style8" scope="row">&nbsp;</th>
            <th class="style7" scope="row">&nbsp;</th>
            <th width="112" rowspan="4" scope="row"><div align="center"></div></th>
            <th width="189" rowspan="4" scope="row"><?php
			
			 if( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
	$email=$_SESSION['email'];

 include "conn.php"; 

		$check = mysql_query("SELECT * FROM new_customer WHERE email='$email'  ") or die('Query failed: ' . mysql_error());
while($row=mysql_fetch_array($check)){
$rs=$row['agrs'];

;}

if( $rs=="N"){
	$result = mysql_query('SELECT id,rate FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
    while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  $er= $row['rate']; }                     
                     
                        
	}
	
else {
	if( $rs=="R1"){
	$result = mysql_query('SELECT id,rate1 FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
	while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  $er= $row['rate1']; }
	}
	
	if( $rs=="R2"){
	$result = mysql_query('SELECT id,rate2 FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
	while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  $er= $row['rate2']; }
	}
	
	
	
	}
						
	$check = mysql_query("SELECT * FROM rate2") or die('Query failed: ' . mysql_error());
 $check3 = mysql_query("SELECT id,r100,r101_200,r201_300,r301_400,r401_500,r501_600,r601_700,r701_800,r801_1000,g1000 FROM rate2 ORDER BY id DESC LIMIT 1")or die(mysql_error());
                     
                        
 //$check1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email'")or die(mysql_error());
 //$checkag = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email'")or die(mysql_error());

$table_array = mysql_fetch_array($check);

 
  if(isset($table_array)) {
  
while($sa = mysql_fetch_array($check3))
{
$r100=$sa['r100'];
$r101_200=$sa['r101_200'];
$r201_300=$sa['r201_300'];
$r301_400=$sa['r301_400'];
$r401_500=$sa['r401_500'];
$r501_600=$sa['r501_600'];
$r601_700=$sa['r601_700'];
$r701_800=$sa['r701_800'];
$r801_1000=$sa['r801_1000'];
$g1000=$sa['g1000'];

}
}					
						
						

//print values to screen

  
    $mon = $_POST['mon'];
	//$er=248;
	
  if (isset($_POST['Calculate']))
  
  {
		
			
		if ($mon >= 1 && $mon <= 100 ){ $tf=$r100;  $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['er']=$er;
		echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>";
		echo "Commission (£):";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
		 echo "<p></p>";
		
				
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='cust_trans_confirmation.php'  class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
					
		


		if ($mon > 100 && $mon <= 200 ){$tf=$r101_200; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['er']=$er;

			echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>"; echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>";
			echo "Commission (£):";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
					 echo "<p></p>";
				
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='cust_trans_confirmation.php'  class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				
			

		
		if ($mon>= 201 && $mon <= 300 ){$tf=$r201_300; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['er']=$er;$_SESSION['er']=$er;
		 echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>";
			echo "Commission (£):";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
					 echo "<p></p>";
			
			
			 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
			<a href='cust_trans_confirmation.php'  class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
			
		
		

					
		if ($mon>= 301 && $mon <= 400 ){ $tf=$r301_400; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['er']=$er;
		 echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>"; echo "Commission (£):";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
					 echo "<p></p>";
					 
					 
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='cust_trans_confirmation.php'  class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				

					
		if ($mon>= 401 && $mon <= 500 ){ $tf=$r401_500; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['er']=$er;
					
			echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>";
			echo "Commission (£):";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
					 echo "<p></p>";
					 
					 
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='cust_trans_confirmation.php'  class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				

		
		if ($mon>= 501 && $mon <= 600 ){ $tf=$r501_600; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['er']=$er;
					
			echo nl2br("Summary");echo nl2br("<hr>");echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>"; echo "Commission (£):";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
					 echo "<p></p>";
					 
					 
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='cust_trans_confirmation.php'  class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				
					
		if ($mon>= 601 && $mon <= 700 ){ $tf=$r601_700; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['er']=$er;
					
			echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>"; echo "Commission (£):";echo $tf;echo "<p></p>";
			echo " Local Payment (Naira):"; echo ($tr);echo "<p></p>";
			 echo "<p></p>";
			 
			
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='cust_trans_confirmation.php'  class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				

					
		if ($mon>= 701 && $mon <= 800 ){ $tf=$r701_800; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['er']=$er;
					
			echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>"; echo "Commission (£):";echo $tf;echo "<p></p>";
			echo " Local Payment (Naira):"; echo ($tr);echo "<p></p>"; 
			
			
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='cust_trans_confirmation.php'  class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				
					

					
					
		if ($mon>= 801 && $mon <= 1000 ){$tf=$r801_1000; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['er']=$er;
		 echo nl2br("Summary");echo nl2br("<hr>");
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;
			echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>"; echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>";
			echo "Commission (£):";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);echo "<p></p>";
			  
			 
			 
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='cust_trans_confirmation.php'  class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				

		
		if ($mon> 1000 ){ $tf=($mon * $g1000); $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['er']=$er;
		 echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>"; echo "Commission (£):";echo $tf;echo "<p></p>";
			echo " Local Payment (Naira):"; echo ($tr);echo "<p></p>";
			
			
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='cust_trans_confirmation.php'  class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
	}}			
			
?></th>
          </tr>
          <tr>
            <th class="style8" scope="row"><div align="left">Phone Number </div></th>
            <th class="style7" scope="row"><?php
			if( isset($r_phone)){ echo $r_phone;}?>&nbsp;</th>
            </tr>
          <tr>
            <th class="style8" scope="row">&nbsp;</th>
            <th class="style7" scope="row">&nbsp;</th>
            </tr>
          <tr>
            <th class="style8" scope="row"><div align="left">Transfer Mode </div></th>
            <th class="style7" scope="row"><?php
			if( isset($r_transfer)){ echo strtoupper($r_transfer);}?>&nbsp;</th>
            </tr>
          <tr>
            <th class="style8" scope="row">&nbsp;</th>
            <th class="style7" scope="row">&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th class="style8" scope="row"><div align="left">Bank</div></th>
            <th class="style7" scope="row"><?php
			if( isset($r_bank)){ echo strtoupper($r_bank);}?>&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th class="style8" scope="row">&nbsp;</th>
            <th class="style7" scope="row">&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th class="style8" scope="row"><div align="left">Proof of Identity </div></th>
            <th class="style7" scope="row"><?php
			if( isset($r_idtype)){ echo strtoupper($r_idtype);}?>&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th class="style8" scope="row"><div align="left">Account no </div></th>
            <th scope="row"><?php
			if( isset($r_actno)){ echo $r_actno;}?>&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th colspan="2" scope="row">&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
          </tr>
        </table>
      </form>      </th>
      <th width="97" scope="row">&nbsp;</th>
    </tr>
  </table>
</div>
</body>
</html>
