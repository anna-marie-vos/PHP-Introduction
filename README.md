# PHP-Introduction
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
