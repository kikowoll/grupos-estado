<?php
$usu = "qadl648";
$pas = "Granavenida2";
$hos = "qadl648.area07aa.org";
$dbs = "qadl648";

$conexion = mysqli_connect($hos, $usu, $pas, $dbs);

if(!$conexion) {
    echo 'Error en la conexion...';
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grupos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <h3><center>Relacion Grupos Estado</center></h3>
        <div class="conte-cabeza">
            <div class="cabeza">
                <p>Grupo</p>
            </div>
            <div class="cabeza">
                <p>Si contestado</p>
            </div>
            <div class="cabeza">
                <p>No Actualizado</p>
            </div>
            <div class="cabeza">
                <p>Grupo</p>
            </div>
            <div class="cabeza">
                <p>Si contestado</p>
            </div>
            <div class="cabeza">
                <p>No Actualizado</p>
            </div>
        </div>
        <table id="tabla">
            <tbody">
                <tr>
            <?php
                $consulta = $conexion->query("SELECT * FROM area7 ORDER BY grupo ASC");
                while($fila = $consulta->fetch_array()) {
                    echo '<td>';
                    echo '<div class="uno">'. $fila["grupo"] .'</div>';
                    echo '<div class="dos"><input type="checkbox"></div>';
                    echo '<div class="tres"><input type="checkbox"></div>';
                    echo '</td>';
                }
            ?>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>