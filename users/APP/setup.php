
<?php include "admin_p.php"; ?>



<?php 	


 
 include "conn.php"; 
 
 	$checkset = mysql_query('SELECT * FROM busy ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
  // $check = mysql_query("SELECT * FROM busy") or die('Query failed: ' . mysql_error());
 $check = mysql_query("SELECT * FROM busy ")or die(mysql_error());

$table_array = mysql_fetch_array($check);



 
  //echo $email;
while($bcheck=mysql_fetch_array($checkset)){
	
$name1 = $bcheck['name1'];
$name2 = ($bcheck['name2']);
$slogan1 = ($bcheck['slogan1']);
$slogan2 = ($bcheck['slogan2']);
$email = ($bcheck['email']);
$email2 = ($bcheck['email2']);
$tel = ($bcheck['tel1']);
$tel2 = ($bcheck['tel2']);
$tel3 = ($bcheck['tel3']);
$web1 = ($bcheck['web1']);
$web2 = ($bcheck['web2']);
$fax = ($bcheck['fax']);
$address = ($bcheck['address']);
$postcode = ($bcheck['postcode']);
$country = ($bcheck['country']);
$code = ($bcheck['code']);
$ecredit2 = ($bcheck['ecredit']);
$ecal2 = ($bcheck['ecal']);
$br2 = ($bcheck['br']);
$brc2 = ($bcheck['brc']);
$type = ($bcheck['size']);

$tln2 = $bcheck['dtl'];
$st2 = $bcheck['dtls'];
$mv2 = $bcheck['mtl'];
$max2 = $bcheck['mtls'];
$vdtl2= $bcheck['vdtl'];
$actpaypal= $bcheck['paypal_status'];
$paypal_email= $bcheck['paypal_email'];
$paypal_limit= $bcheck['paypal_ipn'];
$actsms= $bcheck['sms_status'];
$sms_email= $bcheck['sms_email'];
$sms_hash= $bcheck['sms_hash'];

if ($ecal2=="1"){$ecalv="Enabled";};if ($ecal2=="0"){$ecalv="Disabled";}

if($ecredit2=="0"){$ecreditv="Disabled";};if ($ecredit2=="1"){$ecreditv="Enabled";}
if($br2=="0"){$brv="Disabled";};if ($br2=="1"){$brv="Enabled";}
if($brc2=="0"){$brcv="Disabled";};if ($brc2=="1"){$brcv="Enabled";}


//
 }
if(isset($_POST['submit'])){

$type2 = mysql_real_escape_string($_POST['type']);
$br = mysql_real_escape_string($_POST['br']);
$brc = mysql_real_escape_string($_POST['brc']);
$name1 = mysql_real_escape_string($_POST['name1']);
$name2 = mysql_real_escape_string($_POST['name2']);
$slogan1 = mysql_real_escape_string($_POST['slogan1']);
$slogan2 = mysql_real_escape_string($_POST['slogan2']);
$email = mysql_real_escape_string($_POST['email']);
$email2 = mysql_real_escape_string($_POST['email2']);
$tel = mysql_real_escape_string($_POST['tel']);
$tel2 = mysql_real_escape_string($_POST['tel2']);
$tel3 = mysql_real_escape_string($_POST['tel3']);
$web1 = mysql_real_escape_string($_POST['web1']);
$web2 = mysql_real_escape_string($_POST['web2']);
$fax = mysql_real_escape_string($_POST['fax']);
$address = mysql_real_escape_string($_POST['address']);
$postcode = mysql_real_escape_string($_POST['postcode']);
$country = mysql_real_escape_string($_POST['country']);
$code = mysql_real_escape_string($_POST['code']);
$ecredit = mysql_real_escape_string($_POST['ecredit']);
$ecal = mysql_real_escape_string($_POST['ecal']);

$mv = mysql_real_escape_string($_POST['mv']);
$max = mysql_real_escape_string($_POST['max']);
$tln = mysql_real_escape_string($_POST['tln']);
$st = mysql_real_escape_string($_POST['st']);
$vdtl = mysql_real_escape_string($_POST['vdtl']);
$actsms = mysql_real_escape_string($_POST['actsms']);
$actpaypal = mysql_real_escape_string($_POST['actpaypal']);
$sms_email = mysql_real_escape_string($_POST['sms_email']);
$paypal_email = mysql_real_escape_string($_POST['paypal_email']);
$paypal_limit = mysql_real_escape_string($_POST['paypal_limit']);
$sms_hash = mysql_real_escape_string($_POST['sms_hash']);

if ($ecredit=="Disable"){$ecredit="0";}
if ($ecredit=="Enable"){$ecredit="1";}

if ($ecal=="Disable"){$ecal="0";}
if ($ecal=="Enable"){$ecal="1";}

if ($br=="Disable"){$br="0";}
if ($br=="Enable"){$br="1";}

if ($brc=="Disable"){$brc="0";}
if ($brc=="Enable"){$brc="1";}

if ($max=="No"){$max="0";}
if ($max=="Yes"){$max="1";}

if ($st=="Not Set"){$st="0";}
if ($st=="Set"){$st="1";}

if ($vdtl=="Not Allow"){$vdtl="0";}
if ($vdtl=="Allow"){$vdtl="1";}


if ($ecredit==""){$ecredit=$ecredit2;}
if ($br==""){ $br=$br2;}
if ($brc==""){ $brc=$brc2;}
if ($ecal==""){$ecal=$ecal2;}
if ($type2==""){$type2=$type;}

if ($max==""){$max=$max2;}
if ($st==""){$st=$st2;}
if ($vdtl==""){$vdtl=$vdtl2;}
if ($tln==""){$tln=$tln2;}
if ($mv==""){$mv=$mv2;}



	{
	if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",
	$email)){echo "<script>alert(\"Invalid email entry\");</script>";}
	

	
	else{
	 include "time.php";
	 
	 mysql_query("INSERT INTO busy(date,name1,name2,slogan1,slogan2,code,email,email2,address,postcode,tel1,tel2,tel3,fax,web1,web2,country,ecredit,ecal,size,br,brc,dtl,dtls,mtl,mtls,vdtl,paypal_status,paypal_email,paypal_ipn,sms_status,sms_email,sms_hash)
		
											VALUES ('$dtime','$name1','$name2','$slogan1','$slogan2', '$code','$email','$email2','$address','$postcode','$tel','$tel2','$tel3','$fax','$web1','$web2','$country'	,'$ecredit','$ecal'	,'$type2'	,'$br','$brc','$tln','$st','$mv','$max','$vdtl','$actpaypal','$paypal_email','$paypal_limit','$actsms','$sms_email','$sms_hash'									 
															 )") or die(mysql_error());
	 
	echo "<script>alert(\"Thank you,your new email and Contact no has been updated.\");</script>";}
	mysql_close();
	
	}
	}
	
