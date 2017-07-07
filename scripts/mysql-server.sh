yum install mysql-server mysql php-mysql -y
chkconfig mysqld on
service mysqld start
mysql -u root -e "SET PASSWORD FOR 'root'@'localhost' = PASSWORD('root');"
