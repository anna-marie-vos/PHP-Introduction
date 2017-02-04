<?php
//get a value from the browser
//type this in the browser: ?name=Jo&age=15
  $name = $_GET['name'];
  $age = $_GET['age'];
  echo "Hello $name, you are $age years old";
?>
