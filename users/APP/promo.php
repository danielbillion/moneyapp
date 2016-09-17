
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
  <table width="413" height="339" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="23"><div align="center">
        <h3>Promotional Offer Entry</h3>
        <hr />
      </div></td>
    </tr>
    <tr>
      <td height="37"><div align="center">
        <h4>Heading</h4>
      </div></td>
    </tr>
    <tr>
      <td height="35"><div align="center">
        <input type="text" name="head" id="head" size="50" value="
        
        <?php 	
 include "conn.php"; 

		$result = mysql_query('SELECT id,promo,head FROM daphkkoy ORDER BY id DESC
                      
                        LIMIT 1') or die('Invalid query: ' . mysql_error());

while ($row = mysql_fetch_assoc($result)) { echo $row['head'];} 
  ?>
        
        
        
        
        
        " />
      </div></td>
    </tr>
    <tr>
      <td height="47"><div align="center">
        <h4>Body</h4>
      </div></td>
    </tr>
    <tr>
      <td height="109"><div align="center">
       
        <textarea name="body" style="width: 400px; height: 150px;">
        <?php 		
 include "conn.php"; 

		$result = mysql_query('SELECT id,promo,head FROM daphkkoy ORDER BY id DESC
                      
                        LIMIT 1') or die('Invalid query: ' . mysql_error());

while ($row = mysql_fetch_assoc($result)) { echo $row['promo'];} 
  ?>
        </textarea>
      </div></td>
    </tr>
    <tr>
      <td height="76"><div align="center">
        <input type="submit" name="submit" id="submit" value="Confirm" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>

<?php 
 include "conn.php";  
 if (isset($_POST['submit'])) { 

$body=$_POST['body'];
//$body=(str_replace('  ', '',$_POST['body']));
//$body=trim($body);


$head=$_POST['head'];
//$head=str_replace('  ', '',$_POST['head']);

//$head=trim($head);

 if (empty($_POST['body']) || empty($_POST['head']) ) {die('You did not complete all of the required fields');}

$date=date("Y-m-d");
 	$insert = "INSERT INTO daphkkoy (head,promo,date)VALUES ('$head','$body', '$date')";
 	$add_member = mysql_query($insert);
	
echo"<script type='text/javascript'>
 
 {
 window.alert('New Promo has Successful been Updated')
 window.location='admin_page.php';

 }
</script>";
	

	}
	

	
	
	
	
	
?>