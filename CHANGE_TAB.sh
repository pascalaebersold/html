#!/bin/bash
DISPLAY=":0"
DISPLAY=:0 xdotool search --desktop 0 'chromium-browser' windowactivate key Ctrl+1
sudo raspistill -t 0
