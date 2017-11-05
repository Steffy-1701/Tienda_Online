<?php
$server="localhost";
$username="root";
$password="";
$database="examen";
$conexion=mysql_connect($server,$username,$password);

$nombre=$_GET["id"];
$precio=$_GET["id"];
$referencia=$_GET["id"];
$marca=$_GET["id"];
$cantidad=$_GET["id"];





if($conexion)
{
    mysql_select_db($database,$conexion);
   $sql= "insert into productos values('".$nombre."','".$precio."','".$referencia."','".$marca."','".$cantidad."')";
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