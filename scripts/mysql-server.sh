#!/bin/bash
# Shell script to install deb package dependencies as well as python package
# dependencies for dataservice.

# if any proxy server
#PROXY=""
# file to store the generated password
DB_PASS_FILE="db_pass.txt"

if [[ `id -u` -ne 0 ]]; then
  echo "You have to execute this script as super user!"
  exit 1;
fi

# Update the packages
echo "Updating package cache.."
yum -y update
if [[ $? -ne 0 ]]; then
  echo "Updating package cache failed!"
  exit 1;
fi

echo "Installing MySQL database.."
if [ ! -f $DB_PASS_FILE ]; then
  # generate a random password for the database and store it in the $DB_PASS_FILE
  # file
#  DBPASS=$(date +%s | sha256sum | head -c 32)
  DBPASS="Virtual-Labs123!@#"
  echo $DBPASS > $DB_PASS_FILE
fi

# Install MySQL Server in a Non-Interactive mode.
echo "mysql-server mysql-server/root_password password $DBPASS" | sudo debconf-set-selections
echo "mysql-server mysql-server/root_password_again password $DBPASS" | sudo debconf-set-selections
yum install -y mysql-server
if [[ $? -ne 0 ]]; then
  echo "FATAL: MySQL installation failed!"
  exit 1;
fi

