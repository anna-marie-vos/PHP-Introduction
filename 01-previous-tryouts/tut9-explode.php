<?php
//split
  echo "<p>The explode method in php is
    similar to the split method </br>";
  $sentence = "I have many things to do</p>";
  echo "<p>$sentence </p>";
  $parts = (explode(' ',$sentence));
  print_r($parts);

//strpos()
  $searchParameter = "m";
  echo "<p>search for the character
    '$searchParameter' using strpos() </p>";

  $search = strpos($sentence,$searchParameter);

  echo "<p>$search </p>"

?>
