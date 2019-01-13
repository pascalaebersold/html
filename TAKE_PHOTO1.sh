#!/bin/bash
sudo killall raspistill
DISPLAY=:0 xdotool search --desktop 0 'chromium-browser' windowactivate key Ctrl+1
DATE=$(date +"%Y-%m-%d_%H%M")
sudo raspistill -p 0,0,800,350 -t 500 -o /var/www/html/pictures/$DATE.jpg
raspistill -t 0 -p 0,0,800,350
