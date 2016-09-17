
<?php  include "admin_p.php";?>	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="" content="Kunzle money transfer" />
<meta name="Keywords" content="Kunzle money transfer" />
<meta name="Description" content="International money transfer" />
<META NAME="Author" CONTENT="danielbillion@yahoo.com">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="stylede.css" type="text/css" /><style>._css3m{display:none}</style>  
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<link rel="stylesheet" href="nav.css">
     
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>  <?php include "info.php";  if (isset($name1)){ echo $name1;} ?></title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="524" height="289" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="23" colspan="2"><div align="center">
        <h3>Bank to Pay to </h3>
        <hr />
      </div></td>
    </tr>
    <tr>
      <td height="37" colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td height="37" colspan="2">Bank 2        <input type="text" name="bank1" id="bank1" size="50" value="
        <?php 		
 include "conn.php"; 

		$result = mysql_query('SELECT id,bank1,bank2 FROM daphkkoy ORDER BY id DESC
                      
                        LIMIT 1') or die('Invalid query: ' . mysql_error());

while ($row = mysql_fetch_assoc($result)) { echo $row['bank2'];} 
  ?> " /></td>
    </tr>
    <tr>
      <td height="37" colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="161" height="35">Bank 1</td>
      <td width="363"><input type="text" name="bank2" id="bank2" size="50" value="
        
        <?php 	
 include "conn.php"; 

		$result = mysql_query('SELECT id,bank2,bank1 FROM daphkkoy ORDER BY id DESC
                      
                        LIMIT 1') or die('Invalid query: ' . mysql_error());

while ($row = mysql_fetch_assoc($result)) { echo $row['bank1'];} 
  ?>
        
        
        
        
        
        " /></td>
    </tr>
    <tr>
      <td height="14" colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td height="30">&nbsp;</td>
      <td height="30">&nbsp;</td>
    </tr>
    <tr>
      <td height="76" colspan="2"><div align="center">
        <input type="submit" name="submit" id="submit" value="Confirm" />
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="531" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="32" colspan="2">Bank to Pay to </td>
    </tr>
    <tr>
      <td height="41" colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="98" height="49">Bank 1</td>
      <td width="433"><input type="text" name="bank1" id="bank1" size="50" value="
        <?php 		
 include "conn.php"; 

		$result = mysql_query('SELECT id,bank1,bank2 FROM daphkkoy ORDER BY id DESC
                      
                        LIMIT 1') or die('Invalid query: ' . mysql_error());

while ($row = mysql_fetch_assoc($result)) { echo $row['bank2'];} 
  ?> " />&nbsp;</td>
    </tr>
    <tr>
      <td height="61">Bank 2</td>
      <td><input type="text" name="bank3" id="bank3" size="50" value="
        
        <?php 	
 include "conn.php"; 

		$result = mysql_query('SELECT id,bank2,bank1 FROM daphkkoy ORDER BY id DESC
                      
                        LIMIT 1') or die('Invalid query: ' . mysql_error());

while ($row = mysql_fetch_assoc($result)) { echo $row['bank1'];} 
  ?>
        
        
        
        
        
        " /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
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

 if (empty($_POST['bank1']) || empty($_POST['bank2']) ) {die('You did not complete all of the required fields');}

$date=date("Y-m-d H:i:s");
 	$insert = "INSERT INTO office (bank1,prbank2omo,date)VALUES ('$bank1','$bank2', '$bank2')";
 	$add_member = mysql_query($insert);
	
echo"<script type='text/javascript'>
 
 {
 window.alert('New Promo has Successful been Updated')
 window.location='admin_page.php';

 }
</script>";
	

	}
	

	
	
	
	
	
?>