<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion mysql</title>
</head>
<body>

<?php
        $servidor = "localhost";
        $usuario = "root";
        $clave = "";
        $bd = "dental-an";
        $coneccion = mysqli_connect ($servidor, $usuario, $clave, $bd )
    ?>

<section id="formulario1">
        <form action="#" method="post">
            <h1>Registrate</h1>
            Nickname:</br>
            <input type="text" name="Nickname" id="Nickname" placeholder="Ingrese su nickname" required></br>

            Nombre:</br>
            <input type="text" name="Nombre" id="Nombre" placeholder="Ingrese su nombre" required></br>

            Apellido paterno:</br>
            <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" placeholder="Ingrese sus apellidos" required></br>

            Apellido materno:</br>
            <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" placeholder="Ingrese sus apellidos" required></br>
            
            Email:</br>
            <input type="email" name="Correo" id="" placeholder="Ingrese su email" required></br>

            Telefono:</br>
            <input type="number" name="telefono" id="telefono" placeholder="Ingrese su num. Telefonico" required/></br>

            Contraseña:</br>
            <input type="password" name="Contraseña" placeholder="Ingrese una contraseña" required>

            <hr>

            <input type="reset" name="reset" id="reset" value="borrar">
            <input type="submit" name="registro" value="registrate">

        </form>
    </section>

    <?php

    if(isset($_POST['registro'])){
        
        $Nickname = $_POST['Nickname'];
        $Nombre = $_POST['Nombre'];
        $ApellidoPaterno = $_POST['ApellidoPaterno'];
        $ApellidoMaterno = $_POST['ApellidoMaterno'];
        $Correo = $_POST['Correo'];
        $telefono = $_POST['telefono'];
        $Contraseña = $_POST['Contraseña'];
        
        
        $insertar = "INSERT INTO nuevos_usuarios Values ('$Nickname','$Nombre','$ApellidoPaterno','$ApellidoMaterno','$Correo','$telefono','$Contraseña','')";
        
        $coneccion = mysqli_query($coneccion,$insertar);
        
        $filas = mysqli_num_rows($resultado);
        }
    ?>

    <section id="formulario2">
        <form method="post">
            <h1>Inicia sesion</h1></br>
            Nickname:</br>
            <input type="text" name="Nombre" placeholder="Ingrese su nombre" required></br>

            Contraseña:</br>
            <input type="password" name="Contraseña" placeholder="Ingrese una contraseña" required></br>

            <hr>

            <input type="submit" name="enviar" value="Iniciar Sesion">
        </form>
    </section>


</body>
</html>

