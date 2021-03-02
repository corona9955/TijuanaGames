<?php 
   
    
?>






<?php
include("config.php");
$nombre_cliente=$_POST['nombre_cliente'];
$nombre_discos=$_POST['nombre_discos'];
$cantidad_discos=$_POST['cantidad_discos'];
$precio=$_POST['precio'];
$uno=$_POST['cantidad_discos'];
$cuatro=$precio=$_POST['precio'];
    $totales= $uno * $cuatro;

$sql = "INSERT INTO pedidos (nombre_cliente,nombre_discos,cantidad_discos,precio,total) VALUES ('$nombre_cliente','$nombre_discos','$cantidad_discos','$precio','$totales')";
$result=mysqli_query($db,$sql);
echo "Se insertaron los datos";



?>
