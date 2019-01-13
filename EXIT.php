<?php
shell_exec("DISPLAY=:0 xdotool search --desktop 0 'chromium-browser' windowactivate key Alt+F4");
echo "<script>window.close();</script>";
?>
