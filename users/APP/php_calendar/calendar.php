<?
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="us" lang="us">
<head>
<title>PHP Calendar</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
<meta http-equiv="Content-Language" content="sk" />
<meta name="copyright" content="(c) 2005 separd" />
<link href="style.css" type="text/css" rel="stylesheet" />
<script src="scripts.js" type="text/javascript"></script>
</head>
<body>';
include 'configure.php';
$month = isset($_GET['month'])? $_GET['month'] : date('n');
$pd = mktime (0,0,0,$month,1,date('Y'));// timestamp of the first day
$zd = -(date('w', $pd)? (date('w', $pd)-1) : 6)+1;// monday before
$kd = date('t', $pd);// last day of moth
echo '
    <div class="month_title">
      <a href="calendar.php?month='.($month-1).'" class="month_move">&laquo;</a>
      <div class="month_name">'.$month_names[date('n', mktime(0,0,0,$month,1,date('Y')))].' '.date('Y', mktime(0,0,0,$month,1,date('Y'))).'</div>
      <a href="calendar.php?month='.($month+1).'" class="month_move">&raquo;</a>
      <div class="r"></div>
    </div>';
for ($d=0;$d<7;$d++) {
  echo '
    <div class="week_day">'.$day_names[$d].'</div>';
}
echo '
    <div class="r"></div>';
for ($d=$zd;$d<=$kd;$d++) {
  $i = mktime (0,0,0,$month,$d,date('Y'));
  if ($i >= $pd) {
    $today = (date('Ymd') == date('Ymd', $i))? '_today' : '';
    $minulost = (date('Ymd') >= date('Ymd', $i+86400)) && !$allow_past;
    echo '
    <div class="day'.$today.'">'.($minulost? date('j', $i) : '<a title="'.date('Ymd', $i).'" href="javascript:insertdate(\''.date($date_format, $i).'\')">'.date('j', $i).'</a>').'</div>';
  } else {
    echo '
    <div class="no_day">&nbsp;</div>';
  }
  if (date('w', $i) == 0 && $i >= $pd) {
    echo '
    <div class="r"></div>';
  }
}
echo '
</body>
</html>';
?>
