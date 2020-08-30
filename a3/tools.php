<?php
session_start();

function read() {
  $correspondence = [];
  if (($file= fopen("http://titan.csit.rmit.edu.au/~e54061/wp/letters-home.txt", "r")) !== false) {
    if (($row_data = fgetcsv($file, 1000, "\t")) !== false) { 
      $keys = $row_data; // save as keys
    }
    if (count($keys) == count($row_data)){
        $correspondence[] = array_combine($keys, $row_data);
    }
    fclose($file);
}
echo "<pre>";
  var_export($correspondence); 
echo "</pre>";
}

?>