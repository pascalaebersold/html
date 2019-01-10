<?php
shell_exec("sudo killall chromium-browser");
shell_exec("sudo shutdown now");
echo "<script>window.close();</script>";
?>
