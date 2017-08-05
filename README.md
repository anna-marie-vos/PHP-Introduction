# PHP-Introduction
# do not install the latest version it's bugged go for 5.6
## Latest version installation: 
* follow the guide setup here: http://www.wikihow.com/Install-XAMPP-on-Linux
* it installs to opt/lampp
* Checkout bitnami for xampp if you get time
* go to : /opt/lampp
* then type: sudo chmod 777 htdocs
* save files at: /opt/lampp/htdocs 


### Error: Mysql - no such directory
* go to: https://stackoverflow.com/questions/1676688/php-mysql-connection-not-working-2002-no-such-file-or-directory
* the php.ini file is wrong, so you have to fix it...yuppiee
* you can find the location of the php.ini file in the http://localhost/dashboard/phpinfo.php under "loaded configuration file"
* to edit it in the terminal as the root user try: sudo nano /opt/lampp/etc/php.ini
* find out where `mysql.default_socket` is in the open file.
* change it so that its this: mysql.default_socket=/opt/lampp/var/mysql/mysql.sock


## Installation:
* install XAMPP on your pc. Go to the XAMPP webpage for installation details: https://www.apachefriends.org/index.html
* download the installation files for Ubuntu. Because I'm using ubuntu 16.04 it's slightly different.
* once the file has downloaded go to the Downloads directory folder.
* Open the terminal once your inside the Downloads folder. Get Sudo access by typing. this will make you the root: sudo su
* Now we need to change permission by running the command: chmod 777 xampp-linux-x64-5.6.30-0-installer.run
* Now run the file by typing: ./xampp-linux-x64-5.6.30-0-installer.run
* Once the file is installed change the permission of the directory to read and write permision by typing: chmod 777 /opt/lampp
* To start xampp type: /opt/lampp/lampp start
* This will create a localhost in the browser. (use firefox)
* navigate to: http://localhost/dashboard
* for commands click on the buttons at the top: http://localhost/dashboard/phpinfo.php
* to terminate the program type: /opt/lampp/lampp stop

### Writing Files permission issues:
* run this command for the folder and files you want to be able to change:
* chmod 777 FolderName
* chmod 777 filename.type
