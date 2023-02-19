<?php
session_start();

$manzanas1 = $_POST ['Manzanas'];
$harina1 = $_POST ['Harina'];  
$huevos1 = $_POST ['Huevos'];  
$leche1 = $_POST ['Leche'];  
$azucar1 = $_POST ['Azucar'];  
$mantequilla1 = $_POST ['Mantequilla'];


//<button onclick="location.href='index.php'">Llévame al principio</button> para volver principio

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div id="tituloguapo">Calculadora buena, bonita y barata </div>

    
        <br>
        <br> 
        
    <form method="post" action="generarinforme.php" style="margin: auto; width: 40%;" >

    <p class="letrita">Los datos han sido recogidos correctamente. 
        Para generar el informe con los datos haga click
        en "SIGUIENTE"</p>

		<input type="hidden" name="manzanas" value="<?php echo $_POST['Manzanas']?>" />
        <input type="hidden" name="harina" value="<?php echo $_POST['Harina']?>" />
        <input type="hidden" name="huevos" value="<?php echo $_POST['Huevos']?>" /> 
        <input type="hidden" name="leche" value="<?php echo $_POST['Leche']?>" />
        <input type="hidden" name="azucar" value="<?php echo $_POST['Azucar']?>" />
        <input type="hidden" name="mantequilla" value="<?php echo $_POST['Mantequilla']?>" />
        <input type="hidden" name="NTartas" value="<?php echo $_POST['NTartas']?>" />

		<input type="submit" value="Siguiente" />
        
	</form>


<br>
<br>

   </div>

</body>
</html>