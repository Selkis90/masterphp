<?php
/* varables para realizar la conexion */
$servidor = 'localhost';
$usuario = 'linux';
$password = '';
$bd = 'PROYECTO';

/* funcion para realizar la conexion a mysql */
$conexion =mysqli_connect($servidor, $usuario, $password, $bd);

/* comprobar si la conexion es correcta */
if (mysqli_connect_errno()) {
    echo 'la conexion a la base de datos a fallado' .mysqli_connect_error();
}else{
    echo 'conexion realizada correctamete';
}

/* consulta para configurar la codificacion de caracteres */
mysqli_query($conexion, "SET NAMES 'utf8' ");

/* consulta SELELCT desde php */
$query = mysqli_query($conexion, 'SELECT * FROM USUARIOS');
$notas = mysqli_fetch_assoc($query);


