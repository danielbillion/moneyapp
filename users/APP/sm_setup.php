
<?php //include "admin_p.php"; ?>
<?php  include "admin_p.php";
include "time.php";
 include "conn.php"; 
  $check2n = mysql_query("SELECT * FROM sm ORDER BY id DESC LIMIT 1") or die('Query failed: ' . mysql_error());
while ($ts=mysql_fetch_array($check2n)){ $tv=$ts['text'];  $tv2=$ts['text2'];}

if(isset($_POST['submit'])){
	{
$text=$_POST['msg'];
$text2=$_POST['msg2'];

	
				
	 //mysql_query("UPDATE busyimg SET ag_img1='$content_ag1'");
		mysql_query("INSERT INTO sm(text,text2,dtime) VALUES('$text','$text2','$dtime')");											
																		
	if(isset($_POST['ck'])){
	$del_id =$_POST['ck']; 

foreach($del_id as $des){
   $sqlx = "DELETE FROM sm WHERE id='".$des."'";
   $resultnm = mysql_query($sqlx);
}			  
	
}
	
	echo "<script>alert(\"Thank you,your new flash messagehas bow bween updated has been updated.\");</script>";}
	mysql_close();
	
	}
	
	
	
	
	
?>
 	


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<style type="text/css">
<!--
body {
	background-color: #cccccc;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}

a:li
.style18 {color: #3333FF}
.style23 {font-size: 12px; color: #330000; }
.style24 {color: #330000}
.style20 {	font-size: 9px;
	font-style: italic;
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="909" height="442" border="0" align="center" cellpadding="0" cellspacing="0" ">
  <tr>
    <th width="909" height="395" scope="row"><form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <p>&nbsp;</p>
      <table width="900" height="138" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr bgcolor="#FFFFFF">
          <th height="19" colspan="5" scope="row">Home</th>
        </tr>

        <tr>
          <th height="19" scope="row">&nbsp;</th>
          <th colspan="4" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th height="19" scope="row">&nbsp;</th>
          <th colspan="4" scope="row"><table width="840" border="0" cellspacing="0" cellpadding="0">
            <tr bgcolor="#FFFFFF">
              <td colspan="3">Slide 2 Message                </td>
              <td>&nbsp;</td>
              <td>Slide 1 Message</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td colspan="3"><div align="center">
                <input name="msg2" type="text" id="msg2" onfocus="this.value=''" value="<?php echo $tv2; ?>" size="50" rows="6" />
                </div></td>
              <td width="41">&nbsp;</td>
              <td width="499"><input name="msg" type="text" id="msg" onfocus="this.value=''" value="<?php echo $tv; ?>" size="50" rows="6"></textarea>                
                </textarea></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td colspan="3" style="font-size: 12px; color: #000; font-weight: bold;">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td width="60" height="36" style="font-size: 12px; color: #000; font-weight: bold;">&nbsp;</td>
              <td width="4">&nbsp;</td>
              <td width="236"><input type="hidden" name="MAX_FILE_SIZE" value="350000000"></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td colspan="5">
              
              &nbsp;
         

                  <?php 
				  
			   echo  "<table border=1 style='background-color:#CCCCFF;' align='center' cellpadding='0' cellspacing='0' >
<caption><EM>Slide Details</EM></caption>
<tr >
<th>Slide</th>
<th>Message 1</th>
<th> M-Message 2 </th>
<th>Delete  </th>
</tr>";	  
				  
				  
				  
				  include "conn.php";
 $checkts = mysql_query("SELECT * FROM sm ") or die('Query failed: ' . mysql_error());$n=1;
while ($ts=mysql_fetch_array($checkts))

{ $tv=$ts['text'];  $tv2=$ts['text2'];$val=$ts['id'];$cv=$ts['id'];

echo "</td><td align='left'>";echo $n;
$n=$n+1;
echo "</td><td align='left'>";echo $tv;

echo "</td><td align='left'>";echo $tv2;
echo "</td><td align='left'>";echo "<a href='sm_setup.php?val=$val'> <input name=ck[] type='checkbox' id=ck[] value='$val' />del</a>";
echo "</td></tr>";

}
		  
			  echo " </table>";
			  ?>
                
             </td>
            </tr>
            </table></th>
        </tr>
        <tr>
          <th width="17" height="19" scope="row"><span class="style24"></span></th>
          <th width="883" colspan="4" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th height="62" colspan="5" scope="row"><label>
            <div align="center">
              <input name="submit" type="submit" id="submit" value="Modify" />
              </div>
            </label></th>
        </tr>
      </table>
        </form>
    </th>
  </tr>
</table>
</body>
</html>
