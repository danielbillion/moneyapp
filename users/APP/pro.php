 <?php
            
 
				
	$result = mysql_query('SELECT id,rate FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());

//print values to screen
while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
 $er= $row['rate'];
 }
	$check = mysql_query("SELECT * FROM rate") or die('Query failed: ' . mysql_error());
 $check3 = mysql_query("SELECT id,r100,r101_200,r201_300,r301_400,r401_500,r501_600,r601_700,r701_800,r801_1000,g1000 FROM rate ORDER BY id DESC LIMIT 1")or die(mysql_error());
                     
					 
					 
					 
					 
/*Commission division & computation  */

$email= $_SESSION['email'];
$checkagcd = mysql_query("SELECT * FROM agent WHERE email='$email'") or die('Query failed: ' . mysql_error());
while($ccg = mysql_fetch_array($checkagcd))
{
	$vala=$ccg['coma'];
	$valb=$ccg['comb'];
}


/* Test if No commission is set for agent */
if ($vala=="" && $valb=="")

{

 $checkcom = mysql_query("SELECT * FROM com") or die('Query failed: ' . mysql_error());
 $check3com = mysql_query("SELECT id,r1ag,r1b,r12ag,r12b,r23ag,r23b,r34ag,r34b,r45ag,r45b,r56ag,r56b,r67ag,r67b,r78ag,r78b,r81ag,r81b,r10ag,r10b,rg1ag,rg1b
  FROM com ORDER BY id DESC LIMIT 1")or die(mysql_error());


$table_array = mysql_fetch_array($checkcom);
  if(isset($table_array)) {
  
while($com = mysql_fetch_array($check3com))
{
$r1b=$com['r1b'];$r1ag=$com['r1ag'];

$r12ag=$com['r12ag'];$r12b=$com['r12b'];

$r23ag=$com['r23ag'];$r23b=$com['r23b'];

$r34ag=$com['r34ag'];$r34b=$com['r34b'];

$r45ag=$com['r45ag'];$r45b=$com['r45b'];

$r56ag=$com['r56ag'];$r56b=$com['r56b'];

$r67ag=$com['r67ag'];$r67b=$com['r67b'];

$r78ag=$com['r78ag'];$r78b=$com['r78b'];

$r81ag=$com['r81ag'];$r34b=$com['r34b'];

$r81b=$com['r81b'];$r81ag=$com['r81ag'];

$r10ag=$com['r10ag'];$r10b=$com['r10b'];

$rg1ag=$com['rg1ag'];$rg1b=$com['rg1b'];
}
}

}


if ($vala !=="" && $valb !=="")

{
$r1b=$valb; $r1ag=$vala;

$r12ag=$vala; $r12b=$valb;

$r23ag=$vala; $r23b=$valb;

$r34ag=$vala;$r34b=$valb;

$r45ag=$vala;$r45b=$valb;

$r56ag=$vala; $r56b=$valb;

$r67ag=$vala;$r67b=$valb;

$r78ag=$vala;$r78b=$valb;

$r81ag=$vala;$r34b=$valb;

$r81b=$valb;$r81ag=$vala;

$r10ag=$vala;$r10b=$valb;

$rg1ag=$vala;$rg1b=$valb;	
}			



					 
					 
					 
					 
					 
$table_array = mysql_fetch_array($check);
 
  if(isset($table_array)) {
  
while($sa = mysql_fetch_array($check3))
{
$r100=$sa['r100'];$r101_200=$sa['r101_200'];
$r201_300=$sa['r201_300'];$r301_400=$sa['r301_400'];
$r401_500=$sa['r401_500'];$r501_600=$sa['r501_600'];
$r601_700=$sa['r601_700'];$r701_800=$sa['r701_800'];
$r801_1000=$sa['r801_1000'];$g1000=$sa['g1000'];
}			

while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  $er= $row['rate']; }
  
   // $mon = $_POST['mon'];
	$mon = ($_POST['inputString']);
	
			
		if ($mon >= 1 && $mon <= 100 ){$tf=$r100; $tr=($mon * $er );
		$tr=($mon * $er );$lc=($mon * $er ); $ap=($mon +$tf);  $lc=($mon * $er );
		$com_a=$r1ag/100 * $tf; $com_d=$r1b/100 * $tf;}

		if ($mon > 100 && $mon <= 200 ){$tf=$r101_200; $tr=($mon * $er );
		$tr=($mon * $er );$lc=($mon * $er ); $ap=($mon +$tf);  $lc=($mon * $er );
		$com_a=$r12ag/100 * $tf; $com_d=$r12b/100 * $tf;}
				
			

		
		if ($mon>= 201 && $mon <= 300 ){$tf=$r201_300; $tr=($mon * $er );
		$tr=($mon * $er );$lc=($mon * $er ); $ap=($mon +$tf);  $lc=($mon * $er );
		$com_a=$r23ag/100 * $tf; $com_d=$r23b/100 * $tf;}
			

					
		if ($mon>= 301 && $mon <= 400 ){$tf=$r301_400; $tr=($mon * $er );
		$tr=($mon * $er );$lc=($mon * $er ); $ap=($mon +$tf);  $lc=($mon * $er ); 
		$com_a=$r34ag/100 * $tf; $com_d=$r34b/100 * $tf;}
				
					
		if ($mon>= 401 && $mon <= 500 ){$tf=$r401_500; $tr=($mon * $er );
		$tr=($mon * $er );$lc=($mon * $er ); $ap=($mon +$tf);  $lc=($mon * $er );
		$com_a=$r45ag/100 * $tf; $com_d=$r45b/100 * $tf;}
				

		
		if ($mon>= 501 && $mon <= 600 ){$tf=$r501_600; $tr=($mon * $er );
		$tr=($mon * $er );$lc=($mon * $er ); $ap=($mon +$tf);  $lc=($mon * $er );
		$com_a=$r56ag/100 * $tf; $com_d=$r56b/100 * $tf;}
				
					
		if ($mon>= 601 && $mon <= 700 ){$tf=$r601_700; $tr=($mon * $er );
		$tr=($mon * $er );$lc=($mon * $er ); $ap=($mon +$tf);  $lc=($mon * $er ); 
		$com_a=$r67ag/100 * $tf; $com_d=$r67b/100 * $tf;}
				

					
		if ($mon>= 701 && $mon <= 800 ){$tf=$r701_800; $tr=($mon * $er );
		$tr=($mon * $er );$lc=($mon * $er ); $ap=($mon +$tf);  $lc=($mon * $er ); 
		$com_a=$r78ag/100 * $tf; $com_d=$r78b/100 * $tf;}
				
					

					
					
		if ($mon>= 801 && $mon <= 1000 ){$tf=$r801_1000; $tr=($mon * $er );
		$tr=($mon * $er );$lc=($mon * $er ); $ap=($mon +$tf);  $lc=($mon * $er ); $tr=($mon * $er );$lc=($mon * $er ); $ap=($mon +$tf);  $lc=($mon * $er ); $com_a=$r81ag/100 * $tf; $com_d=$r81b/100 * $tf;}
				

		
		if ($mon> 1000 ){$tf=($mon * $g1000); $tr=($mon * $er );
		$tr=($mon * $er );$lc=($mon * $er ); $ap=($mon +$tf);  $lc=($mon * $er );
		$com_a=$rg1ag/100 * $tf; $com_d=$rg1b/100 * $tf;
		 }
}


?>