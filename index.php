<?php //-- Very simple variant
$useragent = $_SERVER['HTTP_USER_AGENT'];
$iPod = stripos($useragent, "iPod");
$iPad = stripos($useragent, "iPad");
$iPhone = stripos($useragent, "iPhone");
$Android = stripos($useragent, "Android");
$iOS = stripos($useragent, "iOS");
//-- You can add billion devices

$DEVICE = ($iPod||$iPad||$iPhone||$Android||$iOS||$webOS||$Blackberry||$IEMobile||$OperaMini);

if ($DEVICE !=true) {
  include 'desktop.html';
}else{
  include 'mobil.html';
}

?>
