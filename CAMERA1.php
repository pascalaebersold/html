<?php
shell_exec("sudo killall raspistill");
shell_exec("DISPLAY=:0 xdotool search --desktop 0 'chromium-browser' windowactivate key Ctrl+1");
shell_exec("sudo raspistill -t 0 -p 0,0,800,350");
echo "<script>window.close();</script>";
?>

