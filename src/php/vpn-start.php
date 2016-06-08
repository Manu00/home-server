<?php
$start_vpn = $_POST['startvpn'];
$okpass = "12457" ;

if ($start_vpn == $okpass) {
	chdir('/home/pi/myscripts/');
	shell_exec('sh /vpn-service.sh start');
	header('Location: http://dunno.ddns.net/index.php'); exit;
} else {
	echo "Wrong Password" ;
}
?>