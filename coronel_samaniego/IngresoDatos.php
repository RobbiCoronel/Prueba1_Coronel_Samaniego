<!DOCTYPE html>

<html>

<head>
  <title>Hello!</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/estilos.css" rel="stylesheet" type="text/css"/> 

</head>

<body>

<?php

$fecha= $_GET["fecha"] ;

$cosM = $_GET["cosM"] ;
$cosR = $_GET["cosR"] ;
$kilo = $_GET["kilo"] ;
$prev = $_GET["prev"];
$corr = $_GET["corr"];

$mant;
$cosT = $cosM + $cosR;

if($prev == "prev")
{
    $mant = "Preventivo";
}
else if($corr == "corr"){
   $mant = "Correctivo";
 }




  /*En este código que reutilizamos de buscador.php eliminamos la función que
 encapsulaba todo el código
  y eliminamos el while que utilizábamos para iterar por todos los 
registros.*/


$db_host= "localhost";
$db_usuario= "prueba";
$db_contra = "c8u$7ShG";
$db_nombre= "db_mantenimiento";

$connexion = mysqli_connect($db_host,$db_usuario,$db_contra);

if( mysqli_connect_errno())
  {

      echo "Hubo un problema con la base de datos error al conectar";

      exit() ;
  }

  mysqli_select_db($connexion,$db_nombre) or die ("No se encuentra la Base de 
 datos");

  mysqli_set_charset($connexion,"utf8");


  
      $instruccion_SQL = "INSERT INTO cs_vehiculos (FECHA,KILOMETRAJE, 
    MANTENIMIENTO,COSTO_TOTAL)
                             VALUES ('$fecha','$kilo','$mant','$cosT')";

    

   $resultado = mysqli_query($connexion,$instruccion_SQL);

   if($resultado == FALSE)
   {
       echo "error en la consulta";
   }  else
   {
       echo "Ingresado Coreectamente revise la tabla";?>
       <img src="assets/imagenes/visto.png" height="40"> 
       <?php
   }



            mysqli_close($connexion);




?>

</body>
<br><a href="aplicacion.php">Regresar a aplicacion</a> 
</html>