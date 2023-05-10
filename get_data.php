<html>
<body>
<h1>data</h1>

<?php
//echo "<br> The name of the place is ".$_POST["fname"];
//echo "<br> The description of the place is ".$_POST["Description"];
//echo "<br> The Municipio is ".$_POST["Municipio"];
//echo "<br> The official site of the place is ".$_POST["Url"];
//echo "<br> The location on google maps of the place is ".$_POST["maps"];
//echo "<br> Attached file: ".$_POST["filename"];

$error = false;

if($_POST["fname"] == ""){
    echo "<br>ERROR: the field is empty";
    $error = true;
}
else{

    if((strlen($_POST["fname"])>20))
    {
        echo "<br>ERROR: no!no! what?";
        $error = true;
    }
    

}

if($_POST["Description"] == ""){
    echo "<br>ERROR: the field is empty";
    $error = true;
}
else{
    if((strlen($_POST["Description"])>100)){
        echo "<br>ERROR: dont write too much, i dont like to read";
    }
}

if($_POST["Municipio"] == ""){
    echo "<br>ERROR: the field is empty";
}
else{
    if((strlen($_POST["Municipio"])>20)){
        echo "<br>ERROR: the lenght is too big";
    }
   
}

if($_POST["Url"] == ""){
    echo "<br>ERROR: the field is empty";
}
else{
    if((strlen($_POST["Url"])>100)){
        echo "<br>ERROR: are you sure?isnt ur adress";
    }
    
}


if($_POST["maps"] == ""){
    echo "<br>ERROR: the field is empty";
}
else{
    if((strlen($_POST["maps"])>100)){
        echo "<br>ERROR: use short url, you lil monkey";
    }
    
}


if($_POST["filename"] == null){
    echo "<br>ERROR: the field is empty";
}
else{
    if((strlen($_POST["filename"])>100)){
        echo "<br>ERROR: the format isnt good, what are you trying to send me??";
    }
     
}

if ($error == false) {
    echo "<br>The data is correct";
    echo "<br>The name of the place is ".$_POST["fname"];
    echo "<br>The description of the place is ".$_POST["Description"];
    echo "<br>The municipoi is ".$_POST["Municipio"];
    echo "<br>The official site of the place is ".$_POST["Url"];
    echo "<br>The location on google maps of the place is ".$_POST["maps"];
    echo "<br>Attached file: ".$_POST["filename"];

    $myfile = fopen("file.csv", "a+") or die("Unable to open file!");
    $txt = "";
    fwrite($myfile, $txt);
    $txt = "";
    fwrite($myfile, $txt);
    fwrite($myfile, $_POST["fname"]);
    fwrite($myfile,";");
    fwrite($myfile, $_POST["Description"]);
    fwrite($myfile,";");
    fwrite($myfile, $_POST["Municipio"]);
    fwrite($myfile,";");
    fwrite($myfile, $_POST["Url"]);
    fwrite($myfile,";");
    fwrite($myfile, $_POST["maps"]);
    fwrite($myfile,";");
    fwrite($myfile, $_POST["filename"]);
    fwrite($myfile,"; \n");
    fclose($myfile);
}
?>




<footer>
<br><a href="nuevolugar.html">Reincercare</a>
<p>&copy; 2023 Olivian</p>
</footer>
</body>    
</html>

