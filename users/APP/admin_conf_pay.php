<?php  include "admin_p.php";?>


<script>

function exit()
{
var x=confirm("Are you sure you want to quit?")
if (x)
	window.location="admin_page.php"
	
	}
</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>New Payment Session For Agent</title>
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
-->
</style></head>

<body>
<div align="center">
  <table width="596" height="194" border="1" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr>
      <th width="596" scope="row"><table width="583" height="232" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <th colspan="4" scope="row"><div align="center"><span class="style1"> New Payment Confirmation for <?php
		  
		  
		  if (isset($_GET['fname']))
		  
		  {
		  echo strtoupper($_GET['lname']);
		  
		  }
		  
		  ?></span>
            <hr />
          </div></th>
        </tr>
        <tr>
          <th colspan="4" scope="row"><span class="style3">You are about to confirm the following payment to the following agent </span></th>
        </tr>
        <tr>
          <th width="121" scope="row">&nbsp;</th>
          <th colspan="3" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">Name</th>
          <th colspan="3" scope="row">
		  
		  
		  <?php
		  
		  
		  if (isset($_GET['fname']))
		  
		  {
		  echo strtolower($_GET['fname']. " ". $_GET['lname']);
		  
		  }
		  
		  ?>
		  
		  &nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th colspan="3" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">Email</th>
          <th colspan="3" scope="row">
		  
		  <?php
		  
		  
		  if (isset($_GET['ag_email']))
		  
		  {
		  echo strtolower($_GET['ag_email']);
		  
		  }
		  
		  ?>&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th colspan="3" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">Payment</th>
          <th colspan="3" scope="row">
		  
		  &pound;
		  <?php
		  
		  
		  if (isset($_GET['tnp']))
		  
		  {
		  echo strtolower($_GET['tnp']);
		  
		  }
		  
		  ?>
		  
		  &nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th colspan="2" scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th height="28" scope="row">&nbsp;</th>
          <th width="245" scope="row"><div align="right">
            <form id="form1" name="form1" method="post" action="">
              <input type="submit" name="Submit" value="Confirm" />
              <input type="Button" name="Submit2" value="Exit" onclick=exit() />
                                    </form>
            </div></th>
          <th width="100" scope="row">&nbsp;</th>
          <th scope="row"><div align="left"></div></th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th colspan="2" scope="row">&nbsp;</th>
          <th width="117" scope="row"><label></label></th>
        </tr>
      </table></th>
    </tr>
  </table>
</div>
</body>
</html>

<?php
 if (isset($_POST['Submit'])) { 
 
  
 $ag_email=$_GET['ag_email'];
 
include "conn.php";
 
 $ag_email= $_GET['ag_email'];
 
 
 mysql_query("UPDATE agent_cust_transaction SET agent_ps = 'yp' WHERE agent_email='$ag_email' && agent_ps = 'np' ") or die( "<b>Error:</b> Something went wrong, could not edit link status."); 



 echo" <script type='text/javascript'>
 
 {
 alert('Agent has now been paid ')
window.location='admin_agent.php';
 }
</script> ";
 
 }
 
 ?>