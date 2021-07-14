<?php

    include 'conexion.php';

        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $correo=$_POST['correo'];

        $sql="INSERT INTO usuarios VALUES(NULL,'$nombre','$apellido','$user','$pass','$correo')";
        $consulta=mysqli_query($con,$sql);

        header("Location: ../index.html");
?>