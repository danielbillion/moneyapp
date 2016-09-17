<?php  include "admin_p.php";?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<head>

<script type="text/javascript">
window.setTimeout(function(){ document.location.reload(true); }, 15000);
</script>

<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title>Member Views</title>
<style type="text/css">
<!--
.style1 {
	color: #663300;
	font-size: 18px;
}
.style2 {font-size: 11px}
-->
</style>
</head>

<body>
<div align="center">

  <table width="619" height="42" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
    <tr>
      <th width="381" scope="row"><strong>Agent / Customer Logs</strong></th>
      <th width="21" scope="row">&nbsp;</th>
      <th width="21" scope="row">&nbsp;</th>
      <th width="196" scope="row"><a href="admin_page.php" class="style2">Return to administration home page</a></th>
    </tr>
  </table>
</div>

</body>
</html>

<table border=1 style="background-color:#CCCCFF;" align="center" cellpadding="0" cellspacing="0" >



<tr >
<th>No</th>
<th>Name</th>
<th> Last Visit </th>
<th>Log_in Type</th>
<th>Email</th>
<th>Last View</th>
<th>Online</th>
<th></th>
</tr>

<?php 

$link = include "conn.php";
 include "conn.php"; 
  $checka = mysql_query("SELECT * FROM agent   ") or die('Query failed: ' . mysql_error());
    $checkc = mysql_query("SELECT * FROM new_customer  ") or die('Query failed: ' . mysql_error());

 $check = mysql_query("SELECT * FROM agent ") or die('Query failed: ' . mysql_error());
 $check3 = mysql_query("SELECT * FROM last_login WHERE level='0' ORDER BY date DESC ")or die(mysql_error());

$table_array = mysql_fetch_array($check	);

 $tt=0;  $numtra=0;
 
  if(isset($table_array) && $table_array[0] != "") {


		while($rowe=mysql_fetch_array($checka))
			{ 		$email=$rowe['email']; 
					$numtra = $numtra + 1;
					echo "</td><td align='center'>";echo $numtra;
					echo "</td><td align='center'>";echo ucfirst(strtolower($rowe['fname']))." " . ucfirst(strtolower($rowe['lname'])) ; 
				
				$checktt = mysql_query("SELECT * FROM view_page  WHERE email ='$email' 
							ORDER BY id DESC LIMIT 1") or die('Invalid query: ' . mysql_error());
					$num_login = mysql_num_rows($checktt);
							//print values to screen
									while($row=mysql_fetch_array($checktt)){
										
										$pages= $row['page']; $opt = $row['operation']; $op = time()- $opt; 
									
										echo "</td><td align='center'>";echo $row['datetime'];
										echo "</td><td align='center'>";echo $row['type'];
										//echo $total_cust_com;
										echo "</td><td align='center'>";echo $row['email'];
										echo "</td><td align='center'>";echo $row['changes'];
										if($op < 20){ echo "</td><td bgcolor='green' align='center' style='color:white'>";echo "Online";}
										if($op > 20){ echo "</td><td bgcolor='silver' align='center'>";echo "offline";}
									
									}
																		
													echo "</td></tr>";
			}
	
	
	
	
	
	
	
//Customer	
	
	
	while($rowec=mysql_fetch_array($checkc))
			{ 		$email=$rowec['email']; 
					$numtra = $numtra + 1;
					echo "</td><td align='center'>";echo $numtra;
					echo "</td><td align='center'>";echo ucfirst(strtolower($rowec['fname']))." " . ucfirst(strtolower($rowec['lname'])) ; 
				
				$checkttc = mysql_query("SELECT * FROM view_page2  WHERE email ='$email' 
							ORDER BY id DESC LIMIT 1") or die('Invalid query: ' . mysql_error());
					$num_loginc = mysql_num_rows($checkttc);
							//print values to screen
									while($rowc=mysql_fetch_array($checkttc)){
										
										$pages= $rowc['page']; $opt = $rowc['operation']; $op = time()- $opt; 
									
										echo "</td><td align='center'>";echo $rowc['datetime'];
										echo "</td><td align='center'>";echo $rowc['type'];
										//echo $total_cust_com;
										echo "</td><td align='center'>";echo $rowc['email'];
										echo "</td><td align='center'>";echo $rowc['changes'];
										if($op < 20){ echo "</td><td bgcolor='green' align='center' style='color:white'>";echo "Online";}
										if($op > 20){ echo "</td><td bgcolor='silver' align='center'>";echo "offline";}
									
									}
																		
													echo "</td></tr>";
			}
	
	
	
	
				echo "</table>";


 }

		

																										

?>





		
		
		</body>
		

	
		
	
	
	
	
	
	

		
		