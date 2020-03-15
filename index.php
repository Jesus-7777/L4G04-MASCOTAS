<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h2>FORMULARIO DE REGISTRO</h2>
  <form action="guardar.php" method="post">
  <div>
  <label for="">Nombre</label>
  <input type="text" name="nombre">
  
  <label for="">Raza</label>
  <input type="text" name="raza">

  <label for="">Edad</label>
  <input type="text" name="edad">

  </div>

  <br>
  <input type="submit" value="guardar">
  
  </form> 
<a href="imprimir.php"><input type="button"value="imprimir"></a>


</body>
</html>