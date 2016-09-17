<?php  include "admin_p.php";?>

<?php


include "conn.php";  
 $check = mysql_query("SELECT * FROM rate") or die('Query failed: ' . mysql_error());
 $check3 = mysql_query("SELECT id,r100,r101_200,r201_300,r301_400,r401_500,r501_600,r601_700,r701_800,r801_1000,g1000 FROM rate ORDER BY id DESC LIMIT 1")or die(mysql_error());
                     
                        
 //$check1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email'")or die(mysql_error());
 //$checkag = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email'")or die(mysql_error());

$table_array = mysql_fetch_array($check);

 
  if(isset($table_array)) {
  
while($sa = mysql_fetch_array($check3))
{
$r100=$sa['r100'];
$r101_200=$sa['r101_200'];
$r201_300=$sa['r201_300'];
$r301_400=$sa['r301_400'];
$r401_500=$sa['r401_500'];
$r501_600=$sa['r501_600'];
$r601_700=$sa['r601_700'];
$r701_800=$sa['r701_800'];
$r801_1000=$sa['r801_1000'];
$g1000=$sa['g1000'];

}
}

if (isset($_POST['Update']))
{

$r100=$_POST['r100'];
$r101_200=$_POST['r101_200'];
$r201_300=$_POST['r201_300'];
$r301_400=$_POST['r301_400'];
$r401_500=$_POST['r401_500'];
$r501_600=$_POST['r501_600'];
$r601_700=$_POST['r601_700'];
$r701_800=$_POST['r701_800'];
$r801_1000=$_POST['r801_1000'];
$g1000=$_POST['g1000'];

mysql_query("UPDATE rate SET r100='$r100',r101_200=$r101_200,r201_300=$r201_300,r301_400=$r301_400 ,r401_500=$r401_500,r501_600=$r501_600
,r601_700=$r601_700,r701_800=$r701_800,r801_1000=$r801_1000,g1000=$g1000 WHERE id = '1'") or die( "<b>Error:</b> Something went wrong, could not edit link status."); 

 
 


 echo "<script type='text/javascript'>
 
 {
 window.alert(' Rate has Successful been Updated')

 }
</script>
	";

}
?>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Modify Rate</title>
<meta name='' content=Kunzle money transfer' />
<meta name='Keywords' content='Money transfer' />
<meta name='Description' content='International money transfer' />
<META NAME='Author' CONTENT='danielbillion@yahoo.com'>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<link rel='shortcut icon' href='fvr.jpg' type='image/jpeg' />
     
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>  <?php include "info.php";  if (isset($name1)){ echo $name1;} ?></title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />

<style type='text/css'>
<!--
body {
	background-color: #CCCCCC;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
	color: #FF0000;
}
a:active {
	text-decoration: none;
}
.style1 {
	font-size: 12px;
	font-style: italic;
	font-weight: bold;
	color: #000099;
}
.style3 {color: #660000}
.style4 {color: #FF0000}
-->
</style></head>

</head>

<body>
<div align="center">
  <table width="584" height="288" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <th width="580" scope="row"><form id="form1" name="form1" method="post" action="">
        <table width="568" height="180" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <th height="46" colspan="6" scope="row">Modify Commission Rating (Agent Only)</th>
          </tr>
          <tr>
            <th height="23" colspan="6" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th height="23" colspan="6" scope="row"><span class="style1">Erase the Existing Value , Enter a new Commission  &amp; click Update :(<span class="style4"> Note for Over &pound;1000 -divide your value by 100</span> ) </span></th>
          </tr>
          <tr>
            <th height="23" colspan="6" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th width="85" scope="row"><span class="style3">Less &pound;100</span> </th>
            <th colspan="2" scope="row"><label>
              <input name="r100" type="text" id="r100"  value="<?php if (isset($r100)){ echo "$r100";} ?>"/>
            </label></th>
            <th width="24" scope="row">&nbsp;</th>
            <th width="97" class="style3" scope="row">&pound;101 - &pound;200</th>
            <th width="181" scope="row"><input name="r101_200" type="text" id="r101_200" value="<?php if (isset($r101_200)){ echo "$r101_200";} ?>" /></th>
          </tr>
          <tr>
            <th colspan="6" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th class="style3" scope="row">&pound;201 - &pound;300</th>
            <th colspan="2" scope="row"><input name="r201_300" type="text" id="r201_300" value="<?php if (isset($r201_300)){ echo "$r201_300";} ?>" /></th>
            <th scope="row">&nbsp;</th>
            <th class="style3" scope="row">&pound;301 - &pound;400</th>
            <th scope="row"><input name="r301_400" type="text" id="r301_400" value="<?php if (isset($r301_400)){ echo "$r301_400";} ?>" /></th>
          </tr>
          <tr>
            <th colspan="6" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th class="style3" scope="row">&pound;401 - &pound;500</th>
            <th colspan="2" scope="row"><input name="r401_500" type="text" id="r401_500"value="<?php if (isset($r401_500)){ echo "$r401_500";} ?>"  /></th>
            <th scope="row">&nbsp;</th>
            <th class="style3" scope="row">&pound;501 - &pound;600</th>
            <th scope="row"><input name="r501_600" type="text" id="r501_600" value="<?php if (isset($r501_600)){ echo "$r501_600";} ?>" /></th>
          </tr>
          <tr>
            <th colspan="6" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th class="style3" scope="row">&pound;601 - &pound;700</th>
            <th colspan="2" scope="row"><input name="r601_700" type="text" id="r601_700" value="<?php if (isset($r601_700)){ echo "$r601_700";} ?>" /></th>
            <th scope="row">&nbsp;</th>
            <th class="style3" scope="row">&pound;701 - &pound;800</th>
            <th scope="row"><input name="r701_800" type="text" id="r701_800" value="<?php if (isset($r701_800)){ echo "$r701_800";} ?>"/></th>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <th colspan="5" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th class="style3" scope="row">&pound;801 - &pound;1000</th>
            <th colspan="2" scope="row"><input name="r801_1000" type="text" id="r801_1000" value="<?php if (isset($r801_1000)){ echo "$r801_1000";} ?>"/></th>
            <th scope="row">&nbsp;</th>
            <th class="style3" scope="row">Greater &pound;1000</th>
            <th scope="row"><input name="g1000" type="text" id="g1000" value="<?php if (isset($g1000)){ echo "$g1000";} ?>" /></th>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <th colspan="5" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th colspan="6" class="style3" scope="row">              <label>
                <div align="center">
                  <input name="Update" type="submit" id="Update" value="Update" />
                </div>
              </label></th>
            </tr>
        </table>
            </form>
      </th>
    </tr>
  </table>
</div>
</body>
</html>
