
<?php  include "admin_p.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<body>
<form id="form1" name="form1" method="post" action="">
  <table width="652" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">Office Bank Entry</div></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="63">Bank 1</td>
      <td width="589"><input type="text" name="bank1" id="bank1" size="70" value="<?php 		
 include "conn.php";	 

		$result = mysql_query('SELECT id,bank1,bank2 FROM office ORDER BY id DESC
                      
                        LIMIT 1') or die('Invalid query: ' . mysql_error());

while ($row = mysql_fetch_assoc($result)) { echo $row['bank1'];} 
  ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Bank 2</td>
      <td><input type="text" name="bank2" id="bank2" size="70" value="<?php 	
 include "conn.php";

		$result = mysql_query('SELECT id,bank2,bank1 FROM office ORDER BY id DESC
                      
                        LIMIT 1') or die('Invalid query: ' . mysql_error());

while ($row = mysql_fetch_assoc($result)) { echo $row['bank2'];} 
  ?>"/></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Confirm" />&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>

<?php 
 include "conn.php"; 
 if (isset($_POST['submit'])) { 

$bank1=$_POST['bank1'];
//$body=(str_replace('  ', '',$_POST['body']));
//$body=trim($body);


$bank2=$_POST['bank2'];
//$head=str_replace('  ', '',$_POST['head']);

//$head=trim($head);

 //if (empty($_POST['bank1']) || empty($_POST['bank2']) ) {die('You did not complete all of the required fields');}

$date=date("Y-m-d H:i:s");
 	//$insert = "INSERT INTO office (bank1,bank2,datetime)VALUES ('$bank1','$bank2', '$date)";
 	//$add_member = mysql_query($insert);
	
	
mysql_query("INSERT INTO office (bank1,bank2,datetime)VALUES ('$bank1','$bank2', '$date')") or die(mysql_error());
		
																							 
															
echo"<script type='text/javascript'>
 
 {
 window.alert('Successful been Updated')
 window.location='admin_page.php';

 }
</script>";
	

	}
	

	
	
	
	
	
?>