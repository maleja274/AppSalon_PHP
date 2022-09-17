<?php

$db = mysqli_connect('localhost', 'root','loreto.2', 'appsalon');

if($db) {
    echo "error en la conexion";
}else{
    echo "conexion correcta";
}


