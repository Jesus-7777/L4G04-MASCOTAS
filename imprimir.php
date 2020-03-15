<?php
   include('includer/db.php');
   $sql ="select * from mascotas";
   $result = DB::query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imprimir</title>
</head>
<body>
    <div class="Tabla">
    <h1>LISTA DE MASCOTAS</h1>
     <div>

  <table border="">
    <tr  >
       <br>
        <thead>
         <th> Id</th>
         <th> Nombre </th>
         <th> Raza </th>
         <th> Edad </th>
         <th> Acciones </th>
        </thead>
       
    </tr>

    <?php


        while($mostrar= mysqli_fetch_array($result)){
          ?>

        <tr>
           
           <td><?php echo $mostrar['id'] ?></td>
           <td><?php echo $mostrar['nombre'] ?></td>
           <td><?php echo $mostrar['raza'] ?></td>
           <td><?php echo $mostrar['edad'] ?></td>
           <td>
           <a href="editar.php?id=<?=$mostrar['id']?>">Editar</a>
           <a href="eliminar.php?id=<?php echo $mostrar['id'] ?>">Eliminar</a>
           </td>
        </tr>

        <?php
        }
    ?>
  </table>
  </div>
<br>
    <div class="log">
    <a href="index.php"><input type="button" value="Registrar"></a>
    </div>

</div>
    
</body>
</html>