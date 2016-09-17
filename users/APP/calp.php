


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Kunzle Ltd</title>
	<link href="style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
    <link rel="stylesheet" href="CSS3 Menu_files/css3menu1/style.css" type="text/css" />
<style type="text/css">
.boldhed {
	font-size: 12px;
	color: #000;
	font-family: Arial;
}
.nwfont {
	color: #333;
}
.nwfont {
	font-size: 15px;
	font-weight: bold;
	color: #00F;
}
.txt1 table tr td div table tr td p {
	color: #999;
}
.txt1 table tr td table tr td p {
	color: #F00;
	font-weight: bold;
}
.txt1 table tr td div table tr td p {
	color: #666;
}
.txt1 table tr td div table tr td .circle p {
	font-weight: normal;
}
.txt1 table tr td table tr td p {
	color: #333;
	font-weight: normal;
}
.txt1 table tr td table tr td p a {
	font-weight: normal;
}
hd1 {
	font-weight: bold;
}
.txt1 table tr td table tr td div {
	color: #666;
}
.kun {
	color: #000;
}
.kun {
	font-size: 12px;
}
</style>
<script src="../../Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>




 <?php
            
          if(isset($_POST['queryString']))
{
echo"</br></br>";
echo " <span class='no2'>Payment Summary</span>";echo "</br>";
echo "<img alt='' src='images/1d1.jpg' style='margin:1px 0 26px 0;'>";echo"</br>";
//echo nl2br("<hr>");
 include "conn.php";
				
				
	$result = mysql_query('SELECT id,rate FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());

//print values to screen
while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
 $er= $row['rate'];
 }
				


						
						
	
	/* Extract Commission  value from database */		
	
	$check = mysql_query("SELECT * FROM rate") or die('Query failed: ' . mysql_error());
 $check3 = mysql_query("SELECT id,r100,r101_200,r201_300,r301_400,r401_500,r501_600,r601_700,r701_800,r801_1000,g1000 FROM rate ORDER BY id DESC LIMIT 1")or die(mysql_error());
                     
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
						
						

//print values to screen
while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  $er= $row['rate']; }
  
   // $mon = $_POST['mon'];
	$mon = ($_POST['queryString']);
	//$er=248;
	
 

