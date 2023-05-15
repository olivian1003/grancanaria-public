<?php
$file = fopen("file.csv", "r");
$places = array();
while(!feof($file)){
    $places[] = explode(";",fgets($file));
}


?>