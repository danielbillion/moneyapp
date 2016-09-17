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

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Kunzle Ltd</title>
	<link href="style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
    <link rel="stylesheet" href="CSS3 Menu_files/css3menu1/style.css" type="text/css" />
<style type="text/css">
.boldhed {
	font-size: 12px;
	color: #000;
	font-family: Arial;
}
.nwfont {
	color: #333;
}
.nwfont {
	font-size: 15px;
	font-weight: bold;
	color: #00F;
}
.txt1 table tr td div table tr td p {
	color: #999;
}
.txt1 table tr td table tr td p {
	color: #F00;
	font-weight: bold;
}
.txt1 table tr td div table tr td p {
	color: #666;
}
.txt1 table tr td div table tr td .circle p {
	font-weight: normal;
}
.txt1 table tr td table tr td p {
	color: #333;
	font-weight: normal;
}
.txt1 table tr td table tr td p a {
	font-weight: normal;
}
hd1 {
	font-weight: bold;
}
.txt1 table tr td table tr td div {
	color: #666;
}
.kun {
	color: #000;
}
.kun {
	font-size: 12px;
}
</style>
<script src="../../Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>
<body>
<table width="100%" style="height:100%;">
<!--top-->
<tr>
	<td style="width:100%;"><table  style="width:100%; height:100%">
		<tr>
	    <td width="392" style="width:50%; background:url(images/rez_1.jpg) top right; height:100%;"><table style="width:100%; margin-top:175px;">
				<tr><td style="background:url(images/1rez_1.jpg) top right repeat-x; width:100%; height:53px;"></td></tr>
			</table></td>
			<td width="807" style="width:755px; background:url(images/rez_1.jpg) top left; height:100%;"><table width="902" style="width:755px;">
				<tr>
					<td width="894"><table style="margin:58px 0 0 0; width:755px;">
						<tr><td><img alt="" src="images/t_top.jpg"></td></tr>
						<tr>
						  <td style="height:677px; width:755px;"><table style="height:100%;">
								<tr>
									<td width="-1" style="background:url(images/aa1.jpg) top left repeat-y; width:1px; height:100%"><img alt="" src="images/aaa1.jpg"></td>
									<td width="851" style="width:753px; height:100%; background:#FFFFFF;"><table width="909">
										<!--flash-->
										<tr>
										  <td height="46">&nbsp;</td>
										  <td><p>&nbsp;</p>
									      <p align="right"><img src="Kunzle's logo3.png" width="85" height="84"></p></td>
										  <td colspan="2" rowspan="2">
										    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="765" height="168" align="left" id="FlashID">
										      <param name="movie" value="header_v8.swf">
										      <param name="quality" value="high">
										      <param name="wmode" value="opaque">
										      <param name="swfversion" value="8.0.35.0">
										      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don't want users to see the prompt. -->
										      <param name="expressinstall" value="../../Scripts/expressInstall.swf">
										      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
										      <!--[if !IE]>-->
										      <object data="header_v8.swf" type="application/x-shockwave-flash" width="765" height="168" align="left">
										        <!--<![endif]-->
										        <param name="quality" value="high">
										        <param name="wmode" value="opaque">
										        <param name="swfversion" value="8.0.35.0">
										        <param name="expressinstall" value="../../Scripts/expressInstall.swf">
										        <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
										        <div>
										          <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
										          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
									            </div>
										        <!--[if !IE]>-->
									          </object>
										      <!--<![endif]-->
									        </object>
									      </td>
									  </tr>
										<tr><td width="25" height="80"><div align="left"></div>
									      <div align="right">
									        <p>&nbsp;</p>
									        <p>&nbsp;</p>
									      </div></td>
										  <td width="104">&nbsp;</td>
									  </tr>
										<tr>
										  <td colspan="2"><div align="right"></div></td>
										  <td width="252" height="14" style="font-size: 14px; font-weight: bold; font-family: 'Times New Roman', Times, serif; color: #000; text-align: right;">&nbsp;</td>
										  <td width="508"><table width="307" border="0" align="right" cellpadding="0" cellspacing="0">
										    <tr>
										      <td width="72" rowspan="2"><img src="brit_fla2.png" width="61" height="31"></td>
										      <td width="20">&nbsp;</td>
										      <td width="45" class="boldhed">&nbsp;</td>
										      <td><span></td>
										      <td>&nbsp;</td>
										      <td>&nbsp;</td>
										      <td width="121" rowspan="2"><div align="left"><img src="niger_fla2.png" width="59" height="33"></div></td>
									        </tr>
										    <tr>
										      <td width="20"><span class="boldhed"><span style="font-size: 18px; font-weight: bold;">£1</span></span></td>
										      <td width="45" class="boldhed"><div align="center">=</div></td>
										      <td width="14"><span style="font-weight: bold; font-size: 18px; color: black;">&#8358;</span></td>
										      <td width="25"><?php session_start();		
 include "conn.php"; 

		$result = mysql_query('SELECT id,rate
                         FROM todays_rate
                     ORDER BY id DESC 
                        LIMIT 1') or die('Invalid query: ' . mysql_error());

//print values to screen
while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  
 echo"<span style='font-weight: bold; font-size: 18px;color:black;'>"; echo $row['rate'];} echo ".00</span> ";
         

  ?></td>
										      <td width="10">&nbsp;</td>
									        </tr>
									      </table></td>
									  </tr>
										<!--content-->
										<tr>
											<td colspan="4" style="width:753px;"><table width="827" border="0" align="center" cellpadding="0" cellspacing="0">
											  <tr>
											    <td height="102">&nbsp;</td>
										      </tr>
											  <tr>
											    <td width="528"><div align="right">
											      <table width="827" border="0" align="center" cellpadding="0" cellspacing="0">
											        <tr>
											          <td colspan="4"><div align="right">
											            <table width="623" border="0" align="center" cellpadding="0" cellspacing="0">
											              <tr>
											                <td width="623" height="179"><p align="left">&nbsp;</p>
											                  </p>
											                  <p align="center"><strong><span class="h2" style="font-family: 'Arial Black', Gadget, sans-serif; color: #09F;"> FAQ </span> </p>
                                                              <p align="left"><br>
                                                                <br>
                                                                <br>
                                                                <strong>How and where can I transfer fund</strong>?</p>
                                                              <p>There are several ways, in which you can transfer  your funds: <br>
                                                                1. Pay into our Bank Account. Please call us on 02078872570    for Account details<br>
                                                                2. Visit your local branch of KUNZLE to process your transfer<br>
                                                              3. Visit our Approved Agent to process your transfer</p>
                                                              <p><strong>Where will my  recipient collect the transferred funds? </strong><br>
                                                                <br>
                                                                KUNZLE works with Independent Banks and Companies, which provide external  support to make payments to the recipients of transactions. <br>
                                                                These are licensed organisations that carry out financial services. <br>
  <br>
  <br>
  <strong>How can I  collect the transferred funds from these organisations?</strong><br>
  <br>
                                                                The recipient must complete a receipt form, detailing his/her personal details  and the details of the transaction, and provide a valid proof of  identification. <br>
  <br>
  <br>
  <strong>How long will it  take for my money to be paid out?</strong><br>
  <br>
                                                                We aim to make payments on the same day. <br>
  <br>
  <br>
  <strong>What is the  highest amount that I can transfer?</strong><br>
  <br>
                                                                Customers are allowed to transfer not more than 1,000 Euro online, and any  amount at our branch offices. Customers must provide identification documents,  source of funds and proof of address to comply with anti-money laundering and  additional electronic identity check will be carried out.</p>
                                                              <p><strong>&nbsp;</strong></p>
                                                              <p><strong>What are the acceptable forms of ID?</strong></p>
                                                              <p>The following will be accepted as proof of ID and be made  available in &quot;ORIGINAL&quot; when requested:<br>
                                                                - Valid passport<br>
                                                                - EEA national ID card<br>
                                                                - Family member EEA national ID card, for non-EEA<br>
                                                                - Full UK Driving license<br>
                                                                - Home Office Application card, asylum applicants<br>
                                                                - Home Office issued Biometri Residence Permit, BRP<br>
                                                                - Home Office issued Travelling Document<br>
                                                                - A Firearms Certificate</p>
                                                              <p><strong>What are the acceptable proof of address?</strong></p>
                                                              <p>The following will be accepted as proof of address. It  should show the customer's details and be made available in  &quot;ORIGINAL&quot;, and be dated within the last three months from when it is  requested:<br>
                                                                - Bank, Building Society, or Credit card statement<br>
                                                                - HMRC Tax papers such as a P64/P60 document or other  correspondence<br>
                                                                - Utility bill statement(s)<br>
                                                                - Tenancy Agreement papers<br>
                                                                - Council Tax bill statements<br>
                                                                - Mortgage statements<br>
                                                                - Pay slips sent to required address been  verified</p>
