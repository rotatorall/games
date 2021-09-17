<?php
//Объявляем переменные даты, и переменные окружения
$date=date("[D|d/m/Y|H:i]");
$ip=getenv("Remote_addr");
$real_ip=getenv("HTTP_X_FORWARDED_FOR");
$otkuda=getenv("HTTP_REFERER");
$browser=getenv("HTTP_USER_AGENT");
$win=getenv("windir");
$uid=implode($argv," ");
//Открытие файла лога и запись в него данных,

$fp=fopen("log.txt","a");
fputs($fp,"$date\t|$uid|\t$ip($real_ip)\t$browser\t$otkuda\t$win\n");
fclose($fp);

?>
