<?php
  $file = "./tut12-document.txt";
  $content = "This is line 3 \n";

  file_put_contents($file, $content, FILE_APPEND);
?>
