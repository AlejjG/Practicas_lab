<?php
include "conexion.php";
if(isset($_POST['bot'])){
    $Nombre_lugar=$conexion->real_escape_string($_POST['nombre_1']);
    $Desce=$conexion->real_escape_string($_POST['desce']);
    $Telefo=$conexion->real_escape_string($_POST['telefo']);
    $Facebook=$conexion->real_escape_string($_POST['face']);
    $Horario=$conexion->real_escape_string($_POST['horario']);
    
    if($Nombre_lugar == "" || $Desce == "" || $Telefo == "" ||  $Facebook == "" || $Horario == ""){
        $alerts = "Alguno de tus datos estan vacios";
    }
    else{
        $inserts = "
        INSERT INTO lugar(Nombre_Lugar,	Descripcion,	Telefono,	Facebook,	Horario) VALUES('$Nombre_lugar', '$Desce', '$Telefo',  '$Facebook', '$Horario')";
        $regists = $conexion->query($inserts);
        if($regists>0){
            echo"Registro exitoso";
        }
        else{
            echo"Error al registrar";
        }
    }
}

?>