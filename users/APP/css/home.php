

<?php 	
 include "conn.php"; 

		$result = mysql_query('SELECT id,rate FROM todays_rate ORDER BY id DESC 
                        LIMIT 1') or die('Invalid query: ' . mysql_error());

		//print values to screen
        while ($row = mysql_fetch_assoc($result)) {
          //echo $row['messageid'];
          
        $er = $row['rate'];} 
		
		if(isset($_POST['amount']))
{
	if (!file_exists('pro_main.php')) {   include "app/pro_main.php";	
                     
}
	
if (file_exists('pro_main.php')) {   
                    
}
include "pro_main.php";	
}
         

  ?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>MEK SKY REMIT</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" /><link rel="shortcut icon" href="img/logo.jpg" type="image/jpeg" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-titillium-600.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <a href="index.html"><div class="gh2">MEK SKY REMIT</div><span></span> <h1><small>WE ARE COMPETITIVE, FAST, RELIABLE</small></h1></a>
      </div>
      <div class="searchform">
        <form id="formsearch" name="formsearch" method="post" action="#">
          <span>
          <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
          </span>
          <input name="button_search" src="images/search.gif" class="button_search" type="image" />
        </form>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="img/couple.jpg" width="940" height="310" alt="" /> </a> <a href="#"><img src="img/faceless.jpg" width="940" height="310" alt="" /> </a> <a href="#"><img src="img/family.jpg" width="940" height="310" alt="" /> </a> <a href="#"> <a href="#"><img src="img/happy.jpg" width="940" height="310" alt="" /></a> <a href="#"><img src="img/transfer.jpg" width="940" height="310" alt="" /> </a></div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.php"><span>Home</span></a></li>
           <li><a href="about.php"><span>About Us</span></a></li>
          <li><a href="customer_login.php"><span>CUSTOMERS</span></a></li>
          <li><a href="agent_login.php"><span>AGENTS</span></a></li>
          <li><a href="babyshop.php"><span>SHOP OUTLET</span></a></li>
          <li><a href="blog.php"><span>Blog</span></a></li>
          <li><a href="contact.php"><span>Contact </span></a></li>

        </ul
      ></div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
      
<div class="clr"><div id="rectangle">
  <form method="post"  action="">
  <table width="800" border="0">
    <tr>
      <td><h2>MONEY</h2></td>  <td><h2>SUMMARY</h1></td>
    </tr>
    
    <tr>
      <td><h3>SENDING TO NIGERIA</h3></td>  <td><h3>AMOUNT SENDING:<span style="margin-left:0.5em">£
      <?php if(isset($_POST['amount'])){$mon =mysql_real_escape_string($_POST['amount']); echo number_format($mon,2);} ?>
</span></h3></td>
    </tr>
    
    <tr>
      <td><h3>AMOUNT SENDING: </h3><span style="margin-left:1em"></span></td>  <td><h3> COMMISSION:<span style="margin-left:0.5em">£
      <?php if(isset($tf)){ echo number_format($tf,2);} ?></span></h3></td>
    </tr>
    <tr>
      <td><h3><input type="text" name="amount" placeholder=" AMOUNT SENDING" /> </h3></span></td>  <td><h3>TOTAL AMOUNT TO PAY:<span style="margin-left:0.5em">£<?php if(isset($ap)){ echo number_format($ap,2);} ?></span></h3></td>
    </tr>
    
    <tr>
      <td><h3>TODAY'S RATE:<span style="margin-left:0.5em">£1.00 = N<?php if (isset($er)){ echo number_format($er,2);} ?></span>  </h3><span style="margin-left:1em"></span></span></td>  <td><h3>LOCAL PAY OUT:<span style="margin-left:0.5em">₦
        <?php if(isset($lc)){ echo number_format($lc,2);} ?></span></h3></td>
    </tr>
  </table>
  </div>
  <div>
            <input class="shout-btn2"  type="submit" name="submit" value="CALCULATE" />>
          </div>
  </form
  ><p>&nbsp;</p>
</div>

          <div class="clr"></div>
        </div>
        <div class="article">
          <h2><span>THE  MONEY  TRANSFER  EXPERT </span></h2>
          <p class="infopost">&nbsp;</p>
          <div class="clr"></div>
          <div class="img"><img src="images/img2.jpg" width="650" height="196" alt="" class="fl" /></div>
          <div class="post_content">
            <p>You can be assured in Mek-Sky to send your money overseas. Whatever your reason, wherever the destination and however much you need to send – open an account now and see how Mek-Sky can help with your international money transfer.

</p>

   <h2>Easy And Simple Online Money Transfer</h2>
          <p class="infopost">&nbsp;</p>
     
            <p>YSave on your money transfer and open an account online now. Quick and easy access, with simple and transparent costs means transferring your money overseas has never been easier
</p>
          </div>
          <div class="clr"></div>
        </div>
        <p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="agent_login.php">Agents</a></li>
            <li><a href="customer_login.php">Customers </a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="cargo.php">Cargo</a></li>
            <li><a href="babyshop.php">Baby Shop </a></li>
          </ul>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Links</span></h2>
          <div class="clr"></div>
          <ul class="ex_menu">
            <li><a href="new_agent_reg.php">Register As New Agent</a><br />
              <li><a href="new_customer_reg.php">Register As New Customer</a><br />
                <li><a href="http://www.ictprofessionals.co.uk">Ictrofessionals World Ltd</a><br />
          </li>
           
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image</span> Gallery</h2>
        <a href="#"><img src="img/cargo.jpg" width="75" height="75" alt="Cargo Services" class="gal" /></a> <a href="cargo.php"><img src="img/baby.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="baby.php"><img src="img/customer.jpg" width="75" height="75" alt="Customers" class="gal" /></a> <a href="customer_login.php"><img src="img/agent.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="agent.php"><img src="img/cargo2.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="img/baby2.jpg" width="75" height="75" alt="" class="gal" /></a> </div>
      <div class="col c2">
        <h2><span>Services</span> Overview</h2>
        <div>Mek-Sky is a money transfer and remittance company fully registered with HM revenue and customs and regulated by financial service authority under payment service regulation 2009 ,copyright 2014 .All rights reserved world wide</div>
        <br />
        <p>&nbsp;</p>
      </div>
      <div class="col c3">
        <h2><span>Contact</span> Us.</h2>
        Mek Sky Remit
        <p class="contact_info"> <span>Address:</span>207 Walworth Roads SE17 1RL<br />
          <span>Telephone:</span> +44-2077016069<br />
          <span>FAX:</span>02077016069<br />
          <span>Others:</span> +44-07958193518<br />
          <span>E-mail:</span> <a href="#">mail@mek-sky.com</a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright 2014 Ictprofessionals <a href="#"></a>.</p>
      <p class="rf">Ictprofessionals </p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
<div align=center>Designed by Ictprofessionals Ltd<a href='http://ictprofessionals ltds/'></a></div></body>
</html>
