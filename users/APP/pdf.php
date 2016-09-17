



<?php
$mypdf = PDF_new();
PDF_open_file($mypdf, "");
PDF_begin_page($mypdf, 595, 842);
$myfont = PDF_findfont($mypdf, "Times-Roman", "host", 0);
PDF_setfont($mypdf, $myfont, 10);
PDF_show_xy($mypdf, "Sample PDF, constructed by PHP in real-time.", 50, 750);
PDF_show_xy($mypdf, "Made with the PDF libraries for PHP.", 50, 730);
PDF_show_xy($mypdf, "A JPEG image, on 60 % of its original size.", 50, 710);
$myimage = PDF_open_image_file($mypdf, "jpeg", "people.jpg");
PDF_place_image($mypdf, $myimage, 50, 650, 0.6);
PDF_end_page($mypdf);
PDF_close($mypdf);
$mybuf = PDF_get_buffer($mypdf);
$mylen = strlen($mybuf);
header("Content-type: application/pdf");
header("Content-Length: $mylen");
header("Content-Disposition: inline; filename=gen02.pdf");
print $mybuf;
PDF_delete($mypdf);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<strong>good or bad</strong>
</body>
</html>
