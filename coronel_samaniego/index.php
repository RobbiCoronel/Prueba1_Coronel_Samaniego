<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/estilos.css" rel="stylesheet" type="text/css"/> 
</head>
<body>
<div class="container ind-centrar">
    <div class="card text-center">
      <div class="card-header"> 
      </div>
      <div class="card-body">
        <h5 class="card-title text-center subtitulo">Bienvenido a Mechdate </h5>
        <div class="container-fluid">
          <p class="card-text justificado">
          Bienvenido a esta pagina donde podras ingresar los datos del mantenimineto de tu vehiculo.
          Donde podras agregar los datos segun el mantimiento hecho a tu vehiculo.
          </p>
          <p>
            Al dar click en el boton de Instalacion se creara automaticamente la tabla en el repositiorio de MySql
            Y dentro del apartado Aplicacion se podra agrgar mas elementos a la tabla con un formulario
          </p>  
          <p>El codigo de esta pagina se podra encontrar en el siguinte link
          <a href="https://github.com/RobbiCoronel/Prueba1_Coronel_Samaniego">Link a GitHub</a>
          </p>
          
<button type="button"  id="tabla" class="btn btn-dark" onclick="tabla()">Instalación</button>
        <button type="button"  id="aplicacion" class="btn btn-dark" onclick="aplicacion()">Aplicación</button>
        
      </div>
    </div>
    </div>
  </div>
    
</body>

<script src="assets/js/ingreso.js"></script>

</html>

