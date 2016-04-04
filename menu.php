<?php include("assets/db/conexion.php"); 
	  include("assets/php/funciones.php");?>
<section id="inicio">
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 black">
			<ul class="social-links2">
				<li><a href="https://www.facebook.com/nuevoencuentro.fyb?fref=ts" target="_NEW" class="wow fadeInUp"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/nencuentrofyb"  target="_NEW" class="wow fadeInUp" data-wow-delay=".1s"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://plus.google.com/113701203193921445593/posts" target="_NEW" class="wow fadeInUp" data-wow-delay=".2s"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
	<div class="col-lg-6 black">
		<ul class="nav navbar-nav navbar-right">
			<li class="menuArriba"><a href="quienes.php">¿Quienes somos?</a></li>
			<li class="menuArriba"><a href="#">¿Que proponemos?</a></li>
			<li class="menuArriba"><a href="#">Contacto</a></li>
		</ul>
	</div>
	<div class="col-lg-12" style="background:#2F2F2F">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                   <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
            <div class="carousel-inner">
               <div class="item active">
                  <img class="slide-image marginauto anchototal" src="assets/images/banner.jpg" alt="Responsive image" >
               </div>
               <div class="item">
                  <img class="slide-image marginauto anchototal" src="assets/images/cover2.jpg" alt="Responsive image" >
               </div>
               <div class="item">
                  <img class="slide-image marginauto anchototal"  src="assets/images/cover3.jpg" alt="Responsive image">
               </div>
            </div>

         </div>

	</div>
	</div>
</div>

</section>
	<!-- Comienza el MENU  -->
	<header class="header">
		<nav class="navbar navbar-custom" id="navCeleste"role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"></a>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-left">
						<!-- <li><a href="index.html">Inicio</a></li>
						<li class="dropdown dropdown-submenu" id="apunte"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Apuntes <br> y guias</a>
								<ul id="ul-sub"class="dropdown-menu">
									<li id="li-sub"><a href="anatomia.php">Anatomía</a></li>
									<li id="li-sub"><a href="bioestadistica.php">BioEstadistica</a></li>
									<li id="li-sub"><a href="fisica.php">Fisica</a></li>
									<li id="li-sub"><a href="fisiologia.php">Fisiología</a></li>
									<li id="li-sub"><a href="QuimicaAnalitica.php">Quimica Analitica instrumental</a></li>
									<li id="li-sub"><a href="QuimicaInorganica.php">Química General inorgánica</a></li>
									
								</ul>
							</li>
        			     <li><a href="resumenes.php" >Resumenes</a></li>
						<li><a href="examenes.php">Examenes</a></li>
						<li><a href="libros.php">Libros</a></li>
						<li class="dropdown dropdown-submenu" id="apunte"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Audios <br> y videos</a>
							<ul id="ul-sub"class="dropdown-menu">
									<li id="li-sub"><a href="audioyvideos.php">Ciclo superior química</a></li>
								</ul>
							</li>
						<li><a onclick="modInfo();">Modelo <br>de informes</a>
							<span id="modInfo">En construcción</span></li>
						<li><a onclick="resuelto();">Ejercicios<br> resueltos</a>
							<span id="resuelto">En construcción</span></li> -->
							<?php armarMenu($mysqli); ?>

					</ul>
				</div>

			</div>
	</nav>
</header>

