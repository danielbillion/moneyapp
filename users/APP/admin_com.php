<?php  include "admin_p.php";?>

<?php

include "time.php"; $date=$dtime;
include "conn.php";  
 $check = mysql_query("SELECT * FROM com") or die('Query failed: ' . mysql_error());
 $check3 = mysql_query("SELECT id,r1ag,r1b,r12ag,r12b,r23ag,r23b,r34ag,r34b,r45ag,r45b,r56ag,r56b,r67ag,r67b,r78ag,r78b,r81ag,r81b,r10ag,r10b,rg1ag,rg1b
  FROM com ORDER BY id DESC LIMIT 1")or die(mysql_error());
                     
                        
 //$check1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email'")or die(mysql_error());
 //$checkag = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email'")or die(mysql_error());

$table_array = mysql_fetch_array($check);
  if(isset($table_array)) {
  
while($com = mysql_fetch_array($check3))
{
$r1b=$com['r1b'];$r1ag=$com['r1ag'];

$r12ag=$com['r12ag'];$r12b=$com['r12b'];

$r23ag=$com['r23ag'];$r23b=$com['r23b'];

$r34ag=$com['r34ag'];$r34b=$com['r34b'];

$r45ag=$com['r45ag'];$r45b=$com['r45b'];

$r56ag=$com['r56ag'];$r56b=$com['r56b'];

$r67ag=$com['r67ag'];$r67b=$com['r67b'];

$r78ag=$com['r78ag'];$r78b=$com['r78b'];

$r81ag=$com['r81ag'];$r34b=$com['r34b'];

$r81b=$com['r81b'];$r81ag=$com['r81ag'];

$r10ag=$com['r10ag'];$r10b=$com['r10b'];

$rg1ag=$com['rg1ag'];$rg1b=$com['rg1b'];




}
}

if (isset($_POST['Update']))
{

$r1b=$_POST['r1b'];$r1ag=$_POST['r1ag'];

$r12ag=$_POST['r12ag'];$r12b=$_POST['r12b'];

$r23ag=$_POST['r23ag'];$r23b=$_POST['r23b'];

$r34ag=$_POST['r34ag'];$r34b=$_POST['r34b'];

$r45ag=$_POST['r45ag'];$r45b=$_POST['r45b'];

$r56ag=$_POST['r56ag'];$r56b=$_POST['r56b'];

$r67ag=$_POST['r67ag'];$r67b=$_POST['r67b'];

$r78ag=$_POST['r78ag'];$r78b=$_POST['r78b'];

$r81ag=$_POST['r81ag'];$r34b=$_POST['r34b'];

$r81b=$_POST['r81b'];$r81ag=$_POST['r81ag'];

$r10ag=0;$r10b=0;

$rg1ag=$_POST['rg1ag'];$rg1b=$_POST['rg1b'];

 
 mysql_query("INSERT INTO com (date,r1ag,r1b,r12ag,r12b,r23ag,r23b,r34ag,r34b,r45ag,r45b,r56ag,r56b,r67ag,r67b,r78ag,r78b,r81ag,r81b,r10ag,r10b,rg1ag,rg1b)

 VALUES ('$date','$r1ag','$r1b','$r12ag','$r12b','$r23ag','$r23b','$r34ag','$r34b','$r45ag','$r45b','$r56ag','$r56b','$r67ag','$r67b','$r78ag','$r78b','$r81ag','$r81b','$r10ag','$r10b','$rg1ag','$rg1b') ") or die(mysql_error());


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
  <table width="701" height="288" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <th width="697" scope="row"><form id="form1" name="form1" method="post" action="">
        <table width="691" height="180" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <th height="46" colspan="6" scope="row"> COMMISSION RATIO (Agent Only)</th>
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
            <th width="153" scope="row"><span class="style3">Less &pound;100</span> -B</th>
            <th colspan="2" scope="row"><input name="r1b" type="text" id="r1b"  value="<?php if (isset($r1b)){ echo "$r1b";} ?>"/></th>
            <th width="50" scope="row">&nbsp;</th>
            <th width="166" class="style3" scope="row">&pound;101 - &pound;200-B</th>
            <th width="156" scope="row"><input name="r12b" type="text" id="r12b" value="<?php if (isset($r12b)){ echo "$r12b";} ?>" /></th>
          </tr>
          <tr>
            <th scope="row"><span class="style3">Less &pound;100</span> -<span class="style3">AGENT</span></th>
            <th width="4" scope="row">&nbsp;</th>
            <th width="162" scope="row"><input name="r1ag" type="text" id="r1ag"  value="<?php if (isset($r1ag)){ echo "$r1ag";} ?>"/></th>
            <th scope="row">&nbsp;</th>
            <th scope="row"><span class="style3">&pound;101 - &pound;200-AGENT</span></th>
            <th scope="row"><input name="r12ag" type="text" id="r12ag" value="<?php if (isset($r12ag)){ echo "$r12ag";} ?>" /></th>
          </tr>
          <tr>
            <th colspan="6" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th colspan="6" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th class="style3" scope="row">&pound;201 - &pound;300-B</th>
            <th colspan="2" scope="row"><input name="r23b" type="text" id="r23b" value="<?php if (isset($r23b)){ echo "$r23b";} ?>" /></th>
            <th scope="row">&nbsp;</th>
            <th class="style3" scope="row">&pound;301 - &pound;400-B</th>
            <th scope="row"><input name="r34b" type="text" id="r34b" value="<?php if (isset($r34b)){ echo "$r34b";} ?>" /></th>
          </tr>
          <tr>
            <th scope="row"><span class="style3">&pound;201 - &pound;300-AGENT</span></th>
            <th scope="row">&nbsp;</th>
            <th scope="row"><input name="r23ag" type="text" id="r23ag" value="<?php if (isset($r23ag)){ echo "$r23ag";} ?>" /></th>
            <th scope="row">&nbsp;</th>
            <th scope="row"><span class="style3">&pound;301 - &pound;400-AGENT</span></th>
            <th scope="row"><input name="r34ag" type="text" id="r34ag" value="<?php if (isset($r34ag)){ echo "$r34ag";} ?>" /></th>
          </tr>
          <tr>
            <th colspan="6" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th colspan="6" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th class="style3" scope="row">&pound;401 - &pound;500-B</th>
            <th colspan="2" scope="row"><input name="r45b" type="text" id="r45b"value="<?php if (isset($r45b)){ echo "$r45b";} ?>"  /></th>
            <th scope="row">&nbsp;</th>
            <th class="style3" scope="row">&pound;501 - &pound;600-B</th>
            <th scope="row"><input name="r56b" type="text" id="r56b" value="<?php if (isset($r56b)){ echo "$r56b";} ?>" /></th>
          </tr>
          <tr>
            <th scope="row"><span class="style3">&pound;401 - &pound;500-AGENT</span></th>
            <th scope="row">&nbsp;</th>
            <th scope="row"><input name="r45ag" type="text" id="r45ag"value="<?php if (isset($r45ag)){ echo "$r45ag";} ?>"  /></th>
            <th scope="row">&nbsp;</th>
            <th scope="row"><span class="style3">&pound;501 - &pound;600-AGENT</span></th>
            <th scope="row"><input name="r56ag" type="text" id="r56ag" value="<?php if (isset($r56ag)){ echo "$r56ag";} ?>" /></th>
          </tr>
          <tr>
            <th colspan="6" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th colspan="6" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th class="style3" scope="row">&pound;601 - &pound;700-B</th>
            <th colspan="2" scope="row"><input name="r67b" type="text" id="r67b" value="<?php if (isset($r67b)){ echo "$r67b";} ?>" /></th>
            <th scope="row">&nbsp;</th>
            <th class="style3" scope="row">&pound;701 - &pound;800-B</th>
            <th scope="row"><input name="r78b" type="text" id="r78b" value="<?php if (isset($r78b)){ echo "$r78b";} ?>"/></th>
          </tr>
          <tr>
            <th scope="row"><span class="style3">&pound;601 - &pound;700-AGENT</span></th>
            <th scope="row">&nbsp;</th>
            <th scope="row"><input name="r67ag" type="text" id="r67ag" value="<?php if (isset($r67ag)){ echo "$r67ag";} ?>" /></th>
            <th scope="row">&nbsp;</th>
            <th scope="row"><span class="style3">&pound;701 - &pound;800-AGENT</span></th>
            <th scope="row"><input name="r78ag" type="text" id="r78ag" value="<?php if (isset($r78ag)){ echo "$r78ag";} ?>"/></th>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <th colspan="5" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <th colspan="5" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th class="style3" scope="row">&pound;801 - &pound;1000-B</th>
            <th colspan="2" scope="row"><input name="r81b" type="text" id="r81b" value="<?php if (isset($r81b)){ echo "$r81b";} ?>"/></th>
            <th scope="row">&nbsp;</th>
            <th class="style3" scope="row">Greater &pound;1000-B</th>
            <th scope="row"><input name="rg1b" type="text" id="rg1b" value="<?php if (isset($rg1b)){ echo "$rg1b";} ?>" /></th>
          </tr>
          <tr>
            <th scope="row"><span class="style3">&pound;801 - &pound;1000-AGENT</span></th>
            <th scope="row">&nbsp;</th>
            <th scope="row"><input name="r81ag" type="text" id="r81ag" value="<?php if (isset($r81ag)){ echo "$r81ag";} ?>"/></th>
            <th scope="row">&nbsp;</th>
            <th scope="row"><span class="style3">Greater &pound;1000</span>-<span class="style3">AGENT</span></th>
            <th scope="row"><input name="rg1ag" type="text" id="rg1ag" value="<?php if (isset($rg1ag)){ echo "$rg1ag";} ?>" /></th>
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
