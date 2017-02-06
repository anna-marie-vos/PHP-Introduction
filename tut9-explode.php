<?php
//split
  echo "The explode method in php is similar to the split method </br>";
  $sentence = "I have many things to do";
  echo "$sentence </br>";
  $parts = (explode(' ',$sentence));
  print_r($parts);

//strpos()
  $searchParameter = "m";
  echo "</br>search for the character '$searchParameter' using strpos() </br>";

  $search = strpos($sentence,$searchParameter);

  echo "$search </br>"

?>
