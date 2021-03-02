
<html>
<head>
  <meta charset="UTF-8">
<link rel="STYLESHEET" type="text/css" href="vendor/css/estilo2.css">
<link rel="stylesheet" href="vendor/css/fonts.css" type="text/css">
<link rel="STYLESHEET" type="text/css" href="vendor/css/Animate.css">
<title> Home.php
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
<br><br><br><br>

<center>
<h1 class="animated bounce"><em>Bienvenido<h1 class=""></em></center> 
<br>
<div class="col-md-6">
<div class="main">
<div class="slides">
<img src="img/a.jpg">
<img src="img/b.jpg">
<img src="img/c.jpg">
</div>
</div>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="vendor/js/jquery.slides.js"></script>
<script>
 
	$(function(){
  $(".slides").slidesjs({
  play: {
      active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "fade",
        // [string] Can be either "slide" or "fade".
      interval: 4000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 3500
        // [number] restart delay on inactive slideshow
    }
  });
});
 
	</script>
	
	
	
<table border="5px"class="Text1"><td>
<em>
¡La vida sin musica no es vida!<br>
</em><br>

</td>
</table>
</div>
</center>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center><a href="https://twitter.com"><img src="img\paloma.png"></a>
<a href="https://es-la.facebook.com/"><img src="img\face.jpg"></a>
<a href="https://www.instagram.com/"><img src="img\instagram.png"></a>
<a href="https://www.google.com.mx/"><img src="img\g.png"></a>
<a href="https://www.youtube.com/"><img src="img\snap.jpg"></a></br></center>
</body>
</html>