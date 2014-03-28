<?php
	session_start();
?>
<!DOCTYPE html PUBLIC " HTML 5.01//EN">
<html>
<head>
  <title>Pillos</title>
</head>
  
  
<body>
	<header><img src="logo2.png"  /></header>
<aside>
<?php
    $nom="root";
    $pass="admin";

	if(isset($_SESSION['nombre'])){
		echo "<p>Usuario Conectado: " . $_SESSION['nombre'] . "";
		echo "<p><a href='cerrarsesion.php'>Cerrar Sesion</a></p>";
	}else{
?>


	<form action="session2.php"  method="POST">
	Nombre:<input type="text"  placeholder="Tu Nombre!" name="nombre" required/>
	Contrasena:<input type="password" name="pass" required/>
	<input type="submit" value="Iniciar Sesion" />
	
           <a href="registro.php"><h3>Registrarse</h3></a>

	</form>
	</aside>
<?php
 }
 ?>
 
<ul class="navbar">
  <li><a href="pagina1.php">Pagina principal</a>
  <li><a href="cerosyunos.html">Ceros y Unos</a>
  <li><a href="chicas.html">Chicas</a>
  <li><a href="gamer.html">Gamer</a>
  <li><a href="sexo.html">No Todo es Sexo</a>
</ul>

<h1>Hello World!!!</h1>

<p>Bienvenido a mi primera pagina con estilo.

<p>No tiene imagenes, pero tiene estilo.
Tambien tiene enlaces, aunque no te lleven a
ningun sitio.

<p>Deberia haber mas cosas aqui, pero todavia no se
que poner.<p>

<footer>
<p>© 2014 Pillos Systems; Todos los derechos reservados.</p>
</footer>
</body>
</html>