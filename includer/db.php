<?php

//datos de conexion

class DB{
static $host="localhost";
static $user="root";
static $password="";
static $db="p_mascotas";

public static function init(){
        echo "Iniciando base de datos";
}

public static function query($sql){
    $conexion=new mysqli(self::$host,self::$user,self::$password,self::$db);
    $result=$conexion->query($sql);
    $conexion->close();
    return $result;

}
}

?>