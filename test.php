
<?php
$file = fopen("file.csv", "r"); 
$places = array();
while(!feof($file)) {
    $places[] = explode(";",fgets($file));
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Descubriendo Gran Canaria</title>
</head>
<body>
	<header>
		<h1>Descubriendo Gran Canaria</h1>
	</header>
	<nav>
		<ul>
			<li><a href="nuevo.html">Nuevo lugar que visitar</a></li>
			<li><a href="listado.php">Lugares que no me puedo perder</a></li>
		</ul>
	</nav>
    <br>
	<main>
        <div class="containerListado">
            <h1>Lugares que no  me puedo perder</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>Visitado</th>
                        <th>Nombre del lugar</th>
                        <th>Descripción</th>
                        <th>Municipio</th>
                        <th>URL con más información</th>
                        <th>URL de Google Maps</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                       foreach ($places as $place) {
                            
                            echo "<tr>";
                            echo "<td><input type='checkbox' checked='checked'></td>";
                            echo "<td>$place[0]</td>";
                            echo "<td>$place[1]</td>";
                            echo "<td>$place[2]</td>";
                            echo "<td><a href='$place[3]'>$place[3]</a></td>";
                            echo "<td><a href='$place[4]'>$place[4]</a></td>";
                            echo "<td><img src='upload/".$place[5]."' width='200px'></td>";
                            echo "</tr>";

                        }

                    ?>
                
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>    