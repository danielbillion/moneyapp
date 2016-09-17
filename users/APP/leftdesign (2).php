<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
.style1 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style></head>

<body>
<table width="410" height="518" border="0">
  <tr>
    <td><table width="382" height="449" border="0">
      <tr>
        <td width="403"><p><strong>Calculator</strong></p>
          <hr />
          <form id="form1" name="form1" method="post" action="file:///C|/wamp/www/lucky/leftdesign.php">
            <p>&nbsp;</p>
            <p>
              <label></label>
            </p>
            <p align="left" class="style1">            Money Destination </p>
            <p align="left">&nbsp; </p>
            <p align="left">
              <label>
              <input name="md" type="radio" value="nu" />
              </label>
            Nigeria To United Kingdom</p>
            <p align="left">
              <label>
              <input name="md" type="radio" value="un" />
              </label>
            United Kingdom To Nigeria            </p>
            <p align="left">Amount Sending N / &pound;</p>
            <p align="left">
              <label>
              <input name="mon" type="text" id="mon" />
              </label>
</p>
            <p align="left">
          
              <input name="calculate" type="submit" id="calculate" value="calculate" />
              </label>
              <label>
              <input type="submit" name="Submit" value="Reset" />
              </label>
            </p>
			
 <div align="left"><?php
   if( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
    $mon = $_POST['mon'];
	$er=250;
	
  if (isset($_POST['calculate'])) {
$md = $_POST['md'];
}

//if (!isset($_POST['calculate'])) {
//echo "please enter a choice of transfer";}
		if($md == "un"){
			
			if ($mon < 100){
			$tf=5;
			$tr=($mon * $er ) + $tf;

			echo nl2br("Summary");echo nl2br("<hr>");
			echo " Transfer Amount (£):"; echo ($mon * $er);echo "<p></p>";
			echo "Recipient Amount(N):";echo $tr;echo "<p></p>";
			echo "Exchange Rate :  "; echo $er;echo "<p></p>";
			echo "Transfer fee:  ";echo $tf; }


			if ($mon> 100 && $mon < 200 ){
			$tf=15;
			$tr=($mon * $er ) + $tf;

			echo nl2br("Summary");echo nl2br("<hr>");
			echo " Transfer Amount (£):"; echo ($mon * $er);echo "<p></p>";
			echo "Recipient Amount(N):";echo $tr;echo "<p></p>";
			echo "Exchange Rate :  "; echo $er;echo "<p></p>";
		}			echo "Transfer fee:  ";echo $tf; }






		if($md=="nu"){

					if ($mon< 100){
					$tf=5;
					
					$tr=($mon * $er ) + $tf;
					
					echo nl2br("Summary");echo nl2br("<hr>");
					echo " Transfer Amount (N):"; echo ($mon * $er);echo "<p></p>";
					echo "Recipient Amount(£):";echo $tr;echo "<p></p>";
					echo "Exchange Rate :  "; echo $er;	echo "<p></p>";				
					echo "Transfer fee:  ";echo $tf; }
					
					
					if ($mon> 100 && $mon < 200 ){
					$tf=15;
					$tr=($mon * $er ) + $tf;
					
					echo nl2br("Summary");echo nl2br("<hr>");
					echo " Transfer Amount (N):"; echo ($mon * $er);echo "<p></p>";
					echo "Recipient Amount(£):";echo $tr;echo "<p></p>";
					echo "Exchange Rate :  "; echo $er;echo "<p></p>";
					echo "Transfer fee:  ";echo $tf; }
			}


}




?>
			
			
          </div></form>
          
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
