
<body>
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/estilos.css" rel="stylesheet" type="text/css"/> 
<?php
$servidor= "localhost";
$usuario= "prueba";
$password = "c8u$7ShG";
$nombreBD= "db_mantenimiento";

try {
    $conn = new PDO("mysql:host=$servidor;dbname=$nombreBD", $usuario, $password);
    // Establecer el modo de error PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

    
     // sql to create table
     $sql = "CREATE TABLE cs_vehiculos (
        FECHA DATE,
        KILOMETRAJE INT(10) NOT NULL,
        MANTENIMIENTO VARCHAR(30) NOT NULL,
        COSTO_TOTAL FLOAT(8, 2) NOT NULL
        )";
 
        // use exec() because no results are returned
        $conn->exec($sql);?>
        <div class="container ind-centrar">
        <div class="card">
         <div class="card-body">       

        <?php echo "<h2 class='text-center'>Instalacion completada exitosamente 
                        <img src='assets/imagenes/visto.png' height='40'>
                </h2>";?>
        <a href="index.php">Regresar a la Pagina inicial</a> 
        
        </div>
        </div>
        </div>
          
        <?php
} catch(PDOException $e) {
        ?>
        <div class="container ind-centrar">
        <div class="card">
        <div class="card-body">
        <?php echo "<h2 class='text-center'>Ya existe la tabla</h2>";?>
        
        <a href="index.php">Regresar a la Pagina inicial</a>  
        </div>
        </div>
        </div>
        <?php
      }
      
      $conn = null;

        ?>



 
</body>
