
	
 <?php 		
 include "conn.php"; 

		$result = mysql_query('SELECT id,rate,rate1,rate2,nu
                         FROM todays_rate
                     ORDER BY id DESC 
                        LIMIT 1') or die('Invalid query: ' . mysql_error());

//print values to screen
while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  
  $rate= $row['rate'];
  $rate1= $row['rate1'];
  $rate2= $row['rate2'];
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
      <td height="61" colspan="2" valign="middle"><div align="center" class="style1">Note For Transaction <span style="color: #F00">
        <?php if(isset($_GET['receiptno'])){ echo $_GET['receiptno'];} ?>
      </span></div></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="342"><div align="center"><strong>Note</strong></div></td>
      <td width="275">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <textarea name="note" cols="70" rows="3" id="note"><?php  if (isset($_GET['note']))echo $_GET['note']; ?></textarea>
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
      <td colspan="2"><div align="center" class="style2">Please enter Note For the Transaction</div></td>
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

$note=$_POST['note'];
$receiptno=$_GET['receiptno'];


 //This makes sure they did not leave any fields blank



// now we insert it into the database
$date=date("Y-m-d");
 	mysql_query("UPDATE agent_cust_transaction SET note='$note' WHERE receiptno='$receiptno'");
	
echo"<script type='text/javascript'>
 
 {
 window.alert('TRansaction Note has Successful been Updated')
 window.location='admin_page.php';

 }
</script>
	";
	
//$sql = "SELECT id FROM todays_rate ORDER BY id DESC LIMIT 0,1";
//$sql =SELECT * rate FROM todays_rate ORDER BY id DESC LIMIT 1;

//printf("Last inserted record has id %d\n", mysql_insert_rate());
	
	}
	
	
	
	
?>


	
