!#/bin/bash
sudo service apache2 stop
sudo rm -r /home/pi/html
sudo git clone https://github.com/pascalaebersold/html.git
sudo rm -r /var/www/html/
sudo cp -R /home/pi/html/ /var/www/
sudo chmod u+x /var/www/html/UPDATE.sh
sudo service apache2 start
