<?php  include "admin_p.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><link href="pay.css" rel="stylesheet" type="text/css" />

</head>
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
<table width="725" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="725">&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="">
      <table width="517" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="19" colspan="3" style="text-align: right; font-weight: bold;"><div align="left"></div>            </div></td>
          <td width="23" height="19" style="text-align: right; font-weight: bold;">&nbsp;</td>
          </tr>
        <tr>
          <td style="text-align: left">&nbsp;</td>
          <td colspan="3" style="font-family: arial black; font-size: larger;">AGENT PART PAYMENT -<?php echo strtoupper($_GET['fname']).strtoupper($_GET['lname'])  ?></td>
        </tr>
        <tr>
          <td style="text-align: left">&nbsp;</td>
          <td colspan="3" style="font-family: arial black; font-size: larger;">&nbsp;</td>
        </tr>
        <tr>
          <td width="80" style="text-align: left">&nbsp;</td>
          <td colspan="3" ><span style="font-family: arial black; font-size: larger;">Previous Payment:
              <?php if(isset($_GET['nv'])){ echo $_GET['nv'];} ?>
          </span></td>
          </tr>
        <tr>
          <td colspan="4" style="text-align: left">&nbsp;</td>
          </tr>
        <tr>
          <td style="text-align: right">&nbsp;</td>
          <td width="316">&nbsp;</td>
          <td width="98">&nbsp;</td>
        </tr>
        <tr>
          <td style="font-family: arial black; font-size: larger;">&nbsp;</td>
          <td><span style="font-family: arial black; font-size: larger;">Amount</span>            <input name="val" type="text" size ="30" id="val" value="" /></td>
          <td><input type="submit" name="Submit" id="Submit" value="Submit" /></td>
        </tr>
        <tr>
          <td style="text-align: right">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        </table>
      <label for="val"></label>
    </form></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>






<?php 

//$x= __FILE__;
//echo $x;

if (isset($_POST['val'])){
	include "time.php";
	$val=$_POST['val'];
	 $name=$_SESSION['sfname_ad'];
	$ag_name= strtoupper($_GET['fname']).strtoupper($_GET['lname']);
	$ag_email=$_GET['ag_email'];
	$email=$_GET['ag_email'];
	
	
	
	
	include "time.php";$time=time("H:i:s");$type="payin";$nametype="Pay in".$_POST['val'] ;
	mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
	mysql_query("INSERT INTO clear_trans (amt_send,cla,js,dtime)VALUES ('$val','$name','CL1','$dtime')") or die(mysql_error());
	
	
	
	mysql_query("UPDATE agent SET sta = '$val' WHERE email ='$ag_email' ") or die( "<b>Error:</b> Something went wrong, could not edit link status."); 
	
	
	 echo" <script type='text/javascript'>
							 
							 {
							 window.alert('Part Payment Successful')
							window.location='admin_debtor.php';
							 }
							</script> ";
										
							 
							 
	
	}



?>





		<html>
		<body>
		<br />
		
		
		
		</body>
		

	
    
    
    
    
    
    
    
    
		
	
	
	
	
	
	

		
		