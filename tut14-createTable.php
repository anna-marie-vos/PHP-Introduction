<?php
  $accounts = mysql_connect('localhost','root')
  or die(mysql_error());
  // mysqli_select_db('tableName', 'connection')
  mysql_select_db('tut1-account', $accounts);

  $sql = "CREATE TABLE users2
    (
      ID int NOT NULL AUTO_INCREMENT,
      PRIMARY KEY(ID),
      Username varchar(20),
      Password varchar(20),
      firstname varchar(20),
      lastname varchar(20)
    )
  ";
  // mysqli_select_db('action', 'connection')
  mysql_query($sql , $accounts);
?>
