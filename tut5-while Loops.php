<?php
$x =0;
while($x<10){
  echo "While loop: the number is $x </br>";
  $x++;
}

$names = array('chris', 'tom', 'bob');

foreach($names as $person){
  echo "This person is $person </br>";
}
?>
