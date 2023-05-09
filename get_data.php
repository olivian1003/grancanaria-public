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

if($_POST["fname"] == ""){
    echo "<br>ERROR: the field is empty";
}
else{
    if((strlen($_POST["fname"])>20)){
        echo "<br>ERROR: the lenght is too big";
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
        echo "<br>ERROR: the lenght is too big";
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
        echo "<br>ERROR: the lenght is too big";
    }
    else{
    echo "<br>The Url of the place is ".$_POST["Url"];
}
}


if($_POST["maps"] == ""){
    echo "<br>ERROR: the field is empty";
}
else{
    if((strlen($_POST["maps"])>100)){
        echo "<br>ERROR: the lenght is too big";
    }
    else{
    echo "<br>The name of the place is ".$_POST["maps"];
}
}


if($_POST["filename"] == ""){
    echo "<br>ERROR: the field is empty";
}
else{
    if((strlen($_POST["filename"])>10)){
        echo "<br>ERROR: the format isnt good";
    }
    else{
    echo "<br>The file is: ".$_POST["filename"];
}
}







?>



</body>    






</html>

