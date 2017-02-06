<?php
  // header('Content-Type: text/plain');

  echo "<h4>This is the file were reading
    tut11-textDocument.txt</h4>";

  $file = "./tut11-textDocument.txt";
  $document = file_get_contents($file);

  echo $document;

  echo "<h4> Or by using the explode method </h4>";

  $lines = explode("\n",$document);

  foreach ($lines as $newLine) {
    echo $newLine .'</br>';
  }

?>
