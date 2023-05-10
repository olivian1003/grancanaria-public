<html>
<body>
<h1>data</h1>

<?php
              
if(isset($_POST['nuevolugar.html']))
{
$data=$_POST['nuevolugar.html'];

$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}




if(isset($_POST['submit'])){
$Name = "Nombre:".$_POST["fname"]."";
$Description = "The description of the place is".$_POST["Description"]."";
$Municipio = "Municipio:".$_POST["Municipio"]."";
$Url = "Url:".$_POST["Url"]."";
$maps = "maps:".$_POST["maps"]."";
$filename = "filename:".$_POST["filename"]."";

$newtextfile=fopen("newtextfile.txt", "a+");
fwrite($newtextfile, $Name);
fwrite($newtextfile, $Description);
fwrite($newtextfile, $Municipio);
fwrite($newtextfile, $Url);
fwrite($newtextfile, $maps);
fwrite($newtextfile, $filename);
fclose($fnewtextfile);
if(fwrite($fp, $newtextfile))  {
    echo 'saved';
}
}
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

