
<?php include "admin_p.php";?>
<?php
	
	
	
	if ( isset($_POST['Submit']) ){
		$dbanke=$_POST['dbank']; 
			
		$banke=$_POST['bank'];
		include "time.php";
		$dtime=$dtime;
		mysql_query("INSERT INTO  trans2_bank (status,bank)

 VALUES ('$dbanke','$banke') ") or die(mysql_error());
 
 echo" <script type='text/javascript'>
 
 {
 window.alert(' Successful Added')
window.location='n2uk_bank.php';
 }
</script> ";
		
	}
	
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="me_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>

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
<table width="331" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="327">&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="">
      <table width="517" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="19" colspan="5" style="text-align: right; font-weight: bold; font-size: 18px; color: #600;"><div align="left">Naija2UK Money Transfer</div></td>
          </tr>
        <tr>
          <td height="19" style="text-align: right; font-weight: bold;">&nbsp;</td>
          <td colspan="4" style="text-align: right; font-weight: bold;">&nbsp;</td>
        </tr>
        <tr>
          <td height="19" style="text-align: right; font-weight: bold;">&nbsp;</td>
          <td colspan="4" style="text-align: right; font-weight: bold;">&nbsp;</td>
        </tr>
        <tr>
          <td height="19" style="text-align: right; font-weight: bold;"><div align="center"></div></td>
          <td colspan="4" style="text-align: right; font-weight: bold;"><div align="center">Type
          </div>            <hr /></td>
          </tr>
        <tr>
          <td width="149" style="text-align: right"><div align="left">
            <input type="radio" name="dbank" id="dbank2" value="p" />
Pick Up</div></td>
          <td width="178"><div align="center">
                <input type="radio" name="dbank" id="dbank3" value="nb" /> 
            Nig Bank
          </div></td>
          <td colspan="3"><div align="right">
                <input type="radio" name="dbank" id="dbank" value="b" />
            Bank Account</div></td>
          </tr>
        <tr>
          <td style="text-align: right">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td style="text-align: right">New Bank Name</td>
          <td colspan="2"><input name="bank" type="text" size ="30" id="bank" value="" /></td>
          <td colspan="2"><input type="submit" name="Submit" id="Submit" value="Submit" /></td>
        </tr>
        <tr>
          <td style="text-align: right">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
        </tr>
        </table>
      <label for="bank"></label>
    </form></td>
  </tr>
</table>
</body>
</html>

<table border=1 style="background-color:#CCCCFF;" align="center" cellpadding="0" cellspacing="0" >

<caption><EM>Banks</EM></caption>


<tr >
<th>ID</th>
<th>Bank</th>
<th>For</th>


<th></th>
</tr>






<?php 

  
$email= $_SESSION['email'];



$link = include "conn.php";
 include "conn.php";  
 $check = mysql_query("SELECT * FROM  trans2_bank ORDER BY bank") or die('Query failed: ' . mysql_error());
 $check3 = mysql_query("SELECT * FROM  trans2_bank")or die(mysql_error());

$table_array = mysql_fetch_array($check);

if(!$table_array) {
   
  //
 $msg = "This database is empty please start entering bank institutions name";	}

 $num=0;
  //if(isset($table_array) && $table_array[0] != "") {
  
 // echo $email;
while($row=mysql_fetch_array($check)){
$num=$num + 1 ;

if ($row['status']=="p"){ $status="Pickup";}
if ($row['status']=="nb"){ $status="Nig Bank";}
else {$status="Bank Account";}

$id= $row['id'];
$bank=$row['bank'];

$db="db";


echo "</td><td align='center'>";echo $num;
echo "</td><td align='center'>"; echo  ucfirst(strtolower($bank));
echo "</td><td align='center'>";	echo $status;
//echo "</td><td align='center'>";echo ucfirst(strtolower($row['lname']));
echo "</td><td align='center'>";echo "<em><a href='n2uk_del_bank.php?bank=$bank & db=$db '> Delete </a></em>";
//echo "</td><td align='center'>";echo strtolower ($row['email']);
//echo "</td><td align='center'>";echo $row['dob'];





//echo "</td><td align='center'>";echo "<em><a href='admin_agent_profile.php? '> $num </a></em>";
//echo "</td><td align='center'>";echo "<em><a href='admin_agent_profile.php? '> $bank </a></em>";



echo "</td></tr>";

}

echo "</table>";


 //}


																										

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
		
		
		
		</body>
		

	
    
    
    
    
    
    
    
    
		
	
	
	
	
	
	

		
		