<?php

    $name = $_GET['name'];
    echo $name;

    $myFile = fopen("name.txt", "w") or die("Unable to open the file");

    fwrite($myFile, $name);
    fclose($myFile);

?>