-  Benefit and pension staments
<p>&nbsp;</p>
<p>&nbsp;</p>
											                  <p>&nbsp;</p></td>
										                  </tr>
										                </table>
											          </div></td>
										            </tr>
											        <tr>
											          <td width="253">&nbsp;</td>
											          <td colspan="2">&nbsp;</td>
											          <td width="528"><table width="200" border="0" align="right" cellpadding="0" cellspacing="0">
											            <tr>
											              <td width="62"><a href="https://facebook.com/kunzleltd"><img src="facebook2.png" width="46" height="45" border="0" /></a></td>
											              <td width="62"><a href="https://twitter.com/kunzleltd"><img src="twitter2.png" width="51" height="48" border="0" /></a></td>
											              <td width="76"><a href="#"><img src="youtube2.png" width="50" height="46" border="0" /></a></td>
										                </tr>
											            </table></td>
										            </tr>
										          </table>
											    </div></td>
											  </tr>
											</table>
										  <p>&nbsp;</p></td>
										</tr>
          </table></td>
									<td width="10" style="background:url(images/aa1.jpg) top left repeat-y; width:1px; height:100%"><img alt="" src="images/aaa1.jpg"></td>
								</tr>
							</table></td>
						</tr>
						<tr><td><img alt="" src="images/t_bot.jpg"></td></tr>
						<!--footer-->
                       
					  <tr><td>  <?php
						
						include"footer.php";
						 ?>
                     
				      </a> </td></tr> 							
				  </table></td>
			  </tr>
		  </table></td>
	    <td width="103" style="width:50%; background:url(images/rez_2.jpg) top left; height:100%;"><table style="width:100%;  margin-top:175px;">
				<tr><td style="background:url(images/1rez_1.jpg) top right repeat-x; width:100%; height:53px;"></td></tr>
			</table></td>
		</tr>
	</table></td>
</tr>
</table>

</body>
</html>
<!-- HUNTER by KOTSOFT "http://kotsoft.jino-net.ru/forum/" -->