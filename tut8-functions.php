<?php
  function welcome($name){
    echo "welcome to the webpage $name </br>";
  }

  function sum($num1, $num2){
    return $num1 + $num2;
  }

  welcome('Chris');
  echo sum(5,5);

//time
  $date = date('y-m-d');
  $time = date('H:i:s');
  $day = date('l');

  echo "<p>date: </p>";

  echo "the date is $date, today is: $day the current time is $time";
?>
