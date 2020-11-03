<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if (isset($usuario)){
    ?>
    <p>Usuario almacenado:  <?= $usuario ?></p>
    <?php
}else{
    ?>
    <p>No hay ningún usuario almacenado</p>
    <?php
}
?>
<p>Introduce el texto que deseas alamacenar: </p>
<input type="text" id="nombreusuario"><button type="submit" id="guardar">Guardar</button>
<a href=""
</body>
</html>

