<?php
shell_exec("sudo /var/www/html/UPDATE.sh");
shell_exec("DISPLAY=:0 xdotool search --desktop 0 'chromium-browser' windowactivate key Ctrl+1");
shell_exec("DISPLAY=:0 xdotool search --desktop 0 'chromium-browser' windowactivate key Ctrl+F5");
echo "<script>window.close();</script>";
?>
