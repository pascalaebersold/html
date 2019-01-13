!#/bin/bash
sudo git clone https://github.com/pascalaebersold/html.git /var/www/htmlnew
sudo mv /var/www/html /var/www/htmlold
sudo mv /var/www/htmlnew /var/www/html
sudo rm -r /var/www/htmlold
sudo chmod u+x /var/www/html/UPDATE.sh
