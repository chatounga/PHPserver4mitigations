<?php
// 
// ex call: curl -F interface=eth1 -F addr="192.0.2.1/24"
shell_exec("ip addr add dev ${_POST['interface']} ${_POST['addr']}");
?>
