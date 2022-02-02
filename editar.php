<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Documento sin título</title>
  <link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

  <h1>ACTUALIZAR</h1>

  <?php

  include('conexion.php');

  if (!isset($_POST['actualizar'])) {
    $id = $_GET['id'];
    $nombre = $_GET['nom'];
    $direccion = $_GET['dir'];
    $apellido = $_GET['ape'];
  } else {

    $Id = $_POST['id'];
    $nombre = $_POST['nom'];
    $direccion = $_POST['dirplace'];
    $apellido = $_POST['apelli'];

    $sql = "UPDATE DATOS_USUARIOS SET Nombre=miNom, Apellido=:miApe, Direccion=:miDir WHERE id=:miId";
    $resultado = $base->prepare($sql);
    $resultado -> execute(array(':miId'=>$Id, ':miNom'=>$nombre, 'mi', ':miApe'=>$direccion, ':miDir'=>$direccion));

    header('location: index.php');
  }
  ?>

  <p>

  </p>
  <p>&nbsp;</p>
  <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table width="25%" border="0" align="center">
      <tr>
        <td></td>
        <td><label for="id"></label>
          <input type="hidden" name="id" id="id"><?php echo $id ?>
        </td>
      </tr>
      <tr>
        <td>Nombre</td>
        <td><label for="nom"></label>
          <input type="text" name="nom" id="nom" value="<?php echo $nombre ?>">
        </td>
      </tr>
      <tr>
        <td>Apellido</td>
        <td><label for="ape"></label>
          <input type="text" name="ape" id="ape" value="<?php echo $apellido ?>">
        </td>
      </tr>
      <tr>
        <td>Dirección</td>
        <td><label for="dir"></label>
          <input type="text" name="dir" id="dir" value="<?php echo $direccion ?>">
        </td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
      </tr>
    </table>
  </form>
  <p>&nbsp;</p>
</body>

</html>