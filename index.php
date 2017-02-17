<!--
Editado por Miguel Costa 14/02/2017 13:00
-->

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Práctica</title>
	<link type="text/css" rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css' />
	<script src="jquery/jquery-3.1.1.min.js" ></script>
	<script src="jquery/jquery_menuMoviles_desplegable.js" ></script>
</head>
<body>

	<header id="header" class="">
		<nav id='navegacion'>
			<ul id='lista_principal'>
				<li id='inicio'><a href="" title=""><i class="fa fa-home" aria-hidden="true"></i>Inicio</a></li>
				<li id='editor'><a href="" title=""><i class="fa fa-pencil" aria-hidden="true"></i>Conviértete en editor</a></li>
				<li id='registrarte'><a href="./php/registrate.php" title=""><i class="fa fa-unlock-alt" aria-hidden="true"></i>Regístrarte</a></li>
				<li id='ini_sesion'><a href="./php/iniciar_sesion.php" title=""><i class="fa fa-user" aria-hidden="true"></i>Iniciar Sesión</a></li>	
				<li id='menu_moviles'><i class="fa fa-bars" aria-hidden="true"></i></a>
				<ul id='lista_movil'>
					<li id='editor'><a href="" title="">Conviértete en editor</a></li>
					<li id='registrarte'><a href="./php/registrate.php" title="">Regístrarte</a></li>
					<li id='ini_sesion'><a href="./php/iniciar_sesion.php" title="">Iniciar Sesión</a></li>
				</ul></li>		
				
			</ul>
		</nav>
		<div id='slider'>
			<div id='buscador'>
				<form action="">
					<label><p>Busca tus temas</p><input type="search" name="nombre" placeholder="Buscar"></label>
				</form>
			</div>
		</div>
	</header>
	
	<section class='cursosPopulares'>
		<h2>Cursos más populares</h2>
		<ul class="temas_flex">
			<li>
                <div class='imagen'><img src="./img/php.png" /></div>
                <div class='modulo'>
                	<h2>PHP</h2>   
                	<div class='descripcion'>
                		<ul>
			                <li>Nicolás Fdez Arellano</li>
							<li>Tutor DAW (Desarrollo de Aplicaciones Web)</li>
							<li>IES Galileo</li>	
						</ul>	                
		            </div>
		            <div class='descargar'>
		            	<p><a href="#" class="boton rojo">DESCARGAR</a></p>
		            </div>
	            </div>
			</li>
			<li>
                <div class='imagen'><img src="./img/javascript.png" /></div>
                <div class='modulo'>
                	<h2>JAVASCRIPT</h2>   
                	<div class='descripcion'>
		                <ul>
			                <li>David Marín Álvarez</li>
							<li>IES Galileo</li>	
						</ul>	 
		            </div>
		            <p class='descargar'><a href="#" class="boton rojo">DESCARGAR</a>
	            </div>
			</li>
			<li>
                <div class='imagen'><img src="./img/interfaces.png" /></div>
                <div class='modulo'>
                	<h2>INTERFACES</h2>   
                	<div class='descripcion'>
		                <ul>
			                <li>Ángel T. Domínguez</li>
							<li>IES Galileo</li>	
						</ul>	 
		            </div>
		            <p class='descargar'><a href="#" class="boton rojo">DESCARGAR</a>
	            </div>
			</li>
        </ul>   
	</section>

	<section class='ultimosSubidos'>
		<h2>Últimos temas subidos</h2>
		<ul class="temas_flex">
			<li>
                <div class='imagen'><img src="./img/php.png" /></div>
                <div class='modulo'>
                	<h2>PHP</h2>   
                	<div class='descripcion'>
                		<ul>
			                <li>Nicolás Fdez Arellano</li>
							<li>Tutor DAW (Desarrollo de Aplicaciones Web)</li>
							<li>IES Galileo</li>	
						</ul>	                
		            </div>
		            <div class='descargar'>
		            	<p><a href="#" class="boton rojo">DESCARGAR</a></p>
		            </div>
	            </div>
			</li>
			<li>
                <div class='imagen'><img src="./img/javascript.png" /></div>
                <div class='modulo'>
                	<h2>JAVASCRIPT</h2>   
                	<div class='descripcion'>
		                <ul>
			                <li>David Marín Álvarez</li>
							<li>IES Galileo</li>	
						</ul>	 
		            </div>
		            <p class='descargar'><a href="#" class="boton rojo">DESCARGAR</a>
	            </div>
			</li>
			<li>
                <div class='imagen'><img src="./img/interfaces.png" /></div>
                <div class='modulo'>
                	<h2>INTERFACES</h2>   
                	<div class='descripcion'>
		                <ul>
			                <li>Ángel T. Domínguez</li>
							<li>IES Galileo</li>	
						</ul>	 
		            </div>
		            <p class='descargar'><a href="#" class="boton rojo">DESCARGAR</a>
	            </div>
			</li>
        </ul>   
	</section>

	<footer>
	<div id='conocenos'>
	<h3>Conócenos</h3>
		<ul>
			<li><a href="">Isabel</a></li>
			<li><a href="">Cristina</a></li>
			<li><a href="">Samuel</a></li>
			<li><a href="">Alejandro</a></li>
			<li><a href="">Miguel</a></li>
		</ul>
	</div>
        <p>Copyright 2017 DAW<br />IES Galileo</p>
        <div class='redes'>
        	<h3>Síguenos en: </h3>
	        <a href=""><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
	        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
	        <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
	        <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</div>
    </footer>

</body>
</html>