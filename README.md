install packeages:
sudo apt install php-json
sudo apt install php-mbstring
sudo apt install php-mysqlnd
sudo apt install php-xml


# activate extensions
sudo nano /etc/php/7.2/apache2/php.ini

extension=mysqli
extension=curl
extension=intl

# install composer

sudo apt install curl php-cli php-mbstring git unzip
cd ~
curl -sS https://getcomposer.org/installer -o composer-setup.php
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

# install and create proyect.
cd folder_project
composer create-project codeigniter4/appstarter . -s rc

# validate php.ini extensions exists. We raised php --ini to validate ours extensions

    - /etc/php/7.2/cli/php.ini
    - /etc/php/7.2/cli/conf.d/10-mysqlnd.ini
    - /etc/php/7.2/cli/conf.d/10-opcache.ini
    - /etc/php/7.2/cli/conf.d/10-pdo.ini
    - /etc/php/7.2/cli/conf.d/15-xml.ini
    - /etc/php/7.2/cli/conf.d/20-calendar.ini
    - /etc/php/7.2/cli/conf.d/20-ctype.ini
    - /etc/php/7.2/cli/conf.d/20-dom.ini
    - /etc/php/7.2/cli/conf.d/20-exif.ini
    - /etc/php/7.2/cli/conf.d/20-fileinfo.ini
    - /etc/php/7.2/cli/conf.d/20-ftp.ini
    - /etc/php/7.2/cli/conf.d/20-gettext.ini
    - /etc/php/7.2/cli/conf.d/20-iconv.ini
    - /etc/php/7.2/cli/conf.d/20-json.ini
    - /etc/php/7.2/cli/conf.d/20-mbstring.ini
    - /etc/php/7.2/cli/conf.d/20-mysqli.ini
    - /etc/php/7.2/cli/conf.d/20-pdo_mysql.ini
    - /etc/php/7.2/cli/conf.d/20-pdo_pgsql.ini
    - /etc/php/7.2/cli/conf.d/20-pgsql.ini
    - /etc/php/7.2/cli/conf.d/20-phar.ini
    - /etc/php/7.2/cli/conf.d/20-posix.ini
    - /etc/php/7.2/cli/conf.d/20-readline.ini
    - /etc/php/7.2/cli/conf.d/20-shmop.ini
    - /etc/php/7.2/cli/conf.d/20-simplexml.ini
    - /etc/php/7.2/cli/conf.d/20-sockets.ini
    - /etc/php/7.2/cli/conf.d/20-sysvmsg.ini
    - /etc/php/7.2/cli/conf.d/20-sysvsem.ini
    - /etc/php/7.2/cli/conf.d/20-sysvshm.ini
    - /etc/php/7.2/cli/conf.d/20-tokenizer.ini
    - /etc/php/7.2/cli/conf.d/20-wddx.ini
    - /etc/php/7.2/cli/conf.d/20-xmlreader.ini
    - /etc/php/7.2/cli/conf.d/20-xmlwriter.ini
    - /etc/php/7.2/cli/conf.d/20-xsl.ini


# run docker image
sudo sudo docker volume create codeigniter-vol
sudo docker build . -t codeigniter4
sudo docker run --name codeigniter-container -p 8001:80 -it codeigniter4
sudo docker-compose up --build -d

# connect to container
sudo docker exec -it baa36ad3d2c2 /bin/sh