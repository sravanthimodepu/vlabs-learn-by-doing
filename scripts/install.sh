#############update system###########
sudo yum update -y

#############install apache ##############
sudo yum install -y httpd
sudo service httpd start

##############install php-5##########
rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-6.noarch.rpm
rpm -Uvh https://mirror.webtatic.com/yum/el6/latest.rpm
sudo yum install php56w php56w-opcache -y
sudo yum install php56w-fpm php56w-opcache -y 
sudo yum install php56w-mysql -y 

#############install mysql-5#################
sudo yum install wget -y
wget https://dev.mysql.com/get/mysql57-community-release-el6-11.noarch.rpm
sudo yum localinstall mysql57-community-release-el6-11.noarch.rpm -y
sudo yum install mysql-community-server -y
sudo service mysqld start

############# install mediawiki #####################
wget https://releases.wikimedia.org/mediawiki/1.28/mediawiki-1.28.2.tar.gz
tar xvzf mediawiki-*.tar.gz
sudo mv mediawiki-1.28.2 /var/www/html/mediawiki
sudo service httpd restart

###############login to mysql ######################
mysql -uroot -proot
create database mediawiki;
grant index, create, select, insert, update, delete, alter, lock tables on mediawiki.* to 'root'@'localhost' identified by 'root';
FLUSH PRIVILEGES;
exit;

###############install moodle ##########################
sudo yum install php-iconv php-mbstring php-curl php-openssl php-tokenizer php-xmlpc php-soap php-ctype php-zip php-gd php-simplexml php-spl php-pcre php-dom php-xml php-intl php-json php-ldap php-pecl-apc -y
sudo service mysqld start 
sudo service httpd start

mysql -uroot -proot
create database moodle;
GRANT ALL PRIVILEGES ON moodle.* TO 'root' IDENTIFIED BY 'root';
flush privileges;
exit;

wget http://download.moodle.org/download.php/direct/stable25/moodle-latest-25.zip
unzip moodle-latest-25.zip

cp -fr moodle/ /var/www/html/moodle
chown -R root /var/www/html/moodle/
chmod -R 755 /var/www/html/moodle/

sudo mkdir /var/www/moodledata/
sudo chmod 777 /var/www/moodledata/
