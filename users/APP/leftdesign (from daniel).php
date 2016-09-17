


<script type="text/javascript" src="jquery-1.2.1.pack.js"></script>
<script type="text/javascript">
	function lookup(inputString) {
		if(inputString.length == 0) {
			// Hide the suggestion box.
			$('#suggestions').hide();
		} else {
			$.post("calp.php", {queryString: ""+inputString+""}, function(data){
				if(data.length >0) {
					
					
				$('#suggestion').show();
					$('#autoSuggestionList').html(data);
					
						
				}
			});
		}
	} // lookup
	
	function fill(thisValue) {
		$('#inputString').val(thisValue);
		$('#inputString2').val(thisValue);
		setTimeout("$('#suggestion').hide();", 200);
	}
</script>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>







<meta name='' content=Daphkkoy money transfer' />
<meta name='Keywords' content='Daphkkoy money transfer' />
<meta name='Description' content='Daphkkoy international money transfer' />
<META NAME='Author' CONTENT='danielbillion@yahoo.com'>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<link rel='shortcut icon' href='fvr.jpg' type='image/jpeg' />
     
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Daphkkoy Money Transfer</title>
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
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #0066CC;
}
.style5 {color: #660000}
.style7 {color: #000033}
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
.style10 {font-family: Batang}
.style11 {	font-family: 'Levenim MT';
	color: #000066;
}
.style12 {font-size: 24px}
-->
</style></head>

<body>
<table width='231' height='495' border='0'>
<tr><td></td>  &nbsp;</tr>
  <tr>
    <td width='274' height='491'><table width='225' height='449' border='0'>
      <tr>
        <td width='219'><p class='style1'><span class='style5'>Todays Rate:</span> <span class='style7'>&pound;1=&#8358;<?php session_start();		
 include "conn.php";mysql_select_db('daphkkoy_com') or die(mysql_error()); 

		$result = mysql_query('SELECT id,rate
                         FROM todays_rate
                     ORDER BY id DESC 
                        LIMIT 1') or die('Invalid query: ' . mysql_error());

//print values to screen
while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  
  echo $row['rate'];} echo ".00</span></p>
          <p class='style1'>&nbsp;</p>
          <p align='center' class='style1'>Quick Calculator</p>
          <hr class='style1' />
          
		  
		  <form id='form1' name='form1' method='post' action='leftdesign.php'>
           
            
           
            <p align='left'>
              <label>
              <input name='md' type='radio' value='nu' checked='checked' />
              </label>
              <label> </label>
				United Kingdom To Nigeria</p>
            <p align='left'>
              <label>
              <input name='md' type='radio' value='un' />
              </label>
              <label> </label>
Nigeria To 
<label> </label>
<label> </label>
United Kingdom</p>
            <p align='center'>
              <label>
              Transfer Type 
              <select name='select'>
                <option>(Select)</option>
                <option>PickUp </option>
                <option>Bank Account</option>
              </select>
              </label>
            </p>
            <p align='center'>Amount Sending N / &pound;</p>
            <p align='center'>
              <label>
              <input  id='inputString' onkeyup='lookup(this.value);' onblur='fill();' />
              </label>
</p>
            <p align='center'>
             
              </label>
              <label></label>
            </p>
            <div align='left'>";

  ?>
          </div>
          
          <div class="suggestionsBox" id="suggestion" style="display: none;">
				
				<div class="suggestionList" id="autoSuggestionList"> 
          </form>   
          
              
                  
          
                 </td>
      </tr>
      <tr>
        <td><p align="center" class="style11 style12"><strong>Getting you the best exchange rates</strong></p>
          <p class="style10">We are experts in foreign exchange and international money transfers &ndash;   getting you the best rates of exchange is what we do. If you need to   make a transfer quickly, or you have payments to make over a longer   period of time, our currency market specialists are always on hand to   help.</p>
          <ul>
            <li class="style10">Unbeatable exchange rates.</li>
            <li class="style10">Low commission and low transfer fees.</li>
            <li class="style10">Transfers arranged in seconds by telephone or online.</li>
          </ul></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
