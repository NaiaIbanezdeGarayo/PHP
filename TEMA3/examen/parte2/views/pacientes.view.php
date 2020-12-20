<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>Usuario registrado: <?php echo $_SESSION["usuario"] ?></p>
<h1>Añadir nuevo</h1>
<form action="index.php?accion=nuevo" method="post">
    Descripción <input type="text" name="codPaciente" placeholder="Código de paciente">
    <input type="text" name="nomPaciente" placeholder="Nombre">
    <input type="text" name="apePaciente" placeholder="Apellidos">
    <input type="submit" name="btAnadirPaciente">
</form>
<h1>Listado de pacientes</h1>
<p>Si el valor entre paréntesis es 0, significa que el paciente no está atendido.</p>
<table>
    <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>¿Atendido?</th>
        <th>Atender</th>
    </tr>
    <?php foreach ($pacientes as $paciente){ ?>
        <tr>
            <td><?php echo $paciente -> codigo ?></td>
            <td><?php echo $paciente -> nombre ?></td>
            <td><?php echo $paciente -> apellidos ?></td>
            <td><?php echo $paciente -> atendido ?></td>
            <td><a href="index.php?accion=marcarAtendido&codPaciente=<?= $paciente -> codigo?>">Marcar atendido</a></td>
        </tr>
        <?php
    }
    ?>
</table>
<a href="index.php?accion=borrarTodos">Borrar todos los pacientes</a>
<a href="index.php?accion=cerrarSesion">Cerrar sesión</a>
</body>
</html>