?>
 	
<script language="javascript" type="text/javascript">
    function tog1(val)
    {
	
    var tln = document.getElementById('tln');
    var mv = document.getElementById('mv');
	var id = document.getElementById('id');
	var vdtl = document.getElementById('vdtl');
	var id2 = document.getElementById('id2');
	 
    if(val=='Not Set')
    {
    tln.style.display = "none";
	id.style.display = "none";
	id2.style.display = "none";
	  vdtl.style.display = "none";
    }
   
    else if(val=='Set')
    {
    tln.style.display = "block";
	 id.style.display = "block";
	  vdtl.style.display = "block";
	   id2.style.display = "block";
	  
    }
	
	else if(val=='Yes')
    {
    mv.style.display = "block";
    }
	
	else if(val=='No')
    {
    mv.style.display = "none";
    }
	
	
	else
    {
    tln.style.display = "none";
    mv.style.display = "none";
	id.style.display = "none";
	vdtl.style.display = "none";
	id2.style.display = "none";
	
	
	
	
    }
    }
    </script>

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

.style18 {color: #3333FF}
.style23 {font-size: 12px; color: #330000; }
.style24 {color: #330000}
.style20 {	font-size: 10px;
	font-style: italic;
	color: #FF0000;
	font-weight: bold;
}

:-moz-placeholder {
  color: #c9c9c9 !important;
  font-size: 13px;
}

::-webkit-input-placeholder {
  color: #ccc;
  font-size: 13px;
}

input {
  font-family: 'Lucida Grande', Tahoma, Verdana, sans-serif;
  font-size: 14px;
}

input[type=text],input[type=textarea], input[type=password], select {
  margin: 5px;
  padding: 0 10px;
  width: 300px;
  height: 34px;
  color: #404040;
  background: white;
  border: 1px solid;
  border-color: #c4c4c4 #d1d1d1 #d4d4d4;
  border-radius: 2px;
  outline: 5px solid #eff4f7;
  -moz-outline-radius: 3px;
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
  
}
input[type=textarea]{
	width:450px
	}
input[type=text]:focus,input[type=textarea]:focus, input[type=password]:focus, select:focus {
  border-color: #7dc9e2;
  outline-color: #dceefc;
  outline-offset: 0;
}

input[type=submit] {
  padding: 0 18px;
  height: 29px;
  font-size: 12px;
  font-weight: bold;
  color: #527881;
  text-shadow: 0 1px #e3f1f1;
  background: #cde5ef;
  border: 1px solid;
  border-color: #b4ccce #b3c0c8 #9eb9c2;
  border-radius: 16px;
  outline: 0;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  background-image: -webkit-linear-gradient(top, #edf5f8, #cde5ef);
  background-image: -moz-linear-gradient(top, #edf5f8, #cde5ef);
  background-image: -o-linear-gradient(top, #edf5f8, #cde5ef);
  background-image: linear-gradient(to bottom, #edf5f8, #cde5ef);
  -webkit-box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);
}
input[type=submit]:active {
  background: #cde5ef;
  border-color: #9eb9c2 #b3c0c8 #b4ccce;
  -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.2);
}

.lt-ie9 input[type=text], .lt-ie9 input[type=password] {
  line-height: 34px;
}

-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body onLoad="tog1(this.value);tog2(this.value)">
<table width="889" height="442" border="2" align="center" cellpadding="0" cellspacing="0" bordercolor="#000099" bgcolor="#0066CC">
  <tr>
    <th width="883" height="395" scope="row"><form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table width="882" height="680" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr bgcolor="#FFFFFF">
          <th height="50" colspan="6" scope="row"><span class="style18">BUSINESS SETUP</span></th>
        </tr>
        <tr>
          <th width="19" scope="row">&nbsp;</th>
          <th width="138" scope="row"><div align="left"><span class="style23"> Name 1</span></div></th>
          <th width="324" scope="row"><label>
		
            <div align="left">
              <input name="name1" type="text"  value="<?php if (isset($name1)) { echo strtoupper($name1);} ?>" size="30" />
            </div>
          </label></th>
          <th width="25" scope="row">&nbsp;</th>
          <th width="68" scope="row"><div align="left"><span class="style23">Name 2</span></div></th>
          <th width="257" scope="row"><div align="left">
            <input name="name2" type="text" value="<?php if (isset($name2)) { echo strtoupper($name2);} ?>" size="30" />
          </div></th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th colspan="4" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left"><span class="style23">Slogan 1</span></div></th>
          <th scope="row"><div align="left">
            <input name="slogan1" type="text"  value="<?php if (isset($slogan1)) { echo strtoupper($slogan1);} ?>" size="30" />
          </div></th>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left"><span class="style23">Slogan 2</span></div></th>
          <th scope="row"><div align="left">
            <input name="slogan2" type="text"  value="<?php if (isset($slogan2)) { echo strtoupper($slogan2);} ?>" size="30" />
          </div></th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th colspan="4" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left"><span class="style23">Email 1</span></div></th>
          <th scope="row"><div align="left">
            <input name="email" type="text" id="email" value="<?php if (isset($email)) { echo ($email);} ?>" size="30" />
            </div></th>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left"><span class="style23">Email 2</span></div></th>
          <th scope="row"><div align="left">
            <input name="email2" type="text" id="email2" value="<?php if (isset($email2)) { echo ($email2);} ?>" size="30" />
            </div></th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left"><span class="style23">Website1</span></div></th>
          <th scope="row"><div align="left">
            <input name="web1" type="text" id="web1"  value="<?php if (isset($web1)) { echo strtoupper($web1);} ?>" size="30" />
          </div></th>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left"><span class="style23">Website 2</span></div></th>
          <th scope="row"><div align="left">
            <input name="web2" type="text" id="web2"  value="<?php if (isset($web2)) { echo strtoupper($web2);} ?>" />
          </div></th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left"><span class="style23">Tel 1/Contact</span></div></th>
          <th scope="row"><div align="left">
            <input name="tel" type="text" id="tel"  value="<?php if (isset($tel)) { echo strtoupper($tel);} ?>" size="30" />
          </div></th>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left"><span class="style23">Tel 2/Contact</span></div></th>
          <th scope="row"><div align="left">
            <input name="tel2" type="text" id="tel2"  value="<?php if (isset($tel2)) { echo strtoupper($tel2);} ?>" size="30" />
          </div></th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left"><span class="style23">Tel 3/Contact</span></div></th>
          <th scope="row"><div align="left">
            <input name="tel3" type="text" id="tel3"  value="<?php if (isset($tel3)) { echo strtoupper($tel3);} ?>" size="30" />
          </div></th>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left"><span class="style23">Fax</span></div></th>
          <th scope="row"><div align="left">
            <input name="fax" type="text" value="<?php if (isset($mnumber)) { echo strtoupper($fax);} ?>" size="30"/>
          </div></th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th colspan="4" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left"><span class="style23">Address</span></div></th>
          <th colspan="3" scope="row"><label>
            <div align="left">
              <input type="textarea" name="address"  size="60" value="<?php if (isset($address)) { echo strtoupper($address);} ?>" />
              </div>
            </label></th>
          <th scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row"><span class="style24"></span></th>
          <th colspan="4" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left"><span class="style23">Country</span></div></th>
          <th scope="row"><div align="left">
            <input type="text" name="country"  value="<?php if (isset($country)) { echo strtoupper($country);} ?>" />
          </div></th>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left"><span class="style23">Postcode/Zip code </span></div></th>
          <th scope="row"><div align="left">
            <input type="text" name="postcode" value="<?php if (isset($postcode)) { echo strtoupper($postcode);} ?>" />
          </div></th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th rowspan="2" scope="row">&nbsp;</th>
          <th rowspan="2" class="style23" scope="row"><div align="left">Enable Credit</div></th>
          <th scope="row"><div align="left" class="style20">
            <?php if(isset($ecreditv)){ echo $ecreditv;}?>
          </div></th>
          <th rowspan="2" scope="row">&nbsp;</th>
          <th rowspan="2" scope="row"><div align="left" class="style23">Enable Calculator</div></th>
          <th scope="row"><div align="left" class="style20">
            <?php if(isset($ecalv)){echo $ecalv; }?>
          </div></th>
        </tr>
        <tr>
          <th scope="row"><div align="left"><span class="style20">
            <select name="ecredit" id="ecredit">
              <option>Enable</option>
              <option>Disable</option>
              <option selected="selected"> </option>
            </select>
          </span></div></th>
          <th scope="row"><div align="left"><span class="style20">
            <select name="ecal" id="ecal">
              <option>Enable</option>
              <option>Disable</option>
              <option selected="selected"></option>
            </select>
          </span></div></th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th colspan="4" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left"><span class="style20">
            <?php if(isset($brv)){echo $brv; }?>
          </span></div></th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left"><span class="style20">
            <?php if(isset($brcv)){echo $brcv; }?>
          </span></div></th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th class="style23" scope="row"><div align="left">Business name on receipt- agent
                
          </span></div></th>
          <th scope="row"><div align="left"><span class="style20">
            <select name="br" id="br">
              <option>Enable</option>
              <option>Disable</option>
              <option selected="selected"></option>
            </select>
          </span></div></th>
          <th scope="row">&nbsp;</th>
          <th class="style23" scope="row"><div align="left">Business name on receipt- customer</div></th>
          <th scope="row"><div align="left"><span class="style20">
            <select name="brc" id="brc">
              <option>Enable</option>
              <option>Disable</option>
              <option selected="selected"></option>
            </select>
          </span></div></th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th colspan="4" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left"></div></th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th height="22" scope="row">&nbsp;</th>
          <th scope="row"><div align="left"><span class="style20">
            <?php if(isset($type)){ echo $type;}?>
          </span></div></th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th height="22" scope="row">&nbsp;</th>
          <th scope="row"><div align="left" class="style23">Type</div>            </span></th>
          <th scope="row"><div align="left"><span class="style20">
            <select name="type" id="type">
              <option>Agent</option>
              <option>Customer</option>
              <option>Customer & Agent</option>
              <option selected="selected"> </option>
            </select>
          </span></div></th>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left"><span class="style23">Business key</span></div></th>
          <th scope="row"><div align="left">
            <input type="text" name="code"  value="<?php if (isset($code)) { echo strtoupper($code);} ?>" />
          </div></th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left"><span class="style20">
            <?php if (isset($bs_dtl)){ if ($bs_dtls==1) {echo "Status= Set";} else {echo "Status = Not Set";}} ?>
          </span></div></th>
          <th scope="row"><div align="left"></div></th>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left"><span class="style20">
            <?php if (isset($bs_mtl)){ if ($bs_mtls==1) {echo "Status= Set";} else {echo "Status = Not Set";}} ?>
          </span></div></th>
          <th scope="row"><div align="left"></div></th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left" class="style23">Daily Transaction Limit</div></th>
          <th scope="row"><div align="left">
            <select name="st" id="st"  onChange="tog1(this.value)">
              <option>Set</option>
              <option>Not Set</option>
              
              <option selected="selected"> </option>
            </select>
            <input type="text" name="tln" value="<?php if (isset($bs_dtl)){ echo $bs_dtl;}  ?>" id="tln" />
          </div>
          </th>
          <th scope="row">&nbsp;</th>
          <th class="style23" scope="row"><div align="left">The Max</div></th>
          <th scope="row">
            <select name="max" id="max" onChange="tog1(this.value)">
              <option>Yes</option>
              <option>No</option>
              <option selected="selected"> </option>
            </select>
            <input type="text" name="mv"  id="mv" value="<?php if (isset($bs_mtl)){ echo $bs_mtl;}  ?>" />
          </th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left"><span class="style20">
            <label id="id2"> <?php if (isset($bs_vdtl)){ if ($bs_vdtl==1) { $val="Status= Allowed"; echo $val;} else {$val= "Status = Not Allowed";echo $val;}} ?></label>
          </span></div></th>
          <th scope="row"><div align="left"></div></th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th class="style23" scope="row"><div align="left"><label id="id">Activate ID Transaction Limit</label></div></th>
          <th scope="row"><div align="left">
            <select name="vdtl" id="vdtl">
              <option>Allow</option>
              <option>Not Allow</option>
              <option selected="selected"> </option>
            </select>
          </div></th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th colspan="4" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row"><span class="style20">
            <?php if(isset($actsms)){ echo $actsms;}?>
          </span></th>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th scope="row"><span class="style20">
            <?php if(isset($actpaypal)){ echo $actpaypal;}?>
          </span></th>
          <th scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row">Activate sms</th>
          <th scope="row"><span class="style20">
            <select name="actsms" id="type2">
              <option>ON</option>
              <option>OFF</option>
              <option selected="selected"> </option>
            </select>
          </span></th>
          <th scope="row">&nbsp;</th>
          <th scope="row">Activate Paypal</th>
          <th scope="row"><span class="style20">
            <select name="actpaypal" id="type3">
          <option>ON</option>
              <option>OFF</option>
              <option selected="selected"> </option>
            </select>
          </span></th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th colspan="4" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row">sms email</th>
          <th scope="row"><input type="text" name="sms_email"  id="sms_email" value="<?php if (isset($sms_email)){ echo $sms_email;}  ?>" /></th>
          <th scope="row">&nbsp;</th>
          <th scope="row">sms hash code</th>
          <th scope="row"><input type="text" name="sms_hash"  id="sms_hash" value="<?php if (isset($sms_hash)){ echo $sms_hash;}  ?>" /></th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row">&nbsp;</th>
          <th colspan="4" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row">Paypal email</th>
          <th scope="row"><input type="text" name="paypal_email"  id="paypal_email" value="<?php if (isset($paypal_email)){ echo $paypal_email;}  ?>" /></th>
          <th scope="row">&nbsp;</th>
          <th scope="row">Payal Limit</th>
          <th scope="row"><input type="text" name="paypal_limit"  id="mv7" value="<?php if (isset($paypal_limit)){ echo $paypal_limit;}  ?>" /></th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <th scope="row"><div align="left"></div></th>
          <th colspan="4" scope="row">&nbsp;</th>
        </tr>
        
        <tr>
          <th height="26" colspan="6" scope="row"><input type="hidden" name="hiddenField" name="MAX_FILE_SIZE" value="350000000" /></th>
        </tr>
        <tr>
          <th height="62" colspan="6" scope="row"><label>
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
