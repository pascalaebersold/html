!#/bin/bash
sudo git clone https://github.com/pascalaebersold/html.git
sudo rm -r /var/www/html/
sudo cp -R /home/pi/html/ /var/www/
sudo rm -r /home/pi/html
sudo service apache2 restart
