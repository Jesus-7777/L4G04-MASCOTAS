<?php
include('includer/db.php');
$nombre=$_POST["nombre"];
$raza=$_POST["raza"];
$edad=$_POST["edad"];

$sql="insert into mascotas(nombre,raza,edad) 
values('$nombre', '$raza', '$edad')";

if(DB::query($sql)){
    echo "Mascota registrada";

}else{
    echo "Nose puede registrar la mascota".$conexion->error;
}
header('Location: index.php'); 
?>