#!/bin/bash
sudo killall raspistill
DISPLAY=:0 xdotool search --desktop 0 'chromium-browser' windowactivate key Ctrl+1
DATE=$(date +"%Y-%m-%d_%H%M")
raspistill -p 0,0,690,480 -t 500 -o /home/pi/Pictures/$DATE.jpg
raspistill -t 0 -p 0,0,690,480

