<?php
shell_exec("DISPLAY=:0 xdotool search --desktop 0 'chromium-browser' windowactivate key Ctrl+1");
shell_exec("sudo /etc/init.d/lircd stop");
shell_exec("sudo rm /home/pi/Desktop/lircd.conf");
shell_exec("sudo cp /home/pi/Desktop/Folder/1/2/3/lircd.conf /home/pi/Desktop");
shell_exec("sudo cp /home/pi/Desktop/lircd.conf /home/pi/lircd.conf");
shell_exec("sudo cp /home/pi/lircd.conf /etc/lirc/lircd.conf");
shell_exec("sudo /etc/init.d/lircd start");
shell_exec("irsend send_once /home/pi/lircd.conf KEY_D");
echo "<script>window.close();</script>";
?>

