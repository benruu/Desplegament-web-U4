<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nou(MAIN)</title>
</head>
<body>
<h1>From MAIN</h1>
<?php

if(isset($_GET['nombre']) && isset($_GET['apellido'])) {

    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];

    echo "<h2>Hola, $nombre $apellido</h2>";
} else {

    echo "<h1>Error: Debes proporcionar un nombre y un apellido</h1>";
}
?>

</body>
</html>
