<html>
<body>
<h1>data</h1>

<?php
$myfile = fopen("data.txt", "a") or die("Unable to open file!");
$txt = "";
fwrite($myfile, $txt);
$txt = "";
fwrite($myfile, $txt);
fwrite($myfile, $_POST["fname"]);
fwrite($myfile, $_POST["Description"]);<br>
fwrite($myfile, $_POST["Municipio"]);<br>
fwrite($myfile, $_POST["Url"]);<br>
fwrite($myfile, $_POST["maps"]);<br>
fwrite($myfile, $_POST["filename"]);<br>
if(fwrite($fp, $myfile))  {
    echo 'saved';
}

 fclose($myfile);


//echo "<br> The name of the place is ".$_POST["fname"];
//echo "<br> The description of the place is ".$_POST["Description"];
//echo "<br> The Municipio is ".$_POST["Municipio"];
//echo "<br> The official site of the place is ".$_POST["Url"];
//echo "<br> The location on google maps of the place is ".$_POST["maps"];
//echo "<br> Attached file: ".$_POST["filename"];
if($_POST["fname"] == ""){
    echo "<br>ERROR: the field is empty";
}
else{
    if((strlen($_POST["fname"])>20)){
        echo "<br>ERROR: no!no! what?";
    }
    else{
    echo "<br>The name of the place is ".$_POST["fname"];
}
}

if($_POST["Description"] == ""){
    echo "<br>ERROR: the field is empty";
}
else{
    if((strlen($_POST["Description"])>100)){
        echo "<br>ERROR: dont write too much, i dont like to read";
    }
    else{
    echo "<br>The Description of the place is ".$_POST["Description"];
}
}

if($_POST["Municipio"] == ""){
    echo "<br>ERROR: the field is empty";
}
else{
    if((strlen($_POST["Municipio"])>20)){
        echo "<br>ERROR: the lenght is too big";
    }
    else{
    echo "<br>The Municipio is ".$_POST["Municipio"];
}
}

if($_POST["Url"] == ""){
    echo "<br>ERROR: the field is empty";
}
else{
    if((strlen($_POST["Url"])>100)){
        echo "<br>ERROR: are you sure?isnt ur mom adress?";
    }
    else{
    echo "<br>The official site of the place is ".$_POST["Url"];
}
}


if($_POST["maps"] == ""){
    echo "<br>ERROR: the field is empty";
}
else{
    if((strlen($_POST["maps"])>100)){
        echo "<br>ERROR: use short url, you lil monkey";
    }
    else{
    echo "<br>The location on google maps of the place is ".$_POST["maps"];
}
}


if($_POST["filename"] == null){
    echo "<br>ERROR: the field is empty";
}
else{
    if((strlen($_POST["filename"])>100)){
        echo "<br>ERROR: the format isnt good, what are you trying to send me??";
    }
    else{
    echo "<br>The file is: ".$_POST["filename"];
}
}
?>

<footer>
<br><a href="nuevolugar.html">Reincercare</a>
<p>&copy; 2023 Olivian</p>
</footer>
</body>    
</html>

