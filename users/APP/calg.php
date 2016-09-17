
<?php

 if(isset($_POST['queryString']))
{

$md = 'nu'	;
//$sel = "Bank Account";
include "conn.php"; 

		$result = mysql_query('SELECT id,rate
                         FROM todays_rate
                     ORDER BY id DESC 
                        LIMIT 1') or die('Invalid query: ' . mysql_error());

//print values to screen
while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  
  }

 include "conn.php"; 

		$result = mysql_query('SELECT id,rate FROM todays_rate
                        
                     ORDER BY id DESC 
                        LIMIT 1') or die('Invalid query: ' . mysql_error());
						
						
	
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
}			
						
						

//print values to screen
while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  $er= $row['rate']; }
  
    $mon =($_POST['queryString']);
	//$er=248;
	
  if (isset($_POST['calculate'])) {
$md = 'nu'	;

}

//if (!isset($_POST['calculate'])) {
//echo "please enter a choice of transfer";}
if($md == "nu"){
		
			
		if ($mon >= 1 && $mon <= 100 ){ $tf=$r100;  $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); 
		echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>";
		echo "Commission (£):  ";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
		 echo "<p></p>";
		
					}
		


		if ($mon > 100 && $mon <= 200 ){$tf=$r101_200; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); 

			echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>"; echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>";
			echo "Commission (£):  ";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
					 echo "<p></p>";
				}
			

		
		if ($mon>= 201 && $mon <= 300 ){$tf=$r201_300; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); 
		 echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
		 echo "Commission (£):  ";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
					 echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>";
			
			
		
		}

					
		if ($mon>= 301 && $mon <= 400 ){ $tf=$r301_400; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); 
		 echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>"; echo "Commission (£):  ";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
					 echo "<p></p>";
					 
					 }

					
		if ($mon>= 401 && $mon <= 500 ){ $tf=$r401_500; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); 
					
			echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>";
			echo "Commission (£):  ";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
					 echo "<p></p>";
					 
					}

		
		if ($mon>= 501 && $mon <= 600 ){ $tf=$r501_600; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); 
					
			echo nl2br("Summary");echo nl2br("<hr>");echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>"; echo "Commission (£):  ";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);
					 echo "<p></p>";
					 
					 }
					
		if ($mon>= 601 && $mon <= 700 ){ $tf=$r601_700; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); 
					
			echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>"; echo "Commission (£):  ";echo $tf;echo "<p></p>";
			echo " Local Payment (Naira):"; echo ($tr);echo "<p></p>";include ("linker.php");
			 echo "<p></p>";
			 
			 }

					
		if ($mon>= 701 && $mon <= 800 ){ $tf=$r701_800; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); 
					
			echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>"; echo "Commission (£):  ";echo $tf;echo "<p></p>";
			echo " Local Payment (Naira):"; echo ($tr);echo "<p></p>"; include ("linker.php");
			
			}
					

					
					
		if ($mon>= 801 && $mon <= 1000 ){$tf=$r801_1000; $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); 
		 echo nl2br("Summary");echo nl2br("<hr>");
		$lc=($mon * $er ); $ap=($mon + $tf); 
			echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>"; echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>";
			echo "Commission (£):  ";echo $tf;echo "<p></p>"; echo " Local Payment (Naira):"; echo ($tr);echo "<p></p>";
			 include ("linker.php"); 
			 
			 }

		
		if ($mon> 1000 ){ $tf=($mon * $g1000); $tr=($mon * $er );
		$lc=($mon * $er ); $ap=($mon + $tf); 
		 echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (£):"; echo ($mon);echo "<p></p>";
			echo "  Amount you are Paying  (£):"; echo ($mon + $tf);echo "<p></p>"; echo "Commission (£):  ";echo $tf;echo "<p></p>";
			echo " Local Payment (Naira):"; echo ($tr);echo "<p></p>";include ("linker.php");
			
			}
					

}





}


?>