<?php
print("<h1 align='center'> Listado de Estudiantes del 5B</h1>");
echo('<table align="center" border =1;" >');
echo '<tr>';
echo '<th>Cedula</th>';
echo '<th>Primer Nombre</th>';
echo '<th>Segundo Nombre</th>';
echo '<th>Primer Apellido</th>';
echo '<th>Segundo Apellido</th>';
echo '<th>Celular</th>';
echo '<th>Carrera</th>';
echo '</tr>';

if (file_exists('./XML/Estudiantes.xml')) {
    $xml = simplexml_load_file('./XML/Estudiantes.xml');
    foreach ($xml->estudiante as $key => $estud) {
        echo '<tr>';
        echo '<td>' . $estud->cedula . '</td>';
        echo '<td>' . $estud->nombreUno . '</td>';
        echo '<td>' . $estud->nombreDos . '</td>';
        echo '<td>' . $estud->apellidoUno . '</td>';
        echo '<td>' . $estud->apellidoDos . '</td>';        
        echo '<td>' . $estud->celular . '</td>';
        echo '<td>' . $estud->carrera . '</td>';
    }
}
else {
    exit('No se puede abrir XML');
}
echo '</table>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/Estudiantes.css">
    <title>Pagina Estudiantes</title>
</head>
<body>
    
</body>
</html>