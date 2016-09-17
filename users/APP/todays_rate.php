
	
 <?php 		
 include "conn.php"; 

		$result = mysql_query('SELECT *
                         FROM todays_rate
                     ORDER BY id DESC 
                        LIMIT 1') or die('Invalid query: ' . mysql_error());

//print values to screen
while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  
  $rate= $row['rate'];
  $rate1= $row['rate1'];
  $rate2= $row['rate2'];
   $rate3= $row['rate3'];
   $rate4= $row['rate4'];
   $rate5= $row['rate5'];
  $ratenu= $row['nu'];
  
  }
  
  ?>

<?php  include "admin_p.php";?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style2.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="FVR.png" type="image/jpeg" />
<style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
	font-size: 20px;
}
.style2 {
	color: #000066;
	font-style: italic;
}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="627" height="219" border="0" align="center">
    <tr>
      <td height="61" colspan="2" valign="middle"><div align="center" class="style1">Today's Rate Modification </div></td>
    </tr>
    <tr>
      <td><div align="center">Main</div></td>
      <td><div align="center">Nigeria to Uk</div></td>
    </tr>
    <tr>
      <td width="342"><div align="center">
        <input name="rate" type="text" id="rate" value="<?php echo "$rate" ?>"/>
      </div></td>
      <td width="275"><div align="center">
        <input name="ratenu" type="text" id="ratenu" value="<?php echo "$ratenu" ?>"/>
      </div></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">Special Rate 1</div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="rate1" type="text" id="rate1" value="<?php echo "$rate1" ?>" />
      </div></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">Special Rate 2</div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="rate2" type="text" id="rate2" value="<?php echo "$rate2" ?>" />
      </div></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">Special Rate 3</div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="rate3" type="text" id="rate3" value="<?php echo "$rate3" ?>" />
      </div></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">Special Rate 4</div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="rate4" type="text" id="rate4" value="<?php echo "$rate4" ?>" />
      </div></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">Special Rate 5</div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="rate5" type="text" id="rate5" value="<?php echo "$rate5" ?>" />
      </div></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="submit" type="submit" id="submit" value="Submit" />
      </div></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center" class="style2">Please enter value for Today's Rate</div></td>
    </tr>
  </table>
</form>
</body>
</html>




<?php 
 
 // Connects to your Database
 
  //mysql_connect("daphkkoybiz.ipagemysql.com", "dan", "bless") or die(mysql_error());  

 include "conn.php";  


 //This code runs if the form has been submitted

 if (isset($_POST['submit'])) { 

$rate=$_POST['rate'];
$rate1=$_POST['rate1'];
$rate2=$_POST['rate2'];
$rate3=$_POST['rate3'];
$rate4=$_POST['rate4'];
$rate5=$_POST['rate5'];
$ratenu=$_POST['ratenu'];

 //This makes sure they did not leave any fields blank

	 if (empty($_POST['rate'])) {
	
			die('You did not complete all of the required fields');
	
		}

// now we insert it into the database
else{
			$date=date("Y-m-d");
			$insert = "INSERT INTO todays_rate (rate,rate1,rate2,rate3,rate4,rate5,nu,date)
		
					VALUES ('$rate','$rate1','$rate2','$rate3','$rate4','$rate5','$ratenu', '$date')";
		
			$add_member = mysql_query($insert);
			
				echo" <script type='text/javascript'>
			 
			 {
			 window.alert('Your Agent status now been Successful Modiified')
			window.location='admin_page.php';
			 }
			</script> ";

}
	}
	
	
	
	
?>


	
