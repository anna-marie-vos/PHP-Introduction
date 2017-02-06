<?php
  $number = $_POST['number'];
  $string = $_POST['string'];

  if($number === '16' and $string === 'hello'){
    echo "you guessed it correctly,
      the number is 16 and the string is hello";
  } else{
    echo "try again";
  }
?>
