<?php
$server="localhost";
$username="root";
$password="";
$database="examen";
$conexion=mysql_connect($server,$username,$password);

$cedula=$_GET["id"];
$nombre=$_GET["id"];
$precio=$_GET["id"];
$fecha=$_GET["id"];
$cantidad=$_GET["id"];





if($conexion)
{
    mysql_select_db($database,$conexion);
   $sql= "insert into compras values('".$cedula."','".$nombre."','".$precio."','".$fecha."','".$cantidad."')";
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