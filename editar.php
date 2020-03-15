<?php
include('includer/db.php');


if(isset($_REQUEST['id'])== false){
    echo "Es necesario un id";
      die;
}

// $id=$_GET['id'];
$id=$_REQUEST['id'];


$sql="SELECT * FROM mascotas WHERE id='$id'";
$mascota= DB::query($sql);
$mostrar= mysqli_fetch_array($mascota);
// $mascota=mysqli_fetch_object($mascota);//Un solo objeto
if(!$mascota){
   echo  "Mascota no existe";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h2>FORMULARIO DE REGISTRO</h2>
    <h1>Editar</h1>
   
   <form action="editar_mascota.php?id=<?php echo $mostrar['id']; ?>" method="post">

          <label for="" >Nombre</label> 
          <input type="text" name="nombre" required placeholder="nombre" value="<?php echo $mostrar['nombre'];?>">
          
          <label for="">Raza</label> 
          <input type="text" name="raza" required placeholder="raza"value="<?php echo $mostrar['raza'];?>">

          <label for="">Edad</label> 
          <input type="text" name="edad" required placeholder="edad"value="<?php echo $mostrar['edad'];?>">
          
          <input type="submit" value="Guardar">
  
  </form> 
<a href="imprimir.php"><input type="button"value="imprimir"></a>


</body>
</html>