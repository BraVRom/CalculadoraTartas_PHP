<?php

//Brandon 2ASIRN IMW Actividad Práctica 4 (UT2) – Programación Web “Calculadora de Tartas”

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario tartitas</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<style>
    form {
        width: 500px;
        margin-left: auto;
        margin-right: auto;
    }

    form label {
        display: inline-block;
        width: 100px;
    }

    h2 {text-align: center;}
</style>


<body>
<div id="tituloguapo">Calculadora buena, bonita y barata </div>
<div id="table">
<form name="precios" method="POST" style="margin: auto; width: 250px;" action="recibirdatos.php">

   <p>Precio de Manzanas (Kg)
   <input type="number" name="Manzanas" required="required" min="0.10" placeholder="0.00" step="0.01" /> <br>
   <br>
   Precio de Harina (Kg)
   <input type="number" name="Harina" required="required" min="0.10" placeholder="0.00" step="0.01" /> <br>
   <br>
   Precio por Huevo
   <input type="number" name="Huevos" required="required" min="0.10" placeholder="0.00" step="0.01" /> <br>
   <br>
   Precio de Leche (Litros)
   <input type="number" name="Leche" required="required" min="0.10" placeholder="0.00" step="0.01" /> <br>
   <br>
   Precio de Azucar (Kg)
   <input type="number" name="Azucar" required="required" min="0.10" placeholder="0.00" step="0.01" /> <br>
   <br>
   Precio de Mantequilla (Kg)
   <input type="number" name="Mantequilla" required="required" min="0.10" placeholder="0.00" step="0.01" /> <br>
   <br> 
   Número de tartas
   <input type="number" name="NTartas" required="required" min="1" placeholder="0" />
   
   <input type="reset" value="Borrar" class="borrar"/>
   <br>
   <input type="submit" name="enviar" value="Enviar" style="margin: auto; width: 220px;"/>
</form>
</div>

</body>
</html>