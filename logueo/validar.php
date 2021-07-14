<?php
    
    include 'conexion.php';
    
    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $sql="SELECT * FROM usuarios WHERE username='".$user."' AND pass='".$pass."'";
    $consulta=mysqli_query($con,$sql);

    if($fila=mysqli_fetch_row($consulta)){
        session_start();
        $_SESSION['nombre']=$fila[1];
        $_SESSION['apellido']=$fila[2];
        $_SESSION['user']=$fila[3];
        $_SESSION['pass']=$fila[4];
        header("Location: contenido.php");
    }else{
        header("Location: ../index.html");
    }
?>