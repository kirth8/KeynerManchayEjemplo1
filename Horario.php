<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario</title>
    <link rel="stylesheet" href="./Css/Horario.css">
</head>
<body>
    <h1 id="h1Horario">Horario del 5 "B"</h1>
    <button id="hrr" onclick="cargarHorario()">Aqui PA</button>
    <table>
        <tr>
            <th>Dia</th>
            <th>Materias</th>
            <th>Profesores</th>
        </tr>
        
        <?php
        $json_data = file_get_contents("./Json/HorarioPrueba.json");
        $Horario = json_decode($json_data, true);
            if (count($Horario) != 0) {
                foreach ($Horario as $Hor) {
                    ?>
                      <tr>
                        <td> <?php echo $Hor['Dia'] ?> </td>
                        <td> <?php echo $Hor['Materia1'], '<br>';
                                    echo $Hor['Materia2'], '<br>';
                                    echo $Hor['Materia3'], '<br>'
                        ?> </td>
                        <td> <?php echo $Hor['Profesor1'], '<br>';
                                    echo $Hor['Profesor2'], '<br>';
                                    echo $Hor['Profesor3'], '<br>'
                         ?></td>
                        </tr>
                    <?php
                }
            }   
        ?>
    </table>
    
</body>
</html>