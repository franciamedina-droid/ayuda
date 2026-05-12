<?php
include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Codigo = $_POST['Codigo'];
    $Nom_Producto = $_POST['Nom_Producto'];
    $Costo = $_POST['Costo'];
    $porcentaje = $_POST['Porc_Venta'];
    $precio = $_POST['Precio_Venta'];
    $Fecha = $_POST['Fecha'];
    $Stock = 10;
    $imagen = "images-removebg-preview.png";

    $mysql = "INSERT INTO sistem_fares (Codigo, Nom_Producto, Costo, Porc_Venta, Precio_Venta, imagen, Stock, Fecha)
    VALUES ('$Codigo', '$Nom_Producto', '$costo', '$porcentaje', '$precio', '$imagen', '$Stock', '$Fecha')";

    if (mysqli_query($conexion, $sql)) {
        echo "<script>alert('!GUARDADO CORRECTAMENTE!'); window.location.href='cproductos.php';</script>";
        }else{
            echo "Error de MySQL: " . myqli_error($conexion);
        }

}
?>