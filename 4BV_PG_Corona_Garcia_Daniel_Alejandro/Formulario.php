<html>
<head>
<link rel="STYLESHEET" type="text/css" href="vendor/css/estilo2.css">
<title>Formulario.php
</title>
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
				<li><a href="lista_pedidos.php">Consulta</a></li>
				</ul>
				
			</ul>
			

</header>
<center>
<br>
			<br>
			<br>
			
			
			
			
			
<form method="POST" action="agregar_pedido.php">
<br>
			<br>
			


		
			Nombre Cliente:
<input type="text"  name="nombre_cliente" placeholder="Nombre Cliente">
<br><br>

Nombre del disco:
<input type="radio"  name="nombre_discos" value="The White Album">The White Album
<input type="radio"  name="nombre_discos"  value="Come On Over">Come On Over
<input type="radio"  name="nombre_discos"  value="Rumours">Rumours
<input type="radio"  name="nombre_discos" value="The Beatles">The Beatles
<input type="radio"  name="nombre_discos"  value="Double Live">Double Live
<input type="radio"  name="nombre_discos"  value="Thriller">Thriller
<br><br>
Cantidad de discos:
<input type="text"  name="cantidad_discos">

<br>
<br>
Precio
<input type="text" name="precio" value="200">Pesos
<br>






<input type="submit" value="Enviar">
</form>
		</center>	
</body>
</html>