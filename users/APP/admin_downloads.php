<?php  include "admin_p.php";?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	color: #FFFFFF;
	font-size: 12px;
}

a:link {
	text-decoration: none;
	color: #000000;
}

a:hover {
	text-decoration: none;
	color: green;
}
a:active {
	text-decoration: none;
	color: #F0F0F0;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title>Downloads And Backups</title>
<style type="text/css">
<!--
.style1 {
	color: #663300;
	font-size: 18px;
}
.style2 {font-size: 11px}
.style3 {
	color: #663333;
	font-size: 18px;
}
.style10 {font-size: 13px; color: #330033; font-style: italic; }
.style11 {color: #003333; font-size: 18px; }
-->
</style>
</head>

<body>
<div align="center">

  <table width="780" height="42" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
    <tr>
      <th scope="row"><span class="style1">Downloads And Backups </span>
      <hr />        <a href="admin_page.php" class="style2"></a></th>
    </tr>
  </table>
  <table width="730" height="319" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <th width="730" scope="row"><table width="674" height="221" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <th colspan="2" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th width="353" scope="row"><div align="left"><span class="style10">
            <?php if(($bsize !=="Customer")){ $clat="clat"; echo"<a href='a_download.php?clat=$clat'>  Download Cleared transaction for agent </a>";} ?>
          </span></div></th>
          <th scope="row"><div align="left"><span class="style10">
           <?php  if(($bsize !=="Agent")){  $clct="clct"; echo"<a href='a_download.php?clct=$clct'>Download Cleared transaction for Customer</a>";} ?> 
          </span></div></th>
        </tr>
        <tr>
          <th scope="row"><div align="left"><span class="style10">
            <?php   if(($bsize !=="Customer")){  $dac="dac"; echo"<a href='a_download.php?dac=$dac'>  Download Agent Commissions </a>";} ?> 
          </span></div></th>
          <th width="321" scope="row"><div align="left"><span class="style10"> <?php  if(($bsize !=="Agent")){ $dcc="dcc"; echo"<a href='a_download.php?dcc=$dcc'> Download Customer Commissions</a>";} ?>
          </span></div></th>
        </tr>
        <tr>
       <th scope='row'><?php   if(($bsize !=="Customer")){echo" <div align='left'><span class='style10'><a href='bydate_download_c.php' target='_parent'>Download by Date For Agent</a></span></div></th>";}?>
        <th scope='row'>  <?php  if(($bsize !=="Agent")){echo "<div align='left'><span class='style10'><a href='bydate_download.php' target='_parent'>Download by Date For Customer</a></span></div></th>";}?>
          
        </tr>
        <tr>
          <th colspan="2" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th colspan="2" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
        </tr>
      </table></th>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>

</body>
</html>


<?php 


																									

?>





		
		
		</body>
		

	
		
	
	
	
	
	
	

		
		