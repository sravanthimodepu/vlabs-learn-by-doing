mysql -u root -p'Virtual-Labs123!@#' -e "create database mediawiki; GRANT ALL PRIVILEGES ON mediawiki.* TO root@localhost IDENTIFIED BY 'Virtual-Labs123!@#'; FLUSH PRIVILEGES"

############# install mediawiki #####################
wget https://releases.wikimedia.org/mediawiki/1.28/mediawiki-1.28.2.tar.gz
tar xvzf mediawiki-*.tar.gz
sudo mv mediawiki-1.28.2 /etc/mediawiki
sudo ln -s /etc/mediawiki/ /var/www/html
sudo service httpd restart

sudo service mysqld start 



###############install moodle ##########################
yum install php56w-gd -y
yum install php56w-xml -y
yum install php56w-mbstring -y
yum install php56w-xmlrpc -y
service httpd restart

mysql -u root -p'Virtual-Labs123!@#' -e "create database moodle; GRANT ALL PRIVILEGES ON moodle.* TO root@localhost IDENTIFIED BY 'Virtual-Labs123!@#'; FLUSH PRIVILEGES"

wget http://download.moodle.org/download.php/direct/stable25/moodle-latest-25.zip
unzip moodle-latest-25.zip

#cp -fr moodle/ /var/www/html/moodle
chown -R root /var/www/html/moodle/
chmod -R 755 /var/www/html/moodle/

mkdir /var/www/moodledata/
chmod 777 /var/www/moodledata/


