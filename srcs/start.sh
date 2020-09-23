#Changing ownership amd permission
chmod -R 755 tmp/test.com
chown -R www-data:www-data /var/www/html/phpmyadmin

#Creating ssl key and certificate
openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /tmp/test.key -out /tmp/test.crt -subj "/C=RF/ST=Moscow/L=Moscow/O=21school/OU=ft_server/CN=test"

#Configuring nginx
mv tmp/nginx.conf etc/nginx/sites-available/test.com
ln -s /etc/nginx/sites-available/test.com /etc/nginx/sites-enabled/
rm /etc/nginx/sites-enabled/default

#cd \tmp
#wget https://dev.mysql.com/get/mysql-apt-config_0.8.15-1_all.deb
#dpkg -i mysql-apt-config*
#cd ..
#apt-get update
#apt-get -y install mysql-server

#start nginx
service mysql start
service php7.3-fpm start
service nginx start

bash
