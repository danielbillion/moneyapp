
<?php  include "admin_p.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	color: #FFFFFF;
	font-size: 12px;
}

a:link {
	text-decoration: none;
	color: #000000;
}

a:hover {
	text-decoration: none;
	color: green;
}
a:active {
	text-decoration: none;
	color: #F0F0F0;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-size: 18px;
}
.style2 {font-size: 11px}
-->
</style>
</head>

<body>
</body>
</html>

<table border=1 style="background-color:#CCCCFF;" align="center" cellpadding="0" cellspacing="0" >

<caption><EM>Verified Agents </EM></caption>


<tr >
<th>ID</th>
<th>Name</th>



<th> Profile </th>
<th> M-T </th>
<th>Cust  </th>
<th>  ID Uploaded  </th>
<th>  Proof Of Address Uploaded  </th>


<th></th>
</tr>






<?php //session_start();

  
$email= "";

//$email= $_SESSION['email'];


$link = include "conn.php";
 include "conn.php";  

   $check = mysql_query("SELECT * FROM agent WHERE level='0' ORDER BY proofid_size DESC   ") or die('Query failed: ' . mysql_error());
   $checkv = mysql_query("SELECT * FROM agent WHERE  level='0'& proofad_size != ''") or die('Query failed: ' . mysql_error());
 $check3 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '".$email."' ")or die(mysql_error());
 $checkda = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email'")or die(mysql_error());
 $checkts = mysql_query("SELECT * FROM agent ")or die(mysql_error());
 //$check2 = mysql_query("SELECT * FROM agent_cust_transaction WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
$table_array = mysql_fetch_array($checkda);

 $num=0;
  
 // echo $email;
while($row=mysql_fetch_array($check)){
$num=$num + 1 ;

$id= $row['id'];
$fname=$row['fname'];
$lname=$row['lname'];
$ag_email=$row['email'];
$dob=$row['dob'];
$mnum=$row['mnumber'];
$pnum=$row['pnumber'];
$address=$row['address'];
$postcode=$row['postcode'];
$active=$row['active'];
$pads=$row['proofad_size'];
$pids=$row['proofid_size'];
if ($active==1){

$status= "Active";}

else { $status= "Suspended";}


echo "</td><td align='center'>";echo $num;
echo "</td><td align='center'>"; echo  ucfirst(strtolower($row['title'])). " ".ucfirst(strtolower($row['fname'])). " ". ucfirst(strtolower($row['mname'])) . " ". ucfirst(strtolower($row['lname'])) ;
//echo "</td><td align='center'>";echo ucfirst(strtolower($row['lname']));
//echo "</td><td align='center'>";echo strtolower ($row['email']);
//echo "</td><td align='center'>";echo $row['dob'];



echo "</td><td align='center'>";echo "<em><a href='admin_agent_profile.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode '> View-Fp  </a></em>";


echo "</td><td align='center'>";echo "<em><a href='admin_agent_mt.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode '> MT  </a></em>";

echo "</td><td align='center'>";echo "<em><a href='admin_agent_cust_list.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode '> View-C </a></em>";


If ($pads== 0){

echo "</td><td align='center'>";echo "<a href='#'> None </a>";
}

If ($pads > 0){

echo "</td><td align='center'>";echo "<b><a href=#'>Yes </a></b>";
}



If ($pids== 0){

echo "</td><td align='center'>";echo "<a href='#'>-None</a>";
}

If ($pids > 0){

echo "</td><td align='center'>";echo "<b><a href=#'>Yes </a></b>";
}

echo "</td></tr>";

}

echo "</table>";


 


																										

?>




