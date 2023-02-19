<?php

//Brandon 2ASIRN IMW Actividad Práctica 4 (UT2) – Programación Web “Calculadora de Tartas”

   //Precios base

   $manzanas1 = $_REQUEST ['manzanas'];
   $harina1 = $_REQUEST ['harina'];
   $huevos1 = $_REQUEST ['huevos'];
   $leche1 = $_REQUEST ['leche'];
   $azucar1 = $_REQUEST ['azucar'];
   $mantequilla1 = $_REQUEST ['mantequilla'];
   $tartas = $_REQUEST ['NTartas'];
   

//Precios individual y Cálculos

$UniHuevo = (2 * $huevos1 ); 
$UniManza = (1 * $manzanas1 );
$UniHarina = (0.180 * $harina1 );
$UniLeche = (0.175 * $leche1 );
$UniAzucar = (0.100 * $azucar1 );
$UniMantequilla = (0.100 * $mantequilla1 );
$UniResultado = $UniHuevo + $UniManza + $UniHarina + $UniLeche + $UniAzucar + $UniMantequilla;
$UniVenta = $UniResultado * 1.6;
$UniBeneficio = $UniVenta - $UniResultado;

//Precios múltiple y Cálculos

$Multimanza = (1 * $UniManza * $tartas );
$Multihuevo = (1 * $UniHuevo * $tartas );
$Multiharina = (1 * $UniHarina * $tartas );
$Multileche = (1 * $UniLeche * $tartas );
$Multiazucar = (1 * $UniAzucar * $tartas );
$Multimantequilla = (1 * $UniMantequilla * $tartas );

$MultiResult = $Multihuevo + $Multimanza + $Multiharina + $Multileche + $Multiazucar + $Multimantequilla;
$Multiventa = $MultiResult * 1.6;
$Multibenef = $Multiventa - $MultiResult;
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de costes</title>
   <link rel="stylesheet" href="./css/style.css">
</head>
<body>
                <div id="tituloguapo">LA TARTA DE MANZANA </div>
                        <p id="tituloguapo">La tarta más buena, bonita y barata</p>
<table>
    <caption>Precio Ingredientes</caption>
    <tr>
       
        <th>Manzanas</th>
        <th>Harina</th>
        <th>Huevos</th>
        <th>Leche</th>
        <th>Azucar</th>
        <th>Mantequilla</th>
    </tr>

 <?php
 echo
    "<tr>
        <td> {$manzanas1}€/Kg </td>
        <td> {$harina1}€/Kg </td>
        <td> {$huevos1}€/u </td>
        <td> {$leche1}€/Kg </td>
        <td> {$azucar1}€/Kg </td>
        <td> {$mantequilla1}€/Kg </td>
    </tr>"

?>

</table>
<br/>
    <table>
        <caption>Tabla de Gastos, Precios y Beneficios</caption>
        <tr>
            <th>Nº Tartas</th>
            <th>Manzanas</th>
            <th>Harina</th>
            <th>Huevos</th>
            <th>Leche</th>
            <th>Azucar</th>
            <th>Mantequilla</th>
            <th>Gasto Total</th>
            <th>Precio Venta</th>
            <th>Beneficio</th>
       </tr>
            <td>1</td>
            <td><?php echo number_format($UniManza, 2, ".");?>€</td>
            <td><?php echo number_format($UniHarina, 2, ".");?>€</td>
            <td><?php echo number_format($UniHuevo, 2, ".");?>€</td>
            <td><?php echo number_format($UniLeche, 2, ".");?>€</td>
            <td><?php echo number_format($UniAzucar, 2, ".");?>€</td>
            <td><?php echo number_format($UniMantequilla, 2, ".");?>€</td>
            <td><?php echo number_format($UniResultado, 2, ".");?>€</td>
            <td><?php echo number_format($UniVenta, 2, ".");?>€</td>
            <td><?php echo number_format($UniBeneficio, 2, ".");?>€</td>
        </tr>

        </tr>
            <td><?php echo $tartas ?>u</td>
            <td><?php echo number_format($Multimanza, 2, ".");?>€</td>
            <td><?php echo number_format($Multiharina, 2, ".");?>€</td>
            <td><?php echo number_format($Multihuevo, 2, ".");?>€</td>
            <td><?php echo number_format($Multileche, 2, ".");?>€</td>
            <td><?php echo number_format($Multiazucar, 2, ".");?>€</td>
            <td><?php echo number_format($Multimantequilla, 2, ".");?>€</td>
            <td><?php echo number_format($MultiResult, 2, ".");?>€</td>
            <td><?php echo number_format($Multiventa, 2, ".");?>€</td>
            <td><?php echo number_format($Multibenef, 2, ".");?>€</td>
        </tr>
    
    </table>

    <center> <button onclick="location.href='index.php'" style="margin: auto; width: 220px; height: 60px; font-weight: bold;">¡Recalcular!</button> </center>
    
</body>
</html>