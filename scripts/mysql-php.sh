#!/bin/bash

#mysqlRootPass="$(pwmake 128)"
#mysqlRootPass="Virtual-Labs123!@#"
#mysqlRootPass="VLead@123"
mysqlRootPass="Serc8!@#"
#mysqlRootPass="root"
echo ' -> Removing previous mysql server installation'
service mysqld stop && yum remove -y mysql-community-server && rm -rf /var/lib/mysql && rm -rf /var/log/mysqld.log && rm -rf /etc/my.cnf

echo ' -> Installing mysql server (community edition)'
yum install wget -y
wget https://dev.mysql.com/get/mysql57-community-release-el6-11.noarch.rpm
yum localinstall mysql57-community-release-el6-11.noarch.rpm -y
yum install mysql-community-server -y
service mysqld start

echo ' -> Starting mysql server (first run)'
chkconfig mysqld on
tempRootDBPass="`grep 'temporary.*root@localhost' /var/log/mysqld.log | tail -n 1 | sed 's/.*root@localhost: //'`"

echo ' -> Setting up new mysql server root password'
service mysqld stop
rm -rf /var/lib/mysql/*logfile*
wget -O /etc/my.cnf "https://my-site.com/downloads/mysql/512MB.cnf"
service mysqld start
mysqladmin -u root --password="$tempRootDBPass" password "$mysqlRootPass"
mysql -u root --password="$mysqlRootPass" -e "
DELETE FROM mysql.user WHERE User='';
DROP DATABASE IF EXISTS test; 
DELETE FROM mysql.db WHERE Db='test' OR Db='test\\_%'; 
DELETE FROM mysql.user where user != 'mysql.sys'; 
CREATE USER 'root'@'%' IDENTIFIED BY '${mysqlRootPass}';
GRANT ALL ON *.* TO 'root'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;"
#EOSQL
service mysqld status
echo " -> MySQL server installation completed, root password: $mysqlRootPass";



#################Php-5.6####################
#############install apache ##############
yum install -y httpd
service httpd start
chkconfig httpd on

##############install php-5##########
rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-6.noarch.rpm
rpm -Uvh https://mirror.webtatic.com/yum/el6/latest.rpm
yum install php56w php56w-opcache -y
yum install php56w-fpm php56w-opcache -y 
yum install php56w-mysql -y 



###############install moodle ##########################
yum install php56w-gd -y
yum install php56w-xml -y
yum install php56w-mbstring -y
yum install php56w-xmlrpc -y
service httpd restart

