<?php
    
    require 'config.php';

    $con=mysqli_connect(Servidor,User,Pass,BD);
    
    if(!$con){
        echo "Conexion Fallida";
    }else{
        echo "Conexion Exitosa";
    }

?>