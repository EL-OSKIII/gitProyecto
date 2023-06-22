<?php
include "coneccion_db.php";

if(isset($_POST['boton'])){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"];
    $nacimiento = $_POST["fecha"];
    $DNI = $_POST["DNI"];
    $telefono = $_POST["numero"];
    $direccion = $_POST["direccion"];

    $consulta = "INSERT INTO alumnos (nombre, apellido, edad, fecha_nacimiento, dni, telefono, direccion)
    VALUES ('$nombre', '$apellido', '$edad', '$nacimiento', '$DNI', '$telefono', '$direccion')";

    if ($conn->query($consulta) === TRUE)
{

} else {
    echo "tu papa";
}
header("location: inscripcion.php");
}
?>
