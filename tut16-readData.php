<?php
  $connect = mysql_connect('localhost','root')
  or die(mysql_error());

  mysql_select_db("tut1-account",$connect);

  $query = "SELECT * FROM users2";

  $results = mysql_query($query, $connect);

  echo "The results from mysql_query are: $results</br>";

  while($row = mysql_fetch_array($results)){
    $username = $row['Username'];
    $firstname = $row['firstname'];
    echo "Username: $username
    and first name is: $firstname </br>";
  }

?>
