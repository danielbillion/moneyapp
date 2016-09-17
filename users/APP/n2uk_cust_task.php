<?php  include "admin_p.php";?>


<?PHP

	  include "conn.php";  



 if (isset($_POST['Confirm'])) 
	
	{ 			 $tsk=(($_POST['tsk']));
				 $tcode= $_GET['tcode'];
				
				 include "conn.php";  
				
	
 
 
						  mysql_query("UPDATE trans2 SET status = '$tsk' WHERE tcode = '$tcode' ") or
						   die( "<b>Error:</b> Something went wrong, could not edit link status.");
	 	 
	
		 
		 echo " <script type='text/javascript'> { window.alert('Transaction has now been Modified'); window.location='n2uk_report.php';}</script>"; 
}
	

?>



 <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<link href="style2.css" rel="stylesheet" type="text/css">
<title>Receipt of transactio</title>
<style type='text/css'>
<!--

a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style14 {font-size: 10px}
-->
</style>
</head>

<body>
<p align='left'></p>
	<form id='form1' name='form1' method='post' action=''>
	
  
  <label>
  
    <label></label>
    <div align="center">
      <label></label>
      <table width="478" height="286" border="1" cellpadding="0" cellspacing="0">
        <tr>
          <td width="474"><table width="476" height="461" border="0" cellpadding="0" cellspacing="0" >
            <tr bgcolor="#999999">
              <th height="19" colspan="4" bgcolor="#CCCCCC" scope="row"><span >TRANSACTION CONFIRMATION</span></th>
            </tr>
            <tr>
              <th colspan="4" scope="row"><hr /></th>
            </tr>
            <tr>
              <th colspan="4" scope="row">&nbsp;</th>
            </tr>
            <tr>
              <th scope="row"><div align="left">Task Transaction </div></th>
              <td colspan="3" ><label>
                <select name="tsk" id="tsk">
                  <option selected="selected"> PENDING</option>
                  <option>PAID</option>
                  <option>SUSPENDED</option>
                </select>
              </label></td>
            </tr>
            <tr>
              <th colspan="4" scope="row">&nbsp;</th>
            </tr>
            <tr>
              <th width="168" scope="row"><div align="left" >Sender Name </div></th>
              <td colspan="3" ><div align="center" class="">
                <div align="left">
                  <?PHP  if (isset($_GET['sender']))
				
				echo  strtoupper($_GET['sender']);
				
				
				?>
                </div>
              </div></td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td colspan="3" class="">&nbsp;</td>
            </tr>
            <tr>
              <th scope="row"><div align="left" >Amount to be Sent</div></th>
              <td colspan="3" ><div align="left" >&#8358;
                <?php  if (isset($_GET['amtn'])) echo strtoupper( $_GET['amtn']); ?>
                </span></div></td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td colspan="3" class="">&nbsp;</td>
            </tr>
            <tr>
              <th scope="row"><div align="left" > Equivalence </div></th>
              <td colspan="3" ><div align="left" > &pound;
                <?php  if (isset($_GET['amtp'])) echo strtoupper( $_GET['amtp']); ?>
              </div></td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td colspan="3" class="">&nbsp;</td>
            </tr>
            <tr>
              <th scope="row"><div align="left"><span >Bou Rate</span></div></th>
              <td colspan="3" class=""><span >&#8358;
                <?php  if (isset($_GET['bou'])) echo strtoupper( $_GET['bou']); ?>
              </span></td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td colspan="3" class="">&nbsp;</td>
            </tr>
            <tr>
              <th scope="row"><div align="left"><span >Reference</span></div></th>
              <td colspan="3" class=""><span >
                <?php  if (isset($_GET['tcode'])) echo strtoupper( $_GET['tcode']); ?>
              </span></td>
            </tr>
            <tr>
              <th height="37" colspan="4" scope="row">&nbsp;</th>
            </tr>
            <tr>
              <th height="37" colspan="4" scope="row"><label>
                <input name="Confirm" type="submit" id="Confirm" value="Confirm" />
              </label></th>
            </tr>
            <tr>
              <th height="37" colspan="4" scope="row"><div align="center"> </div>
                <div align="center"></div></th>
            </tr>
            <tr>
              <th height="37" scope="row">&nbsp;</th>
              <th height="37" colspan="3" scope="row"><div align="right"><span class="style14"><a href="admin_page.php" class="style1 style3">Return to administration home page</a></span></div></th>
            </tr>
          </table></td>
        </tr>
      </table>
      </label>
	  
	  
	  


	  
	  
	  
</div>
</form>
<div align="center"></div>
<p>&nbsp; </p>
</body>


</html>