//if (!isset($_POST['calculate'])) {
//echo "please enter a choice of transfer";}

		
			
		if ($mon >= 1 && $mon <= 100 ){$tf=$r100;  $tr=($mon * $er );
		$tr=($mon * $er );$lc=($mon * $er ); $ap=number_format(($mon +$tf),2); $_SESSION['amount']= $mon; $_SESSION['lc']= $tr=($mon * $er );$lc; $_SESSION['ap']= $ap; $_SESSION['tf']=$tf;
		 echo "Amount to be sent: £ "; echo number_format ($mon,2);echo "<p></p>";echo "  Amount you are paying: £  "; echo number_format(($mon +$tf),2);echo "<p></p>";
		echo "Commission: £ ";echo number_format($tf,2);echo "<p></p>"; echo " Overseas Payment: ₦ "; echo number_format($tr,2);echo "<p></p>";echo "<a href='customer_login.php'  class='style9 style4'><strong>Send Now?</strong></a>";
		 echo "<p></p>";}
					
		


		if ($mon > 100 && $mon <= 200 ){$tf=$r101_200; $tr=($mon * $er );
		$tr=($mon * $er );$lc=($mon * $er ); $ap=number_format(($mon +$tf),2); $_SESSION['amount']= $mon; $_SESSION['lc']= $tr=($mon * $er );$lc; $_SESSION['ap']= $ap; $_SESSION['tf']=$tf;	

			 echo "Amount to be sent: £ "; echo number_format ($mon,2);echo "<p></p>"; echo "  Amount you are paying: £  "; echo number_format(($mon +$tf),2);echo "<p></p>";
			echo "Commission: £ ";echo number_format($tf,2);echo "<p></p>"; echo " Overseas Payment: ₦ "; echo number_format($tr,2);echo "<p></p>";echo "<a href='customer_login.php'  class='style9 style4'><strong>Send Now?</strong></a>";
					 echo "<p></p>";}
				
			

		
		if ($mon>= 201 && $mon <= 300 ){$tf=$r201_300; $tr=($mon * $er );
		$tr=($mon * $er );$lc=($mon * $er ); $ap=number_format(($mon +$tf),2); $_SESSION['amount']= $mon; $_SESSION['lc']= $tr=($mon * $er );$lc; $_SESSION['ap']= $ap; $_SESSION['tf']=$tf;
		  echo "Amount to be sent: £ "; echo number_format ($mon,2);echo "<p></p>";
		 echo "Commission: £ ";echo number_format($tf,2);echo "<p></p>"; echo " Overseas Payment: ₦ "; echo number_format($tr,2);echo "<p></p>";
					
			echo "  Amount you are paying: £  "; echo number_format(($mon +$tf),2); echo "<p></p>";echo "<a href='customer_login.php'  class='style9 style4'><strong>Send Now?</strong></a>";echo "<p></p>";}
			

					
		if ($mon>= 301 && $mon <= 400 ){$tf=$r301_400; $tr=($mon * $er );
		$tr=($mon * $er );$lc=($mon * $er ); $ap=number_format(($mon +$tf),2); $_SESSION['amount']= $mon; $_SESSION['lc']= $tr=($mon * $er );$lc; $_SESSION['ap']= $ap; $_SESSION['tf']=$tf;
		  echo "Amount to be sent: £ "; echo number_format ($mon,2);echo "<p></p>";
			echo "  Amount you are paying: £  "; echo number_format(($mon +$tf),2);echo "<p></p>"; echo "Commission: £ ";echo number_format($tf,2);echo "<p></p>"; echo " Overseas Payment: ₦ "; echo number_format($tr,2);echo "<p></p>";echo "<a href='customer_login.php'  class='style9 style4'><strong>Send Now?</strong></a>";
					 echo "<p></p>";}
				

					
		if ($mon>= 401 && $mon <= 500 ){$tf=$r401_500; $tr=($mon * $er );
		$tr=($mon * $er );$lc=($mon * $er ); $ap=number_format(($mon +$tf),2); $_SESSION['amount']= $mon; $_SESSION['lc']= $tr=($mon * $er );$lc; $_SESSION['ap']= $ap; $_SESSION['tf']=$tf;
					
			 echo "Amount to be sent: £ "; echo number_format ($mon,2);echo "<p></p>";echo "  Amount you are paying: £  "; echo number_format(($mon +$tf),2);echo "<p></p>";
			echo "Commission: £ ";echo number_format($tf,2);echo "<p></p>"; echo " Overseas Payment: ₦ "; echo number_format($tr,2);echo "<p></p>";echo "<a href='customer_login.php'  class='style9 style4'><strong>Send Now?</strong></a>";
					 echo "<p></p>";}
				

		
		if ($mon>= 501 && $mon <= 600 ){$tf=$r501_600; $tr=($mon * $er );
		$tr=($mon * $er );$lc=($mon * $er ); $ap=number_format(($mon +$tf),2); $_SESSION['amount']= $mon; $_SESSION['lc']= $tr=($mon * $er );$lc; $_SESSION['ap']= $ap; $_SESSION['tf']=$tf;
					
			echo "Amount to be sent: £ "; echo number_format ($mon,2);echo "<p></p>";
			echo "  Amount you are paying: £  "; echo number_format(($mon +$tf),2);echo "<p></p>"; echo "Commission: £ ";echo number_format($tf,2);echo "<p></p>"; echo " Overseas Payment: ₦ "; echo number_format($tr,2);echo "<p></p>";echo "<a href='customer_login.php'  class='style9 style4'><strong>Send Now?</strong></a>";
					 echo "<p></p>";}
				
					
		if ($mon>= 601 && $mon <= 700 ){$tf=$r601_700; $tr=($mon * $er );
		$tr=($mon * $er );$lc=($mon * $er ); $ap=number_format(($mon +$tf),2); $_SESSION['amount']= $mon; $_SESSION['lc']= $tr=($mon * $er );$lc; $_SESSION['ap']= $ap; $_SESSION['tf']=$tf;
					
			 echo "Amount to be sent: £ "; echo number_format ($mon,2);echo "<p></p>";
			echo "  Amount you are paying: £  "; echo number_format(($mon +$tf),2);echo "<p></p>"; echo "Commission: £ ";echo number_format($tf,2);echo "<p></p>";
			echo " Overseas Payment: ₦ "; echo number_format($tr,2);echo "<p></p>";echo "<a href='customer_login.php'  class='style9 style4'><strong>Send Now?</strong></a>";echo "<p></p>";
			echo "<p></p>";include ("linker.php"); echo "<p></p>";}
				

					
		if ($mon>= 701 && $mon <= 800 ){$tf=$r701_800; $tr=($mon * $er );
		$tr=($mon * $er );$lc=($mon * $er ); $ap=number_format(($mon +$tf),2); $_SESSION['amount']= $mon; $_SESSION['lc']= $tr=($mon * $er );$lc; $_SESSION['ap']= $ap; $_SESSION['tf']=$tf;
					
			 echo "Amount to be sent £"; echo number_format ($mon,2);echo "<p></p>";
			echo "  Amount you are paying: £  "; echo number_format(($mon +$tf),2);echo "<p></p>"; echo "Commission: £ ";echo number_format($tf,2);echo "<p></p>";
			echo " Overseas Payment: ₦ "; echo number_format($tr,2);echo "<p></p>";echo "<a href='customer_login.php'  class='style9 style4'><strong>Send Now?</strong></a>";echo "<p></p>";include ("linker.php");echo "<p></p>"; }
				
					

					
					
		if ($mon>= 801 && $mon <= 1000 ){$tf=$r801_1000; $tr=($mon * $er );
		$tr=($mon * $er );$lc=($mon * $er ); $ap=number_format(($mon +$tf),2); $_SESSION['amount']= $mon; $_SESSION['lc']= $tr=($mon * $er );$lc; $_SESSION['ap']= $ap; $_SESSION['tf']=$tf;
		 
		$tr=($mon * $er );$lc=($mon * $er ); $ap=number_format(($mon +$tf),2); $_SESSION['amount']= $mon; $_SESSION['lc']= $tr=($mon * $er );$lc; $_SESSION['ap']= $ap; $_SESSION['tf']=$tf;
			echo "Amount to be sent: £ "; echo number_format ($mon,2);echo "<p></p>"; echo "  Amount you are paying: £  "; echo number_format(($mon +$tf),2);echo "<p></p>";
			echo "Commission: £ ";echo number_format($tf,2);echo "<p></p>"; echo " Overseas Payment: ₦ "; echo number_format($tr,2);echo "<p></p>";echo "<a href='customer_login.php'  class='style9 style4'><strong>Send Now?</strong></a>";echo "<p></p>";include ("linker.php");echo "<p></p>";
			 }
				

		
		if ($mon> 1000 ){$tf=($mon * $g1000); $tr=($mon * $er );
		$tr=($mon * $er );$lc=($mon * $er ); $ap=number_format(($mon +$tf),2); $_SESSION['amount']= $mon; $_SESSION['lc']= $tr=($mon * $er );$lc; $_SESSION['ap']= $ap; $_SESSION['tf']=$tf;
		  echo "Amount to be sent: £ "; echo number_format ($mon,2);echo "<p></p>";
			echo "  Amount you are paying: £  "; echo number_format(($mon +$tf),2);echo "<p></p>"; echo "Commission: £ ";echo number_format($tf,2);echo "<p></p>";
			echo " Overseas Payment: ₦ "; echo number_format($tr,2);echo "<p></p>";echo "<a href='customer_login.php'  class='style9 style4'><strong>Send Now?</strong></a>";echo "<p></p>";include ("linker.php");echo "<p></p>";}
				
					







}}


?>