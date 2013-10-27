<!DOCTYPE html>
<html lang="es">
	<head>
		<title><?php echo $title; ?></title>
		<?php
			$link = array(
          'href' => base_url() . 'public/css/fresh/style.css',
          'rel' => 'stylesheet',
          'type' => 'text/css'
			);

			echo link_tag($link);
		?>
		
		<meta charset="UTF-8">
		<meta name="description" content="Mi Web en CI">
		<link rel="image_src" href="<?php echo base_url('public/img/fresh/photo.png') ?>">
		<link href="<?php echo base_url('public/img/fresh/favicon.png') ?>" rel="icon" type="image/vnd.microsoft.icon">
		
		<!-- Rel next y prev -->
			<link rel="prev" href="Home-pagina-3.html">
			<link rel="next" href="Home-pagina-1.html">
		<!-- Rel next y prev --> 
	</head>
	<body>
		<div id="wrapper">
			<header>
				<div id="logo">
					<a href="#">
						<img src="<?php echo base_url('public/img/fresh/logo.png'); ?>" alt="Blonder413" title="Blonder413">
					</a>
				</div>
				<div id="titulo">
					<h1>
						<a href="#">
							Mi Web - <span>Mi Eslogan</span>
						</a>
					</h1>
				</div>	<!-- Fin #titulo -->
				<nav>
					<ul>
						<li><a href="#" id="actual" title="Home">Home</a></li>
						<li><a href="#" title="Video Tutoriales">Video Tutoriales</a></li>
						<li><a href="#" title="Documentos">Documentos</a></li>
						<li><a href="#" title="Códigos">Códigos</a></li>
						<li><a href="#" title="Acerca">Acerca</a></li>
						<li><a href="#" title="Contacto">Contacto</a></li>
						<li><a href="#" title="En Vivo">En Vivo</a></li>
					</ul>
				</nav>	<!-- Fin #menu -->
			</header>	<!-- Fin #encabezado -->
			<div id="contenido">
				<div id="post">
					<div id="busqueda">
						<br>&nbsp;&nbsp;Buscador...<br><br>
					</div>
					
					<?php echo $this->load->view($view); ?>

					<!-- **************************************************************************************************************************** -->
					
					<div id="compartir">
						barra de compartir en las redes sociales
					</div>
					
					<!-- **************************************************************************************************************************** -->
					
					<div id="paginacion">
						Anterior 1 2 3 4 5 ... Siguiente
					</div>	<!-- Fin #paginación -->				
				</div>	<!-- Fin #Post -->
				<!-- --------------------------------------------------------------------------------------------------------------------------------- -->
				<aside>
					<!-- Categorías -->
					<div class="widget">
						<h3>Categorías</h3>
						<ul>
							<li>
								<img alt="Categoría" src="imagenes/logo-ca-1.png">
								<a href="#" title="Categoría">
									Categoría
								</a>
							</li>
							<li>
								<img alt="Categoría" src="imagenes/logo-ca-1.png">
								<a href="#" title="Categoría">
									Categoría
								</a>
							</li>
							<li>
								<img alt="Categoría" src="imagenes/logo-ca-1.png">
								<a href="#" title="Categoría">
									Categoría
								</a>
							</li>
							<li>
								<img alt="Categoría" src="imagenes/logo-ca-1.png">
								<a href="#" title="Categoría">
									Categoría
								</a>
							</li>
						</ul>
					</div>
					
					<!-- Úlitmos Post -->
					<div class="widget">
						<h3>Últimos Post</h3>
						<ul>
							<li>
								<a href="#" title="Categoría">
									Mi título
								</a>
							</li>
							<li>
								<a href="#" title="Categoría">
									Mi título
								</a>
							</li>
							<li>
								<a href="#" title="Categoría">
									Mi título
								</a>
							</li>
							<li>
								<a href="#" title="Categoría">
									Mi título
								</a>
							</li>
							<li>
								<a href="#" title="Categoría">
									Mi título
								</a>
							</li>
						</ul>
					</div>
				</aside>
				<!-- --------------------------------------------------------------------------------------------------------------------------------- -->
			</div>	<!-- Fin #contenido -->
			<footer>
				&copy; Diseñado por <a href="http://www.blonder413.com" title="Blonder413" target="_blank" rel="nofollow">Jonathan Morales Salazar</a>
			</footer>
		</div>	<!-- Fin #wrapper -->
		
		<!-- jQuery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="js/jquery-1.10.2.js"><\/script>')
		</script>
		<!-- fin jQuery -->
		
	</body>
</html>