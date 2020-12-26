#! /bin/sh.

apt update
apt upgrade -y

apt install wget gnupg lsb-release nginx php7.3-{mbstring,fpm,mysql} -y

service nginx start

export DEBIAN_FRONTEND=noninteractive
debconf-set-selections <<< 'mysql-apt-config mysql-apt-config/select-server select mysql-5.7'
wget https://dev.mysql.com/get/mysql-apt-config_0.8.13-1_all.deb
dpkg -i mysql-apt-config_0.8.13-1_all.deb 
apt-get update
apt-get install mysql-server -y

service mysql start

mysql -u root -e "CREATE USER 'fibo' IDENTIFIED BY '4916';"
mysql -u root -e "CREATE DATABASE wordpress; source wordpress.sql;"
//mysql -u root -e "CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;"
mysql -u root wordpress < /wordpress.sql
mysql -u root -e "GRANT ALL ON wordpress.* TO 'fibo'@'localhost' IDENTIFIED BY '4916';"
mysql -u root -e "FLUSH PRIVILEGES;"

apt install php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip -y
apt install php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip -y

service mysql restart
service php7.3-fpm start




mv default /etc/nginx/sites-available/

service nginx restart

wget https://files.phpmyadmin.net/phpMyAdmin/4.9.7/phpMyAdmin-4.9.7-english.tar.gz
wget https://wordpress.org/latest.tar.gz
tar xvf latest.tar.gz 
tar xvf phpMyAdmin-4.9.7-english.tar.gz 

mv wordpress/ /var/www/html/
mv phpMyAdmin-4.9.7-english /var/www/html/phpmyadmin
 


rm -rf /var/www/html/wordpress/wp-config-sample.php
mv wp-config.php /var/www/html/wordpress


openssl req -x509 -nodes -days 365 -subj "/C=MA/ST=BG/O=grissenlghlid/CN=localhost" -addext "subjectAltName=DNS:localhost" -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt
