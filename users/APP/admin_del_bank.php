<?php  include "admin_p.php"?>


 <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title>Operation Delete</title>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
.style1 {
	color: #663300;
	font-weight: bold;
	font-size: 18px;
}
.style3 {
	font-size: 12px;
	font-style: italic;
	color: #0000FF;
	font-weight: bold;
}
.style4 {
	font-size: 12px;
	font-style: italic;
}
-->
</style></head>
</head>

<p align='left'></p>
	<form id='form1' name='form1' method='post' action=''>
	
  
  <label>
  
    <label></label>
    <div align="center">
      <label></label>
      
      </label>
	  
	<html><head>
	<script>

function exit()
{
var x=confirm("Are you sure you want to quit?")
if (x)
	window.location="admin_page.php"
	
	}
</script>

</head>

<body>

<div align="center">
  <table width="680" height="194" border="1" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr>
      <th width="676" scope="row"><table width="650" height="232" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <th colspan="5" scope="row"><div align="center"><span class="style1"> Confirm Delete</span>
            <hr />
            </div></th>
          </tr>
        <tr>
          <th colspan="5" scope="row"><span class="style3">The following details will be affected </span></th>
          </tr>
        <tr>
          <th colspan="2" scope="row">&nbsp;</th>
            <th colspan="3" scope="row">&nbsp;</th>
          </tr>
        <tr>
          <th width="97" scope="row"><div align="right"></div></th>
            <th width="91" scope="row">&nbsp;</th>
            <th width="129" scope="row">
              
              
              <div align="left"><span style="color: #000" >&nbsp;</span>Name Bank</div></th>
            <th colspan="2" scope="row"><span style="color: #000">
              <?php
		  
		  
		  if (isset($_GET['bank']))
		  
		  {
		  echo ucfirst($_GET['bank']);
		  
		  }
		  
		  ?>
            </span></th>
          </tr>
        <tr>
          <th colspan="2" scope="row">&nbsp;</th>
            <th colspan="3" scope="row">&nbsp;</th>
          </tr>
        <tr>
          <th height="28" colspan="2" scope="row">&nbsp;</th>
          <th colspan="2" scope="row"><div align="right">
         
            
            <form id="form1" name="form1" method="post" action="">
            
               <input type="submit" name="Submit" value="Confirm" />
               
            
              </form>
            
          </div></th>
          <th scope="row"><div align="left"></div></th>
        </tr>
        <tr>
          <th colspan="2" scope="row">&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
            <th width="240" scope="row"><label></label></th>
          </tr>
      </table></th>
      </tr>
    </table>
</div>
</body></html>






      <?PHP
	  
	  

 
 
  

 /**************************delete transaction from cuttomer ******************************************** */

 
 
 
  if ( isset($_POST['Submit']) && isset($_GET['db'])) { 
 
include "conn.php";
 


   $bank= $_GET['bank'];

 mysql_query("DELETE FROM bank WHERE bank='$bank' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
 
 echo" <script type='text/javascript'>
 
 {
 window.alert(' Successful Deleted')
window.location='admin_page.php';
 }
</script> ";

 
 }
 
 
 

 
 
 


?>

    </div>
	</form>
<div align="center"></div>
<p>&nbsp; </p>
</body>


</html>



