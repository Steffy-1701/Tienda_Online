<?php
$server="localhost";
$username="root";
$password="";
$database="examen";
$conexion=mysql_connect($server,$username,$password);

$cedula=$_GET["iden"];
$nombre=$_GET["id"];
$apellido=$_GET["id"];
$telefono=$_GET["id"];
$correo=$_GET["id"];





if($conexion)
{
    mysql_select_db($database,$conexion);
   $sql= "insert into cliente values('".$cedula."','".$nombre."','".$apellido."','".$telefono."','".$correo."')";
  $ejecucion=mysql_query($sql,$conexion);
  if($ejecucion)
  {
  echo "Datos insertados Correctamente";
  }
   
}

else{ 

    exit(" Error de conexion, Perdone la molestia");
}

?>