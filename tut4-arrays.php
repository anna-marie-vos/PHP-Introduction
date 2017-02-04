<?php
  $names = array('Jo','tom','jack');
  echo "this array includes $names[0], $names[1], $names[2]</br>";

  $ages = array('Jo'=>22, 'tom'=> 24, 'jack'=>55); //names assigned to array.
  echo "$names[0] is $ages[Jo],
    $names[1] is $ages[tom],
    $names[2] is $ages[jack]</br>";

  print_r($names);
  echo '</br>';
  print_r($ages);
?>
