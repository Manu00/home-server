<?php
$stop_vpn = $_POST['stopvpn'];
$okpass = "12457" ;

if ($stop_vpn == $okpass) {
	shell_exec('cd /home/pi/myscripts/ && sudo ./vpn-service.sh stop');
} else {
	echo "Wrong Password" ;
}