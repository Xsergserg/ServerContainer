FROM debian:buster
ENV ADMIN="rbeach"
LABEL maintainer="rbeach@student.21-school.com"

RUN apt-get update
RUN apt-get -y upgrade
RUN apt-get -y install nginx\
			openssl\
			wget\
			unzip\
			mariadb-server\
			mariadb-client\
			php7.3\
			php7.3-fpm\
			php7.3-common\
			php7.3-mysql\
			php7.3-gd\
			php7.3-cli\
			php-imagick\
			php-phpseclib\
			php-php-gettext\
			php7.3-common\
			php7.3-gd\
			php7.3-imap\
			php7.3-json\
			php7.3-curl\
			php7.3-zip\
			php7.3-xml\
			php7.3-mbstring\
			php7.3-bz2\
			php7.3-intl\
			php7.3-gmp
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.zip
RUN unzip phpMyAdmin-5.0.2-all-languages.zip
RUN mkdir -p tmp/test.com/html
RUN mv phpMyAdmin-5.0.2-all-languages tmp/test.com/html/phpmyadmin
RUN rm phpMyAdmin-5.0.2-all-languages.zip
RUN wget https://wordpress.org/wordpress-5.4.1.zip
RUN unzip wordpress-5.4.1.zip
RUN cp -r wordpress/. tmp/test.com/html/
RUN rm wordpress-5.4.1.zip
RUN rm -R wordpress

COPY srcs/start.sh ./tmp
COPY srcs/nginx.conf ./tmp
COPY srcs/mysql.sql ./tmp
RUN rm /etc/php/7.3/fpm/php.ini
COPY srcs/php.ini ./etc/php/7.3/fpm
COPY srcs/config.inc.php tmp/test.com/html/phpmyadmin
COPY srcs/wp-config.php tmp/test.com/html/

RUN service mysql start && mysql -u root < ./tmp/mysql.sql

CMD bash tmp/start.sh
