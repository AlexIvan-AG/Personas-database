<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Famosos</title>
</head>
<body>
    <center>
        <tr>INDICE DE PERSONAS</tr>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Sexualidad</th>
                    <th>Pais</th>
                    <th>Personaje</th>
                    <th>Imagen</th>
                </tr>
            </thead>
            <!---------------Titulos------------------->
            <tbody>
                <?php
                    include("open.php");
                    $consulta = "SELECT * FROM famosos";
                    $resultado = $conexion->query($consulta);
                    while($row = $resultado->fetch_assoc()){
                    ?>
                            <tr>
                                <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['nombre']; ?> </td>
                                <td> <?php echo $row['apellido']; ?> </td>
                                <td> <?php echo $row['edad']; ?> </td>
                                <td> <?php echo $row['sexualidad']; ?> </td>
                                <td> <?php echo $row['pais']; ?> </td>
                                <td> <?php echo $row['personaje']; ?> </td>

                                <td> <img height="50px" src="data:image/jpg;base64,<?php echo base64_encode ($row ['Imagen'])?> "></td>
                            </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>
    </center>

</body>
</html>

