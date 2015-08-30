<?php
  $xml = $_POST['xml'];
  $file = fopen("file.xml","w");
    fwrite($file, $xml);
    fclose($file);
      echo "Saved the new story to file.xml";
?> 
