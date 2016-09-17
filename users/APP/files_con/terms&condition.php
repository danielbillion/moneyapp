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
	 font-family: Arial Black; color: #09F;
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
											                  <p align="center" class="h3"><span class="h2">TERMS AND CONDITIONS</span></p>
											                  <p align="left" class="h3">&nbsp;</p>
											               <span class="h2">   AGGREGATOR MONEY  TRANSFER SERVICE </span>
											                  <p>These terms and  conditions govern the money transfer services provided to you by KUNZLE LTD  145-157 St. JOHN STREET, CITY OF LONDON,      LONDON. EC1V 4PW.(referred to as the &quot;AGGREGATOR&quot;).<br>
                                                                Our head office address  is as above, with telephone number 02078872570   , fax number 02078872570    and  email: kunzlelimited@yahoo.co.uk.<br>
                                                                We are regulated by The  Financial Services Authority under The Payment Services Regulations 2009 for  the provision of payment services.<br>
                                                                For simplicity, we will  refer to ourselves and our branches and agents as &quot;the firm&quot; or  &quot;aggregator/we/our/us&quot;.<br>
                                                                You operate as the  originator of a money transmission service which individuals, companies and  other entities use to send and to receive money transfers. We operate a money  transmission service used by originators such as you. We aggregate money transfers  from originators and execute them in bulk using our network of branches and  agents. The main characteristics of the payment services which we may provide  to you are as follows:<br>
                                                                1a. transmitting funds  as an intermediary when you send us payment transfer instructions in your  capacity as originating payment service provider on behalf of your customers;  and <br>
                                                                1b. receiving funds as  an intermediary on your behalf in your capacity as originating payment service  provider on behalf of your customers.<br>
                                                                We are acting as an  intermediary in providing the services above. We are not a payment service  provider and YOU (not us), are responsible for ensuring compliance as regards  your customers, with the Payment Services Regulations 2009, in your capacity as  a payment services provider for your customers.<br>
                                                                Our duties are limited  to those specified in these Terms and Conditions. Our liability is limited to  the circumstances and to the extent contemplated in clause 5 of these Terms and  Conditions. Neither these Terms and Conditions nor any transaction carried out  under them shall confer contractual or other rights on, or be enforceable  against us by, any party other than you.<br>
                                                                You are responsible for  discharging all anti-money laundering, security validation and verification  responsibilities and shall ensure that all payment instructions which you pass  to us have been properly checked, verified and validated, and that all relevant  legal and regulatory obligations have been fulfilled, in this regard. You agree  to provide to us such information and evidence as we may require from time to  time for these purposes and such other documents as may be required in order to  fulfil relevant legal and regulatory obligations. You agree to notify us  promptly of any changes in the details you have supplied to us.<br>
                                                                Our website sets out a  list of prohibited purposes for money transfers (including, without limitation,  the purchase of drugs and weapons and, in certain countries, gambling  activities). You agree that you will not transact, transmit or receive payment  transfers for or in connection with any criminal or illegal purpose whatsoever  and will ensure that all proper checks have been conducted in this regard in  relation to all payment instructions which you pass to us. We may report any suspicious  activity relating to your transactions to the relevant authorities.<br>
                                                                Payments executed using  our services do not carry the benefit of any interest. Our service does not  have the benefit of any government-backed insurance, guarantee or compensation  scheme (for example, no compensation is available from The Financial Services  Compensation Scheme if  we are unable to  meet our liabilities) and the relationship of the Aggregator with you is not  that of a bank trustee or an agent.<br>
                                                                Money transfers executed  by us can be sent and picked up at most locations in Africa. You may call the  number listed above or check our website at <u>www.kunzleltd.com</u> for the address and business hours of our locations. Some locations are open 24  hours a day.<br>
                                                                All payments are  subject to availability, the payee showing documentary evidence of their  identity and providing all details about the money transfer required by us as  set out in these Terms and Conditions and including, without limitation, the  name of the payer, country of origin, name of the payee, the payment amount,  transaction control identification number and any other conditions or  requirements which we consider neccessary or applicable at the payee payment  location. In limited circumstances, the making of a money transfer may be  subject to local taxes and service charges, details of which are set out in our  charges brochure. They may in addition, be obtained by contacting us using the  contact details set out in clause 1 of these Terms and Conditions or by  checking our website. <br>
                                                                1.1. We are agreeing to  provide you with a money transfer service. We do not accept any responsibility  for any goods or services which may be paid for by a money transfer (or any  taxes, charges or duties payable thereon). Your customers should be cautioned  against sending money to any person they do not know. They also bear the risk  of their intended payee failing to pick up the payment after it has been  transfered to the correct destination.<br>
                                                                1.2. We may use  information about you and your individual representatives to discharge the  responsibilities referred to in clauses 1a, 1b, 4.5, and 4.8, to provide our  services and to manage our relationship with you. We may disclose this  information to payers, payees and intermediaries in the course of providing our  services or as required by Regulation EC 1781/2006, on information on the payer  accompanying transfer of funds; persons with whom we share information for  anti-money-laundering, security verification or validation purposes; regulatory  and prosecuting authorities; service providers acting on our behalf.<br>
                                                                This may involve  transfer of information to countries which do not have data protection laws as  strict as those in the UK. If you wish to access or correct the information  that we hold about you, please contact our Data Protection Officer at KUNZLE  LIMITED of 145-157 St. JOHN STREET, CITY OF LONDON, LONDON. EC1V 4PW <br>
                                                              Before giving us  information about any individual, you should make sure that they are aware of  the matters set out in this clause 1.2.</p>
                                                              <p><span class="h2">2. <u>COMMUNICATIONS</u></span><br>
                                                                2.1. We advise against  using email for sending us confidential information.<br>
                                                                2.2. Where we agree to  accept instructions in a particular format (including in electronic format), we  will not be able to act on the instructions unless they are legible and clear.<br>
                                                                2.3. We may decline to  act on any communication and are not obliged to check or consider the validity  of your communications unless we have previously agreed a system of validation  with you. Subject to any legal or regulatory requirements which may apply, we  are authorised to act upon any instruction, agreement without enquiring about  its purpose, or the circumstances in which it is given, or about the  disposition of any proceeds.<br>
                                                                2.4. You must follow  any security procedures we specify.<br>
                                                                2.5. We can communicate  with you by any form of electronic communication by which you have chosen to be  able to give us information.<br>
                                                                2.6. After we receive a  payment instruction from you (or, where you are acting for a payee, after the  execution of a payment transaction), we shall make available to you the  following information in accordance with the provisions of clause 2.7.<br>
                                                                2.6a. a reference  enabling you to identify each payment transaction and where appropriate,  information relating to the payee, the payer and any information transferred  with the payment transaction;<br>
                                                                2.6b. the amount of the  payment transaction in the currency used for the payment instruction and the  currency in which the funds are at the disposal of the payee;<br>
                                                                2.6c. the amount of the  charges and transfer fees payable for the payment transaction (with a breakdown  of such amounts where applicable);<br>
                                                                2.6d. where applicable,  the exchange rate used in the payment transaction by us and the amount of the  payment transaction both before and after that currency conversion; and<br>
                                                                2.6e. the date of  receipt by us of the payment instruction and the credit value in respect of the  payee.<br>
                                                              2.7. The information  specified in clause 2.6., shall unless otherwise agreed, be made available to  you once a month. You will examine the confirmations and communications which  we send to you within a reasonable time after receiving them and will promptly  advise us without undue delay of any apparent mistake or discrepancy. Delay in  modification may make correcting any error difficult.</p>
                                                              <p><span class="h2">3. <u>FEES, CHARGES AND  EXCHANGE RATES</u></span> <br>
                                                                3.1. You agree to pay  our fees and charges for each payment transaction and in the circumstances set  out in further detail in our charges brochure.<br>
                                                                3.2. Applicable  exchange rates for payment transactions, as well as the relevant date and base  exchange rate used for determining the applicable exchange rate, are set out in  our website, displayed prominently at our premises and those of our branches  and agents or may be obtained by contacting us using the contact details set  out in clause 1 of these Terms and Conditions. Payment transactions will be  executed, unless otherwise agreed, in the currency of the destination country  (but please note that in some countries payment is only available in U.S.  dollars or another alternate currency). Currency will be converted from  Sterling (GBP) at the time of transfer and the payee will receive the relevant  foreign currency amount. For transfers to certain countries, the currency may  be converted at the time the payee receives the transfer, in which case the  payment amount may be subject to exchange rate flunctuations between the time  of transfer and the time the payee collects the payment amount. Our exchange  rate may be less favourable than some publicly reported commercial exchange  rates used in transactions between banks and other financial institutions. Any  differences between our exchange rates offered to you and the exchange rates  received by us will be kept by us, in addition to our transfer fees and other  charges.<br>
                                                                3.3. We may change our  exchange rates at any time and without notice to you. Such changes to an  exchange rate will be applied immediately.<br>
                                                                3.4. Telephone  notification to the payee that the money transfer is available for pick-up is  offered in most countries for an additional fee.<br>
                                                                3.5. Messenger delivery  of a cheque or bank draft is available in some countries to selected  destinations for an additional fee.<br>
                                                              3.6. Supplemental  messages may be included with money transfers to most countries for an  additional fee.</p>
                                                              <p><span class="h2">4. <u>PAYMENT  TRANSACTIONS</u></span><br>
                                                                4.1. In order for a  payment instruction from you to be properly executed, you must provide us with  the information or unique identifier which is necessary for the proper  execution of the payment instruction. If this is incorrect, it could result in  the payment transaction being delayed or the monies transferred being lost. The  information could comprise the payee's bank sort code and account number or  where applicable, the payee's SWIFT number, BIC number and IBAN number.<u></u><br>
                                                                4.2. We will execute  payment instructions so that the amount to be transferred reaches the payee's  payment service provider no later than the end of the third business day (  after 1 January 2012, the next business day) after we received your  instruction. We must receive payment instructions before the cut-off time  specified in our charges brochure or obtained by contacting us using the  contact details set out in clause 1 of these Terms and Conditions or on our  website or we will deem the instruction to have been received on the next  business day. Instructions received on days which are not business days for us  will also be deemed to have been received on the next business day. For the  purpose of these Terms and Conditions, &quot;<strong>business day</strong>&quot;, means  any day on which we are open for business (other than a Saturday, Sunday or  Public holiday) as required for the execution of a payment transaction.<br>
                                                                4.3. Once we receive  your payment instruction, you cannot revoke it unless you inform us in writing  that you withdraw your consent no later than the business day before the agreed  day of execution of the instruction. Where we receive a payment instruction  from you for execution on a specific day, you agree that the time limit of  receipt is deemed to be that specific day on which we are to execute the  payment instruction.<br>
                                                                4.4. It is your  responsibility to ensure that the monies you pay to us are sufficient to make  each and every payment transaction which you authorise us to make. We will not  make any money transfer instructed by you unless you have paid to us sufficient  cleared funds first.<br>
                                                                4.5. Applicable laws  prohibit money transmitters from conducting business with certain individuals  and countries. In order to comply, we are required to screen all transfers  against the list of names provided by various governments and/or government  agencies. If a potential match is found, we will suspend the transfer and  request additional information on either the payer or the payee, as necessary.  Upon satisfactory review, the payment transfer will be released for collection.  You agree to ensure that all payment instructions that you pass to us have been  properly screened in the same way.<br>
                                                                4.6. We have the right  to refuse to accept instruction or payment and to refuse to execute any payment  transaction for any of the following reasons:<br>
                                                                4.6a. if any condition  in these Terms and Conditions has not been satisfied; or<br>
                                                                4.6b. if execution  would be unlawful.<br>
                                                                4.7. If any payment  instruction is declined you may contact us using the contact details set in  clause 1 of these Terms and Conditions or via our website. If we have declined  the payment instruction we will where reasonably possible (and where we are  prevented from so doing by law or regulation) tell you why the payment  instruction was declined at the earliest opportunity and in any event no later  than the end of the third business day ( after 1 January 2012, the next  business day) after we received your instruction. If the reason for our  declining the payment instruction was based on incorrect information, we will  agree with you what needs to be done to correct that information.<br>
                                                                4.8. Additional  security questions may be required for certain payment transactions  (regardless of the payment amount) and in  addition, the payee may be required to provide documentary evidence of their  identity. Further information regarding the use of security questions for the  destinations of your payment transfers is available on our website or by  contacting us using the contact details set out in clause 1 of these Terms and  Conditions. You agree to ensure that all payment instructions which you pass to  us will have been checked and verified in this way.<br>
                                                              4.9. A payee may not be  protected against reversals of money transfers where the reversal is due to the  use of a stolen or unauthorised payment instrument or means of authentication  by the payer. Once a payee has received a payment sent by us in accordance with  your instructions as originator for the payer, that payment cannot normally be  reversed.</p>
                                                              <p><span class="h2">5. <u>LIABILITY AND  REFUNDS</u></span><br>
                                                                5.1. If we are  negligent and we might reasonably have expected your loss to result directly  from our negligence, we are liable to you.<br>
                                                                5.2. We will not be  liable for any losses not directly associated with any incident that may cause  you to make a claim against us, nor are we liable for loss of profits, loss of  business, loss of goodwill or any form of special damages whatsoever and  howsoever arising and whether such liability was reasonably foreseeable or not  and whether or not we have been advised of the possibility of such loss been  incurred.<br>
                                                                5.3. Nothing in clauses  5.1 and 5.2 of these Terms and Conditions excludes our liability for fraudulent  misrepresentation by us, our employees or agents or our liability for death or  personal injury caused by our negligence or the negligence of our employees or  agents.<br>
                                                                5.4. Notwithstanding  anything to the contrary in these Terms and Conditions, we shall not be liable  to you or be obliged to perform our obligations under these Terms and  Conditions if we are prevented, hindered or delayed from or in performing any  of our obligations under these Terms and Conditions due to abnormal and  unforeseeable circumstances beyond our control (including any strike, lock-out,  labour dispute, Act of God, war, riot, civil commotion, malicious damage,  compliance with a law or governmental order, rule, regulation or direction,  accident, breakdown or other failure of equipment, software or communications  network, fire, flood,  or other  circumstances affecting the supply of goods or services).<br>
                                                                5.5. You acknowledge  that our website is subject to periodic maintainance and testing and that you  may not be able to access it from time to time as a result of that. We are not  responsible for any loss you may suffer as a result of your being unable to  access our website at any time.<br>
                                                              5.6. You must send us  all relevant supporting documentation in relation to any claim for a refund or  compensation.</p>
                                                              <p><span class="h2">6. <u>MODIFICATION TO  TERMS AND CONDITIONS;</u></span><br>
                                                                <u>TERMINATION</u><br>
                                                                6.1. We may change any  provision of these Terms and Conditions.<br>
                                                                6.2. Our agreement  under these Terms and Conditions may be terminated by us or by you, by giving  two(2) months written notice to the other party.<br>
                                                              6.3. Such termination  will not release you from any liability in respect of any sums owing to us or  from any previous liability for any act performed by us in accordance with  instructions received from you.</p>
                                                              <p><span class="h2">7. <u>GENERAL</u></span><br>
                                                                7.1. Termination of our  agreement under these Terms and Conditions does not affect you or our accrued  rights and obligations at the date of termination.<br>
                                                                7.2. A failure to  exercise or delay in exercising a right or remedy provided by these Terms and  Conditions or by law does not constitute a waiver of the right or remedy or a  waiver of other rights or remedies. No single or partial exercise of a right or  remedy provided by these Terms and Conditions or by law prevents further  exercise of the right or remedy or the exercise of another right or remedy.<br>
                                                                7.3. In case any  provision in our obligation under these Terms and Conditions shall be invalid,  illegal or unenforceable in any jurisdiction, the validity, legality and  enforceability of the remaining provisions or obligations, or of such provision  or obligation in any other jurisdiction, shall not in any way be affected or  impaired thereby.<br>
                                                              7.4. You may not assign,  transfer or create any trust in respect of, or purport to assign, transfer or  create any trust in respect of, a right or obligation under these Terms and  Conditions.</p>
                                                              <p><span class="h2">8. <u>GOVERNING LAW AND  JURISDICTION</u></span><br>
                                                                8.1. These Terms and  Conditions and our agreement under these Terms and Conditions and all matters  arising from or connected with these Terms and Conditions and our agreement are  governed by English law.<br>
                                                              8.2. The Courts of England  have exclusive jurisdiction to settle any dispute arising from or connected  with these Terms and Conditions (including a dispute regarding their existence,  validity or termination or relating to any non-contractual or other obligation  arising out of or in connection with them) or the consequences of their  nullity.</p>
                                                              <p class="h2">9. <u>REDRESS</u></p>
                                                              <p>9.1. You may also be eligible for redress for any dispute  and matter arising out of, or in connection with these Terms and Conditions  through the dispute resolution mechanism provided by the Financial Ombudsman  Service (please see below for further details).</p>
                                                              <p class="h2">10. <u>HELP AND INFORMATION - COMPLIANTS</u></p>
                                                              <p>10.1. If you have any queries or require a copy of these  Terms and Conditions (or any document comprised in them), please contact us  using the contact details in clause 1 of these Terms and Conditions.</p>
                                                              <p>10.2. We aim to provide the highest level of customer  service possible. If you do experience a problem, we will always seek to  resolve this as quickly and efficiently as possible. However, if you are  unhappy and would like to make a compliant, please refer to our Compliants  Policy for details of our internal process for dealing with compliants promptly  and fairly. Our Compliants Policy is available on our website or by contacting  our customer service team at;<br>
                                                                KUNZLE LTD 145-157 St. JOHN STREET, CITY OF LONDON, LONDON.  EC1V 4PW.</p>
                                                              <p>We will then investigate the matter and try to reach a  satisfactory conclusion. Compliants may be recorded and monitored for our  internal use; we may submit an anonymised summary of compliants made to us  during a particular period of time to our regulator. If you are not happy with  our final response or if we have not concluded our investigation after 8 weeks,  you may be able to refer your compliant to The Financial Ombudsman Service,  South Quay Plaza, 183 Marsh Wall London<br>
                                                                E14 9SR.</p>
<p align="center"><strong></p>
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