<?php  
    if(isset($msg)){  // Check if $msg is not empty  
       echo '<br> <br>';
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="gray" align="center"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';} 
		
		
		?>
		<html>
		<body>
		<br />
		<div align="center">
		  
         
         
         
         
        <br /><br /> 
         
         
        
        
        
        
        
        
        
        
        
         <table border=1 style="background-color:#CCCCFF;" align="center" cellpadding="0" cellspacing="0" >

<caption><EM>Verified Customers </EM></caption>


<tr >
<th>ID</th>
<th>Name</th>



<th> Profile </th>


<th>  ID Uploaded  </th>
<th>  Proof Of Address Uploaded  </th>


<th></th>
</tr>






<?php //session_start();

  
$email= "";

//$email= $_SESSION['email'];


$link = include "conn.php";
 include "conn.php";  

   $check = mysql_query("SELECT * FROM new_customer WHERE level='0' ORDER BY proofid_size DESC   ") or die('Query failed: ' . mysql_error());
  // $checkv = mysql_query("SELECT * FROM customer WHERE proofad_size != ''") or die('Query failed: ' . mysql_error());
// $check3 = mysql_query("SELECT * FROM cust_transaction WHERE agent_email = '".$email."' ")or die(mysql_error());
// $checkda = mysql_query("SELECT * FROM cust_transaction WHERE agent_email = '$email'")or die(mysql_error());
 //$checkts = mysql_query("SELECT * FROM agent ")or die(mysql_error());
 //$check2 = mysql_query("SELECT * FROM agent_cust_transaction WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
$table_array = mysql_fetch_array($checkda);

 $num=0;
  
 // echo $email;
while($row=mysql_fetch_array($check)){
$num=$num + 1 ;

$id= $row['id'];
$fname=$row['fname'];
$lname=$row['lname'];
$ag_email=$row['email'];
$dob=$row['dob'];
$mnum=$row['mnumber'];
$pnum=$row['pnumber'];
$address=$row['address'];
$postcode=$row['postcode'];
$active=$row['active'];
$pads=$row['proofad_size'];
$pids=$row['proofid_size'];
if ($active==1){

$status= "Active";}

else { $status= "Suspended";}


echo "</td><td align='center'>";echo $num;
echo "</td><td align='center'>"; echo  ucfirst(strtolower($row['title'])). " ".ucfirst(strtolower($row['fname'])). " ". ucfirst(strtolower($row['mname'])) . " ". ucfirst(strtolower($row['lname'])) ;
//echo "</td><td align='center'>";echo ucfirst(strtolower($row['lname']));
//echo "</td><td align='center'>";echo strtolower ($row['email']);
//echo "</td><td align='center'>";echo $row['dob'];



echo "</td><td align='center'>";echo "<em><a href='admin_cust_profile.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode '> View-Fp  </a></em>";






If ($pads== 0){

echo "</td><td align='center'>";echo "<a href='#'> None </a>";
}

If ($pads > 0){

echo "</td><td align='center'>";echo "<b><a href=#'>Yes </a></b>";
}



If ($pids== 0){

echo "</td><td align='center'>";echo "<a href='#'>-None</a>";
}

If ($pids > 0){

echo "</td><td align='center'>";echo "<b><a href=#'>Yes </a></b>";
}

echo "</td></tr>";

}

echo "</table>";


 


																										

?>
      
      
      
      
      
       <br /><br /> 
         
         
        
        
        
        
        
        
        
        
        
         <table border=1 style="background-color:#CCCCFF;" align="center" cellpadding="0" cellspacing="0" >

<caption><EM>Verified Agent Customers </EM></caption>


<tr >
<th>ID</th>
<th>Name</th>



<th> Profile </th>
<th> Agent Name </th>


<th>  ID Uploaded  </th>
<th>  Proof Of Address Uploaded  </th>


<th></th>
</tr>






<?php //session_start();

  
$email= "";

//$email= $_SESSION['email'];


$link = include "conn.php";
 include "conn.php";  

   $check = mysql_query("SELECT * FROM agent_new_customer ORDER BY proofid_size  DESC   ") or die('Query failed: ' . mysql_error());
  // $checkv = mysql_query("SELECT * FROM customer WHERE proofad_size != ''") or die('Query failed: ' . mysql_error());
// $check3 = mysql_query("SELECT * FROM cust_transaction WHERE agent_email = '".$email."' ")or die(mysql_error());
// $checkda = mysql_query("SELECT * FROM cust_transaction WHERE agent_email = '$email'")or die(mysql_error());
 //$checkts = mysql_query("SELECT * FROM agent ")or die(mysql_error());
 
$table_array = mysql_fetch_array($checkda);

 $num=0;
  
 // echo $email;
while($row=mysql_fetch_array($check)){
$num=$num + 1 ;

$id= $row['id'];
$fname=$row['fname'];
$lname=$row['lname'];
$ag_email=$row['email'];
$c_ag_email=$row['email'];
$agent_email=$row['agent_email'];
$dob=$row['dob'];
$mnum=$row['mnumber'];
$pnum=$row['pnumber'];
$address=$row['address'];
$postcode=$row['postcode'];
$active=$row['active'];
$pads=$row['proofad_size'];
$pids=$row['proofid_size'];
$ag_email=$row['agent_email'];
if ($active==1){

$status= "Active";}

else { $status= "Suspended";}


echo "</td><td align='center'>";echo $num;
echo "</td><td align='center'>"; echo  ucfirst(strtolower($row['title'])). " ".ucfirst(strtolower($row['fname'])). " ". ucfirst(strtolower($row['mname'])) . " ". ucfirst(strtolower($row['lname'])) ;
//echo "</td><td align='center'>";echo ucfirst(strtolower($row['lname']));
//echo "</td><td align='center'>";echo strtolower ($row['email']);
//echo "</td><td align='center'>";echo $row['dob'];



echo "</td><td align='center'>";echo "<em><a href='admin_agent_cust_profile.php?fname=$fname & lname=$lname & ag_email=$ag_email & c_ag_email=$c_ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode '> View-Fp  </a></em>";


$checkui = mysql_query("SELECT * FROM agent WHERE email = '$ag_email' ")or die(mysql_error());
while($rw=mysql_fetch_array($checkui)){
	
$fname=$rw['fname'];
$lname=$rw['lname'];
$lname=$rw['mname'];

if(!isset($rw)) {echo "</td><td align='center'>"; echo  " Unknown Agent" ;}

echo "</td><td align='center'>"; echo  ucfirst(strtolower($rw['fname'])). " ". ucfirst(strtolower($rw['mname'])) . " ". ucfirst(strtolower($rw['lname'])) ;


}
/*
$check3 = mysql_query("SELECT * FROM agent WHERE email = '' ")or die(mysql_error());
while($rws=mysql_fetch_array($check3)){
	
$fname=$rws['fname'];
$lname=$rws['lname'];
$lname=$rws['mname'];
echo "</td><td align='center'>"; echo  " Unknown Agent" ;
}*/



If ($pads== 0){

echo "</td><td align='center'>";echo "<a href='#'> None </a>";
}

If ($pads > 0){

echo "</td><td align='center'>";echo "<b><a href=#'>Yes </a></b>";
}



If ($pids== 0){

echo "</td><td align='center'>";echo "<a href='#'>-None</a>";
}

If ($pids > 0){

echo "</td><td align='center'>";echo "<b><a href=#'>Yes </a></b>";
}

echo "</td></tr>";

}

echo "</table>";


 


																										

?>   
         
         </body>
		
		
		</body>
		

	
		
	
	
	
	
	
	

		
		