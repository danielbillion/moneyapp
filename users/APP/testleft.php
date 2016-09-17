<?php session_start();

echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta name='' content=Kunzle money transfer' />
<meta name='Keywords' content='Money transfer' />
<meta name='Description' content='International money transfer' />
<META NAME='Author' CONTENT='danielbillion@yahoo.com'>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<link rel='shortcut icon' href='fvr.jpg' type='image/jpeg' />
     
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>  <?php include "info.php";  if (isset($name1)){ echo $name1;} ?></title>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />

<style type='text/css'>
<!--
body {
	background-color: #CCCCCC;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #0066CC;
}
.style5 {color: #660000}
.style7 {color: #000033}
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
	color: #FF0000;
}
a:active {
	text-decoration: none;
}
.style10 {font-family: Batang}
.style11 {	font-family: 'Levenim MT';
	color: #000066;
}
.style12 {font-size: 24px}
-->
</style></head>

<body>
<table width='231' height='495' border='0'>
  <tr>
    <td width='274' height='491'><table width='225' height='449' border='0'>
      <tr>
        <td width='219'><p class='style1'><span class='style5'>Today's Rate:</span> <span class='style7'>&pound;1=N";
		
		
 include "conn.php"; 

		$result = mysql_query('SELECT id,rate
                         FROM todays_rate
                     ORDER BY id DESC 
                        LIMIT 1') or die('Invalid query: ' . mysql_error());

//print values to screen
while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  echo $row['rate'];} echo "
  .00</span></p>
          <p class='style1'>&nbsp;</p>
          <p align='center' class='style1'>Quick Calculator</p>
          <hr class='style1' />
          
		  
		  <form id='form1' name='form1' method='post' action='leftdesign.php'>
           
            
            <p align='center'><span class='style1'> Money Destination</span></p>
            <p align='left'>
              <label>
              <input name='md' type='radio' value='nu' checked='checked' />
              </label>
              <label> </label>
				United Kingdom To Nigeria</p>
            <p align='left'>
              <label>
              <input name='md' type='radio' value='un' />
              </label>
              <label> </label>
Nigeria To 
<label> </label>
<label> </label>
United Kingdom</p>
            <p align='center'>
              <label>
              Transfer Type 
              <select name='select'>
                <option>(Select)</option>
                <option>PickUp </option>
                <option>Bank Account</option>
              </select>
              </label>
            </p>
            <p align='center'>Amount to be Sent N / &pound;</p>
            <p align='center'>
              <label>
              <input name='mon' type='text' id='mon' />
              </label>
</p>
            <p align='center'>
              <input name='calculate' type='submit' id='calculate' value='Calculate' />
              </label>
              <label></label>
            </p>
            <div align='left'>";

   if( $_SERVER['REQUEST_METHOD'] == 'POST' )
{

 include "conn.php"; 

		$result = mysql_query('SELECT id,rate
                         FROM todays_rate
                     ORDER BY id DESC 
                        LIMIT 1') or die('Invalid query: ' . mysql_error());

//print values to screen
while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  $er= $row['rate']; }
  
    $mon = $_POST['mon'];
	//$er=248;
	
  if (isset($_POST['calculate'])) {
$md = $_POST['md'];
$sel = $_POST['select'];
}

//if (!isset($_POST['calculate'])) {
//echo "please enter a choice of transfer";}
if($md == "nu"){
		
			
		if ($mon >= 1 && $mon <= 100 ){ $tf=5;  $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['trans_type']= $sel;
		echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>";
		echo "Commission:  ";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
		 echo "<p></p>";
		
					if($sel == "Bank Account"){
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_bank.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
					else
						{echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
						<a href='transaction_pickup.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}}
		


		if ($mon > 100 && $mon <= 200 ){$tf=10; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['trans_type']= $sel;

			echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>"; echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>";
			echo "Commission:  ";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
					 echo "<p></p>";
				if($sel == "Bank Account"){
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_bank.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				else
					{echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_pickup.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}}
			

		
		if ($mon>= 201 && $mon <= 300 ){$tf=15; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['trans_type']= $sel;
		 echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>";
			
			if($sel == "Bank Account"){
			 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
			<a href='transaction_bank.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
			else
			{echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
			<a href='transaction_pickup.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
		
		}

					
		if ($mon>= 301 && $mon <= 400 ){ $tf=20; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['trans_type']= $sel;
		 echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>"; echo "Commission:  ";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
					 echo "<p></p>";
					 
					 if($sel == "Bank Account"){
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_bank.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				else
					{echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_pickup.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}}

					
		if ($mon>= 401 && $mon <= 500 ){ $tf=22; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['trans_type']= $sel;
					
			echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>";
			echo "Commission:  ";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
					 echo "<p></p>";
					 
					 if($sel == "Bank Account"){
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_bank.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				else
					{echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_pickup.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}}

		
		if ($mon>= 501 && $mon <= 600 ){ $tf=25; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['trans_type']= $sel;
					
			echo nl2br("Summary");echo nl2br("<hr>");echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>"; echo "Commission:  ";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
					 echo "<p></p>";
					 
					 if($sel == "Bank Account"){
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_bank.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				else
					{echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_pickup.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}}
					
		if ($mon>= 601 && $mon <= 700 ){ $tf=27; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['trans_type']= $sel;
					
			echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>"; echo "Commission:  ";echo $tf;echo "<p></p>";
			echo " Local Payment (Naira):"; echo ($tr);echo "<p></p>";include ("linker.php");
			 echo "<p></p>";
			 
			 if($sel == "Bank Account"){
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_bank.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				else
					{echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_pickup.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}}

					
		if ($mon>= 701 && $mon <= 800 ){ $tf=29; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['trans_type']= $sel;
					
			echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>"; echo "Commission:  ";echo $tf;echo "<p></p>";
			echo " Local Payment (Naira):"; echo ($tr);echo "<p></p>"; include ("linker.php");
			
			if($sel == "Bank Account"){
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_bank.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				else
					{echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_pickup.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}}
					

					
					
		if ($mon>= 801 && $mon <= 1000 ){$tf=30; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['trans_type']= $sel;
		 echo nl2br("Summary");echo nl2br("<hr>");
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;
			echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>"; echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>";
			echo "Commission:  ";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);echo "<p></p>";
			 include ("linker.php"); 
			 
			 if($sel == "Bank Account"){
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_bank.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				else
					{echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_pickup.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}}

		
		if ($mon> 1000 ){ $tf=($mon * 0.03); $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['trans_type']= $sel;
		 echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>"; echo "Commission:  ";echo $tf;echo "<p></p>";
			echo " Local Payment (Naira):"; echo ($tr);echo "<p></p>";include ("linker.php");
			
			if($sel == "Bank Account"){
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_bank.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				else
					{echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_pickup.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}}
					

}



if($md == "un"){

		if ($mon >= 1 && $mon <= 100 ){ $tf=5;  $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['trans_type']= $sel;
		echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>";
		echo "Commission:  ";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
		 echo "<p></p>";
		
					if($sel == "Bank Account"){
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_bank.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
					else
						{echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
						<a href='transaction_pickup.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}}
		


		if ($mon > 100 && $mon <= 200 ){$tf=10; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['trans_type']= $sel;

			echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>"; echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>";
			echo "Commission:  ";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
					 echo "<p></p>";
				if($sel == "Bank Account"){
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_bank.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				else
					{echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_pickup.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}}
			

		
		if ($mon>= 201 && $mon <= 300 ){$tf=15; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['trans_type']= $sel;
		 echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>";
			
			if($sel == "Bank Account"){
			 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
			<a href='transaction_bank.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
			else
			{echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
			<a href='transaction_pickup.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
		
		}

					
		if ($mon>= 301 && $mon <= 400 ){ $tf=20; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['trans_type']= $sel;
		 echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>"; echo "Commission:  ";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
					 echo "<p></p>";
					 
					 if($sel == "Bank Account"){
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_bank.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				else
					{echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_pickup.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}}

					
		if ($mon>= 401 && $mon <= 500 ){ $tf=22; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['trans_type']= $sel;
					
			echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>";
			echo "Commission:  ";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
					 echo "<p></p>";
					 
					 if($sel == "Bank Account"){
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_bank.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				else
					{echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_pickup.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}}

		
		if ($mon>= 501 && $mon <= 600 ){ $tf=25; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['trans_type']= $sel;
					
			echo nl2br("Summary");echo nl2br("<hr>");echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>"; echo "Commission:  ";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
					 echo "<p></p>";
					 
					 if($sel == "Bank Account"){
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_bank.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				else
					{echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_pickup.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}}
					
		if ($mon>= 601 && $mon <= 700 ){ $tf=27; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['trans_type']= $sel;
					
			echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>"; echo "Commission:  ";echo $tf;echo "<p></p>";
			echo " Local Payment (Naira):"; echo ($tr);echo "<p></p>";include ("linker.php");
			 echo "<p></p>";
			 
			 if($sel == "Bank Account"){
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_bank.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				else
					{echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_pickup.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}}

					
		if ($mon>= 701 && $mon <= 800 ){ $tf=29; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['trans_type']= $sel;
					
			echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>"; echo "Commission:  ";echo $tf;echo "<p></p>";
			echo " Local Payment (Naira):"; echo ($tr);echo "<p></p>"; include ("linker.php");
			
			if($sel == "Bank Account"){
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_bank.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				else
					{echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_pickup.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}}
					

					
					
		if ($mon>= 801 && $mon <= 1000 ){$tf=30; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['trans_type']= $sel;
		 echo nl2br("Summary");echo nl2br("<hr>");
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;
			echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>"; echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>";
			echo "Commission:  ";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);echo "<p></p>";
			 include ("linker.php"); 
			 
			 if($sel == "Bank Account"){
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_bank.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				else
					{echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_pickup.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}}

		
		if ($mon> 1000 ){ $tf=($mon * 0.03); $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; $_SESSION['tf']= $tf;$_SESSION['trans_type']= $sel;
		 echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>"; echo "Commission:  ";echo $tf;echo "<p></p>";
			echo " Local Payment (Naira):"; echo ($tr);echo "<p></p>";include ("linker.php");
			
			if($sel == "Bank Account"){
					 echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_bank.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}
				else
					{echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr><td><div align='center' class='style8'>
					<a href='transaction_pickup.php' target='mainframe' class='style9 style4'><strong>Send Now</strong></a></div></td> </tr></table>";}}
					
}

}


?>
          </div></form>          </td>
      </tr>
      <tr>
        <td><p align="center" class="style11 style12"><strong>Getting you the best exchange rates</strong></p>
          <p class="style10">We are experts in foreign exchange and international money transfers &ndash;   getting you the best rates of exchange is what we do. If you need to   make a transfer quickly, or you have payments to make over a longer   period of time, our currency market specialists are always on hand to   help.</p>
          <ul>
            <li class="style10">Unbeatable exchange rates.</li>
            <li class="style10">Low commission and low transfer fees.</li>
            <li class="style10">Transfers arranged in seconds by telephone or online.</li>
          </ul></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
