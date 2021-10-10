
<?php


function GetIP(){
if(getenv("HTTP_CLIENT_IP")) {
$ip = getenv("HTTP_CLIENT_IP");
} elseif(getenv("HTTP_X_FORWARDED_FOR")) {
$ip = getenv("HTTP_X_FORWARDED_FOR");
if (strstr($ip, ',')) {
$tmp = explode (',', $ip);
$ip = trim($tmp[0]);
}
} else {
$ip = getenv("REMOTE_ADDR");
}
return $ip;
}

$ipcik = GetIP();
$tarih = date('d.m.Y H:i:s');
$browser = getenv('HTTP_USER_AGENT');


$kayit = fopen("iplog.txt", "a");
fputs($kayit, "IP: $ipcik - DATE: $tarih - BROWSER: $browser  \n");
fclose($kayit);

?>