<?php
shell_exec("sudo /var/www/html/UPDATE.sh");
shell_exec("sudo rm -r /home/pi/html");
echo "<script>window.close();</script>";
?>

