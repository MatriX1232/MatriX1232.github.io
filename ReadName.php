<?php

    $myFile = fopen("name", "r") or die("Could not open file");

    echo fread ($myFile, filesize("name.txt"));

    fclose($myFile);

?>