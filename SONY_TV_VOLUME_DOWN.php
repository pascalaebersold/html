<?php
shell_exec("sudo /etc/init.d/lircd stop");
shell_exec("sudo rm /home/pi/Desktop/lircd.conf");
shell_exec("sudo cp /home/pi/Desktop/Folder/1/2/3/lircd.conf /home/pi/Desktop");
shell_exec("sudo cp /home/pi/Desktop/lircd.conf /home/pi/lircd.conf");
shell_exec("sudo cp /home/pi/lircd.conf /etc/lirc/lircd.conf");
shell_exec("sudo /etc/init.d/lircd start");
shell_exec("irsend send_once /home/pi/lircd.conf KEY_C");
echo "<script>window.close();</script>";
?>

