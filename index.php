<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>CRUD</title>
  <link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>

  <?php

  include("conexion.php");

  /*
  
  $conexion = $base->query("SELECT * FROM datos_usuarios");

  $regristro = $conexion->fetchAll(PDO::FETCH_OBJ);
  */

  $regristros = $base->query("SELECT * FROM datos_usuarios")->fetchAll(PDO::FETCH_OBJ); //almaceno en array (fetchAll) a todas las personas que hay en mi base

  ?>


  <h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

  <table width="50%" border="0" align="center">
    <tr>
      <td class="primera_fila">id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr>

    <?php

    foreach ($regristros as $persona) : ?>
      <!-- Del objeto persona, traeme cada proiedad del registro (fetchAll)-->

      <tr>
        <td><?php echo $persona->id ?> </td> <!-- Del fetchAll traeme el Id e imprimelo con el foreach ($persona)-->
        <td><?php echo $persona->Nombre ?></td>
        <td><?php echo $persona->Apellido ?></td>
        <td> <?php echo $persona->Direccion ?></td>
        <td class="bot"><a href="delete.php?id=<?php echo $persona->id ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
        
        <td class='bot'><a href="editar.php? id= <?php echo $persona->id?> & nom= <?php echo $persona->Nombre?> & apelli= <?php echo $persona->Apellido?> & dirplace= <?php echo $persona->Direccion?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
      </tr>

    <?php
    endforeach;

    ?>


    <tr>
      <td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td>
    </tr>
  </table>

  <p>&nbsp;</p>
</body>

</html>

