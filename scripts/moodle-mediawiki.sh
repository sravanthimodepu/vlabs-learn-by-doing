############# install mediawiki #####################
wget https://releases.wikimedia.org/mediawiki/1.28/mediawiki-1.28.2.tar.gz
tar xvzf mediawiki-*.tar.gz
sudo mv mediawiki-1.28.2 /etc/wiki
sudo ln -s /etc/wiki/ /var/www/html
sudo service httpd restart

sudo service mysqld start 

################# mediawiki database ##################
#mysql -u root -p'Vitual-Labs123!@#' -e "create database wiki; GRANT ALL PRIVILEGES ON wiki.* TO root@localhost IDENTIFIED BY 'Virtual-Labs123!@#'; FLUSH PRIVILEGES"

mysql -u root -p'Serc8!@#' -e "create database wiki" 



wget http://files.vlabs.ac.in/lbd-project/wiki-dump.sql.tar.gz
tar -xvf wiki-dump.sql.tar.gz

mysql -u root -p'Serc8!@#' wiki < wiki.sql


###############install moodle ##########################
#yum install php56w-gd -y
#yum install php56w-xml -y
#yum install php56w-mbstring -y
#yum install php56w-xmlrpc -y
#service httpd restart

#wget http://files.vlabs.ac.in/lbd-project/moodle.tar.gz
#tar -xvf moodle.tar.gz

#cp -fr moodle/ /var/www/html/moodle
#chown -R root /var/www/html/moodle/
#chmod -R 755 /var/www/html/moodle/

wget http://download.moodle.org/download.php/direct/stable25/moodle-latest-25.zip
unzip moodle-latest-25.zip
cp -fr moodle/ /var/www/html/moodle
chown -R root /var/www/html/moodle/
chmod -R 755 /var/www/html/moodle/



############## moodle database ###############################
#mysql -uroot -p'Virtual-Labs123!@#' -e "create database moodle; GRANT ALL PRIVILEGES ON moodle.* TO root@localhost IDENTIFIED BY 'Virtual-Labs123!@#'; FLUSH PRIVILEGES"

mysql -u root -p'Serc8!@#' -e "create database moodle" 

mysql -u root -p'Serc8!@#' moodle < testmoodle.sql

############copy moodledata files ########################
#wget http://files.vlabs.ac.in/lbd-project/moodledata.tar.gz
#tar -xvf moodledata.tar.gz

mkdir /var/www/moodledata
chmod -R 777 /var/www/moodledata/


