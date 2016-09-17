<?php

//$dtime = date("Y-m-d H:i:s a", time() + 18000);
//$date=date("Y-m-d H:i:s a", time() + 18000);
// 1hr= 36000, 6hr=18000
$tch=0;
$tdate = date("Ymd");
$dtime = date("Y-m-d H:i:s a", time() + $tch);
$date=date("Y-m-d H:i:s a", time() + $tch);
$newDate = date("j  F  Y", strtotime($tdate));
$time = date("h:i:A", strtotime($date));
 $newtime = date("H:i:s a", time() + $tch);
 $ytime=date("h:i:s a");
 $newtime2 = date("h:i:s A", strtotime($ytime));

 ?>