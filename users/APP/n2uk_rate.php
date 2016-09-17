
	
 <?php 		
 include "conn.php"; 

		$result = mysql_query('SELECT id,bou,sold FROM trans2_rate ORDER BY id DESC  LIMIT 1') or die('Invalid query: ' . mysql_error());
                        
                    
                       

//print values to screen
while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  
  $bou= $row['bou'];
  $sold= $row['sold'];
  
  
  }
  
  ?>

<?php  include "admin_p.php";?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="me_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>

<link href="style2.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="FVR.png" type="image/jpeg" />

</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="627" height="219" border="0" align="center">
    <tr>
      <td height="61" colspan="2" valign="middle"><div align="center" class="style1">N2UK Today's Rate Modification </div></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">Bou Rate</div></td>
      <td><div align="center">Sold Rate</div></td>
    </tr>
    <tr>
      <td width="342"><div align="center">
        <input name="bou" type="text" id="bou" value="<?php if(isset($bou)){echo $bou;} ?>"/>
      </div></td>
      <td width="275"><div align="center">
        <input name="sold" type="text" id="sold" value="<?php if(isset($sold)){echo $sold;} ?>"/>
      </div></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="submit" type="submit" id="submit" value="Submit" />
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center" class="style2">Please enter N2UK Rate</div></td>
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

$bou2=$_POST['bou'];
$sold2=$_POST['sold'];


 //This makes sure they did not leave any fields blank

 if (empty($_POST['bou'])) {

 		die('You did not complete all of the required fields');

 	}

// now we insert it into the database

include "time.php";
$date=$dtime;
 	
	$insert = "INSERT INTO trans2_rate (bou,sold,date)

 			VALUES ('$bou2','$sold2', '$date')";

 	$add_member = mysql_query($insert);
	
	
echo"<script type='text/javascript'>
 
 {
 window.alert('N2UK Rate has Successful been Updated')
 window.location='admin_page.php';

 }
</script>
	";
	
//$sql = "SELECT id FROM todays_rate ORDER BY id DESC LIMIT 0,1";
//$sql =SELECT * rate FROM todays_rate ORDER BY id DESC LIMIT 1;

//printf("Last inserted record has id %d\n", mysql_insert_rate());
	
	}
	
	
	
	
?>


	
