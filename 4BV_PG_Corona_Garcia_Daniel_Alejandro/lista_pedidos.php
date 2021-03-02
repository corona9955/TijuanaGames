<!DOCTYPE html>
<html lang="en">
<head>



  <title>Pedidos.php</title>
  <link rel="STYLESHEET" type="text/css" href="vendor/css/estilo3.css">
  <meta charset="utf-8">



	
	
</head>
<body>
<header>
<nav>

<ul class="nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="">Abrir</a>
					<ul>
					<li><a href="Quienes_somos.php">Quienes Somos</a></li>
						<li><a href="Vendidos.php">Los 10 más vendidos</a></li>
					</ul>
				</li>
				</li>
				<li><a href="">Contacto</a>
				<ul>
		         <li><a href="Formulario.php">Comprar</a></li>
				<li><a href="lista_pedidos.php">Lista de pedidos</a></li>
				</ul>
				
			</ul>

</header>








<br><br><br>




<?php
// Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada. 
$link = new PDO('mysql:host=localhost;dbname=discos', 'root', ''); // el campo vaciío es para la password. 

?>

<center><table class="tab"border="1" width="100%" height="200px">
  	
		<thead>
		<tr>
			<th>Folio</th>
			<th>Nombre del cliente</th>
			<th>Nombre del disco</th>
			<th>Cantidad</th>
			<th>Precio</th>
			<th>Total</th>
			
			
		</tr>
		</thead>
<?php foreach ($link->query('SELECT * from pedidos') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $row['folio'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['nombre_cliente'] ?></td>
	    <td><?php echo $row['nombre_discos'] ?></td>
    <td><?php echo $row['cantidad_discos'] ?></td>
	 <td><?php echo $row['precio'] ?></td>
	 <td><?php echo $row['total'] ?></td>
	
	
	
 </tr>
<?php
	}
?>
</table>
</center>
</body>
</html>