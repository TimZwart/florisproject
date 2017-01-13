#!/bin/bash
#this assumes you have mysql command line client installed, mysql server installed, php and apache
echo "enter username for mysql"
read username
echo "enter password"
read pwd
mysql -u $username -p$pwd < default.sql 
echo "user default created pass is tjappadappa"
