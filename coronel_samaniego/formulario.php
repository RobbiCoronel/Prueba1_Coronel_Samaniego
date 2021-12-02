<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<h3 class="text-center">Registro de los Mantenimientos</h3>

<div class="container">
          
<form action="IngresoDatos.php" name="formulario1" method="get">

        <fieldset>

        <div class="mb-3">
            <label for="recipient-name" class="col-form-label" >Fecha:</label>
            <input type="date" class="form-control" id="recipient-name" name="fecha">
        </div>

        <div class="mb-3">
            <label for="message-text" class="col-form-label">Nombre del Taller:</label>
            <input type="text" class="form-control" id="message-text" name="nomTaller">
                    </div>
                    <label for="message-text" class="col-form-label">Costo Mantenimiento:</label><br>
                    <div class="input-group mb-3">
                        <label class="input-group-text">$</label>
                        <input type="float" class="form-control" name="cosM" aria-label="Amount (to the nearest dollar)">
                    </div>
                    <label for="message-text" class="col-form-label">Costo Repuestos:</label><br>
                    <div class="input-group mb-3">
                        <label class="input-group-text">$</label>
                        <input type="float" class="form-control" name="cosR" aria-label="Amount (to the nearest dollar)">
                    </div>
                    <div class="mb-3">
                      <label for="message-text" class="col-form-label">Kilometraje:</label>
                      <input type="number" class="form-control" id="message-text" name="kilo">
                    </div>
                    <label for="message-text" class="col-form-label">Tipo de Mantenimiento:</label><br>
                    <div class="form-check">
                    <label><input  type="radio" name="prev" id="flexRadioDefault1" 
                    value="prev">Preventivo</label>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
                        <label class="form-check-label" for="flexCheckDisabled">
                            Cambio de Aceite
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
                        <label class="form-check-label" for="flexCheckDisabled">
                            Frenos
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
                        <label class="form-check-label" for="flexCheckDisabled">
                            Llantas
                        </label>
                    </div>
                    </div>
                    <div class="form-check">
                    <input  type="radio" name="corr" id="flexRadioDefault2"  value="corr">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Correctivo
                    </label>
                    </div>
                    <br><div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Observaciones</label>
                      </div>
        </fieldset>  

        <div class="col-12">
        <input type="submit" class="btn btn-primary" value="Enviar"></input>
        </div>

 </form>            
     

    </div>


</body>

<script src="assets/js/validador.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/ingreso.js"></script>
</html>
