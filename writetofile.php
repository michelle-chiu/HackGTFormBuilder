<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    foreach($_GET as $key=>$val) {
    $txt = $val . ", ";
    fwrite($myfile, $txt);
    }
    fclose($myfile);
?>