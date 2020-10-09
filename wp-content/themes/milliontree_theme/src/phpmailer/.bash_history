ls
getent group groupname
cut -d: -f1 /etc/passwd
sudo apt-get update
sudo apt-get install apache2
sudo apt-get install php5 libapache2-mod-php5 php5-mcrypt
sudo vi /etc/apache2/mods-enabled/dir.conf
sudo service apache2 restart
sudo vi /var/www/html/info.php
sudo apt-get install php5-curl
ls
sudo service apache2 restart
sudo apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv 2930ADAE8CAF5059EE73BB4B58712A2291FA4AD5
echo "deb [ arch=amd64 ] https://repo.mongodb.org/apt/ubuntu trusty/mongodb-org/3.6 multiverse" | sudo tee /etc/apt/sources.list.d/mongodb-org-3.6.list
sudo apt-get update
sudo apt-get install -y mongodb-org
sudo service mongod start
sudo vi /var/log/mongodb/mongod.log
mongo
/sys/kernel/mm/transparent_hugepage/enabled is 
sudo apt install sysfsutils
sudo vi /etc/sysfs.conf
mongo
sudo service mongod restart
mongo
sudo service apache2 restart
sudo service mongod restart
mongo
cat /sys/kernel/mm/transparent_hugepage/enabled
sudo vi /etc/default/grub
sudo reboot
mongo
sudo apt-get install php-pear php5-dev
sudo pecl install mongo
sudo pecl install mongodb
sudo apt-get install php5-dev php5-cli php-pear -y
sudo pecl install mongo 
sudo pecl install mongodb
sudo apt-get install pkg-config libssl-dev
sudo pecl install mongodb
sudo apt-get install libpcre3-dev
sudo pecl install mongodb
sudo vi /etc/php5/apache2/php.ini
sudo service apache2 restart
make test
openssl req -new -newkey rsa:2048 -nodes -keyout gyandaan.key -out gyandaan.csr
ls
openssl req -new -newkey rsa:2048 -nodes -keyout gyandaan.key -out gyandaan.csr
ls
sudo unzip gyandaan.org.zip 
sudo apt-get install zip unzip
sudo unzip gyandaan.org.zip 
ls
cd /etc/apache2/
ls
sudo mkdir /etc/apache2/ssl
chmod 700 /etc/apache2/ssl
sudo chmod 700 /etc/apache2/ssl
sudo chown www-data:www-data /etc/apache2/ssl
sudo apt-get install openssl
1
sudo a2enmod ssl
sudo service apache2 restart
ls
cd ~
ls
sudo cp 9bfdb99896fa0efe.crt /etc/apache2/ssl/
cd /etc/apache2/ssl/
ls
sudo cp gyandaan.key /etc/apache2/ssl/
sudo cp gd_bundle-g2-g1.crt /etc/apache2/ssl/
sudo chmod 600 /etc/apache2/ssl/*
cd /etc/apache2/sites-available/
ls
sudo vi default-ssl.conf 
cp 000-default.conf 000-default.conf.bkp 
sudo cp 000-default.conf 000-default.conf.bkp 
ls
sudo touch /etc/apache2/sites-available/gyandaan.org.conf
ls
sudo a2ensite gyandaan.org
cd ~
ls
cd /etc/apache2/sites-available/
ls
sudo vi 000-default.conf
sudo apachectl configtest
sudo service apache2 restart
ls
sudo vi gyandaan.org.conf 
sudo vi 000-default.conf
sudo service apache2 restart
sudo vi 000-default.conf
sudo apt-get install php5.6-mongo
sudo service apache2 restart
sudo vi /etc/php/5.6/apache2/php.ini
sudo service apache2 restart
sudo vi /etc/php/5.6/apache2/php.ini
sudo pecl uninstall mongodb
sudo pecl install mongo
ls
sudo pecl info mongo
sudo service apache2 restart
sudo pecl info mongo
php -i | grep -A 1 MongoDB
ls
cd /var/
ls
cd opt/
ls
cd ..
cd l
cd lib/
ls
cd mongodb/
ls
cd ..
sudo apt-get install php-mongodb
sudo apt-get install php-mongo
sudo apt-get uninstall php-mongodb
sudo apt-get install php5.6-mongo
sudo apt-get install php5.6-mongodb
sudo pecl install mongodb
sudo apt-get install php-pear php5.6-dev
sudo pecl install mongo
sudo touch /etc/php5/conf.d/mongo.ini
sudo apt-get install php-mongo
sudo service apache2 restart
sudo apt-get remove php-mongodb
sudo apt-get remove php-mongo
sudo service apache2 restart
sudo apt-get install php5.6-mongo
sudo service apache2 restart
sudo apt-get remove php-mongo
sudo apt-get remove php-mongodb
sudo service apache2 restart
sudo apt-get install php-mongodb
sudo service apache2 restart
sudo vi /etc/php/5.6/apache2/php.ini
sudo service apache2 restart
sudo apt-get remove php-mongodb
sudo service apache2 restart
sudo apt-get install php-mongo
sudo service apache2 restart
sudo vi /etc/php/5.6/apache2/php.ini
sudo service apache2 restart
cd /var/www/
sudo chmod -R 777 html/
cd html/
ls
sudo service apache2 restart
sudo apt-get remove php-mongodb
apt-get autoremove
sudo apt-get remove php-mongo
sudo service apache2 restart
sudo apt-get remove --auto-remove php-mongo
sudo service apache2 restart
sudo apt-get install php5.6-mongo
sudo service apache2 restart
sudo apt-get remove php-mongo
sudo pecl install mongo
sudo apt-get remove php-mongo
sudo apt-get remove php-mongodb
sudo service apache2 restart
sudo apt-get remove --auto-remove php-mongo
sudo apt-get purge php-mongo
sudo apt-get purge php-mongodb
sudo apt-get purge --auto-remove php-mongodb
sudo apt-get purge --auto-remove php-mongo
sudo apt-get install php5.6-mongo
sudo service apache2 restart
mongo
cd /var/www/html
ls
sudo unzip test_gyandaan_db_24_1_18.zip 
ls
mongorestore -d gyandaan /var/www/html/test_gyandaan_db_24_1_18/gyandaan
mongo
sudo service mongod stop
sudo apt-get purge mongodb-org*
sudo rm -r /var/log/mongodb
sudo rm -r /var/lib/mongodb
sudo apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv 0C49F3730359A14518585931BC711F9BA15703C6
echo "deb [ arch=amd64 ] http://repo.mongodb.org/apt/ubuntu trusty/mongodb-org/3.4 multiverse" | sudo tee /etc/apt/sources.list.d/mongodb-org-3.4.list
sudo apt-get update
sudo apt-get install -y mongodb-org
sudo service mongod start
mongo
sudo service mongod stop
sudo apt-get purge mongodb-org*
sudo rm -r /var/log/mongodb
sudo rm -r /var/lib/mongodb
mongo
sudo apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv 0C49F3730359A14518585931BC711F9BA15703C6
echo "deb [ arch=amd64 ] http://repo.mongodb.org/apt/ubuntu trusty/mongodb-org/3.4 multiverse" | sudo tee /etc/apt/sources.list.d/mongodb-org-3.4.list
sudo apt-get install -y mongodb-org
sudo service mongod stop
sudo apt-get purge mongodb-org*
sudo rm -r /var/log/mongodb
sudo rm -r /var/lib/mongodb
sudo apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv 0C49F3730359A14518585931BC711F9BA15703C6
echo "deb [ arch=amd64 ] http://repo.mongodb.org/apt/ubuntu trusty/mongodb-org/3.4 multiverse" | sudo tee /etc/apt/sources.list.d/mongodb-org-3.4.list
sudo apt-get update
sudo apt-get install mongodb-org=3.4.9 mongodb-org-server=3.4.9 mongodb-org-shell=3.4.9 mongodb-org-mongos=3.4.9 mongodb-org-tools=3.4.9
sudo service mongod start
mongo
mongorestore -d gyandaan /var/www/html/gyandaan
mongo
sudo vi /etc/php/5.6/apache2/php.ini
sudo apt-get install php5.6-mcrypt
sudo service apache2 restart
mongo
cd /etc/
ls
cd apache2/
ls
vi apache2.conf 
cd sites-available/
ls
vi gyandaan.org.conf 
sudo vi 000-default.conf
sudo service apache2 restart
sudo apt-get update
dpkg --get-selections | grep mysql
sudo apt-get install mysql-server php5-mysql
sudo mysql_install_db
sudo mysql_secure_installation
sudo apt-get install phpmyadmin
sudo php5enmod mcrypt
sudo service apache2 restart
cd /etc/
ls
cd apache2/
ls
cd sites-available/
ls
vi gyandaan.org.conf 
000-default.conf
vi 000-default.conf
sudo vi 000-default.conf
sudo service apache2 restart
cd  ..
ls
cd conf-enabled/
ls
sudo apt-get install phpmyadmin apache2-utils
sudo vi /etc/apache2/apache2.conf
sudo service apache2 restart
sudo apt-get install phpmyadmin php-mbstring php-gettext
sudo apt-get install libapache2-mod-php5
sudo apt-get install php-mbstring
sudo service apache2 restart
sudo dpkg-reconfigure phpmyadmin
sudo service apache2 restart
sudo apt-get install phpmyadmin apache2-utils
sudo apt-get install phpmyadmin
php -v
sudo apt-get install php5.6-mbstring

sudo apt-get install php5.6-mysql
sudo service apache2 restart
ls
vi phpmyadmin.conf 
cd ..
ls
cd sites-available/
ls
vi 000-default.conf
sudo vi 000-default.conf
sudo service apache2 restart
sudo vi /etc/apache2/conf-available/phpmyadmin.conf
sudo service apache2 restart
sudo vi /usr/share/phpmyadmin/.htaccess
sudo apt-get install apache2-utils
sudo htpasswd -c /etc/phpmyadmin/.htpasswd suraj
cd /var/www/html/public
ls
sudo unzip cms.zip 
ls
sudo chmod -R 777 cms
ls
sudo rm -rf cms/
ls
cd /var/www/html/public
ls
sudo unzip cms.zip 
ls
sudo chmod -R 777 cms
ls
mongo
mongodump -d gyandaan -o /var/www/html/gyandaan_db_backup_15_03_2018
mongo
mongodump -d gyandaan -o /var/www/html/gyandaan_db_backups/gyandaan_backup_22_03_2018
df
cd /var/www/html/gyandaan_db_backups/gyandaan_backup_22_03_2018
ls
ls -d
ls
du -hs gyandaan
mongo
sudo apt-get install php5.6-gd
sudo service apache2 restart
cd /var/www/html/
ls
cd ..
ls
cd html
ls
composer update
sudo apt-get update
sudo apt-get install curl php5-cli git
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
composer
ls
composer update
sudo apt-get install php5.6-xml
sudo apt-get install php5.6-mbstring
sudo service apache2 restart
composer update
"maatwebsite/excel": "~2.1.0",
mongo
cd /var/www/html/gyandaan_db_uploads/
sudo unzip gyandaan_db_22_03_2018_all_collection_are_orignal.zip 
mongo
mongorestore -d gyandaan /var/www/html/gyandaan_db_uploads/gyandaan
mongorestore -d gyandaan -c partners /var/www/html/gyandaan_db_uploads/partners.bson
mongo
mongodump -d gyandaan -o /var/www/html/gyandaan_db_backups/25_03_2018
mongo
httpd -v
apache2 -v 
php -v
mongo
mongorestore -d gyandaan -c extracurricular_activities /var/www/html/gyandaan_db_backup_15_03_2018/extracurricular_activities.bson
mongorestore -d gyandaan -c school_types /var/www/html/gyandaan_db_backup_15_03_2018/school_types.bson
mongorestore -d gyandaan -c donation_frequency /var/www/html/gyandaan_db_backup_15_03_2018/donation_frequency.bson
mongo
redis-cli
sudo vi /etc/php/5.6/apache2/php.ini
sudo service apache2 restart
redis-cli
ps -ef
redis-cli
mongo
redis-cli
mongo
redis-cli
mongo
composer dump-autoload
cd /var/www/html
composer dump-autoload
Log::info("-------------------------------------------");
Log::info($result);
composer dump-autoload
cd
redis-cli
mongo
redis-cli
mongo
redis-cli
apache -v
apache2 -v
php -v
mongo
cd /etc/
ls
cd apache2/
ls
vi apache2.conf 
cd sites-available/
ls
vi gyandaan.org.conf 
vi 000-default.conf
ls
vi default-ssl.conf 
cd /home/
ls
cd surajde16/
ls
cd /etc/apache2/
ls
cd sites-available/
ls
vi 000-default.conf
sudo vi 000-default.conf
sudo service apache2 restart
cd /var/www/html/
ls
