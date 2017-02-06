<?php
 $connect = mysql_connect("localhost","root")
 or die(mysql_error());

 mysql_select_db("tut1-account",$connect);

 $action = " INSERT INTO users2
   (firstname,lastname,Password,Username)
   VALUES('frodo','baggins','frodo@frodo.com','frodo@frodo.com')
 ";

 mysql_query($action,$connect);
?>
