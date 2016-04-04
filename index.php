<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Nuevo Encuentro | Farmacia y Bioquimica</title>

	<!-- CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"></link>
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen"></link>
	<link href="assets/css/simple-line-icons.css" rel="stylesheet" media="screen"></link>
	<link href="assets/css/animate.css" rel="stylesheet"></link>
	<!-- Custom styles CSS -->
	<link href="assets/css/style.css" rel="stylesheet" media="screen"></link>
	<link rel="shorcut icon" href="assets/images/banner.jpg"></link>
    
    <script src="assets/js/modernizr.custom.js"></script>
       
</head>
<body>

	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4&appId=1592142371067089";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

	<?PHP
		include('menu.php');
	 ?>

    <!-- Services start -->

	<div id="services" class="col-lg-12 pfblock pfblock-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="pfblock-header wow fadeInUp">
						<div class="pfblock-subtitle">
						 	<a href="telefonos-utiles.html"><img class="img-responsive ajusteImg" src="assets/images/TelUtiles.jpg"></a><br>
							<a href="#modalid1"data-toggle="modal" data-target="#modalid1"><img class="img-responsive ajusteImg" src="assets/images/Accesos.jpg"></a><br>
							<a href="carreras.html"><img class="img-responsive ajusteImg" src="assets/images/Carreras.jpg"></a><br>

						</div>
					</div>
				</div>
				<div class="col-lg-6 ">
					<div class="fb-page fadeInUp" data-href="https://www.facebook.com/nuevoencuentro.fyb?fref=ts" data-width="800" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/nuevoencuentro.fyb?fref=ts"><a href="https://www.facebook.com/nuevoencuentro.fyb?fref=ts">Nuevo Encuentro FyB</a></blockquote></div></div>
				</div>
			</div>
		</div>

	</div>

<?php 
	include("footer.php");
?>

	<!-- Scroll to top -->

	<div class="scroll-up">
		<a href="#inicio"><i class="fa fa-angle-up"></i></a>
	</div>
    
    <!-- Scroll to top end-->
    	<!--Analitycs-->

	<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-66753401-1', 'auto');
		  ga('send', 'pageview');

	</script>

	<!-- Javascript files -->

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.parallax-1.1.3.js"></script>
	<script src="assets/js/imagesloaded.pkgd.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.easypiechart.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.cbpQTRotator.js"></script>
	<script src="assets/js/custom.js"></script>

	<div id="modalid1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    	<div class="modal-dialog">
        	<div class="modal-content">
            	<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button><h4>Accesos rápidos</h4>
            	</div> 
            <div class="modal-body">
  					<h3>CAMPUS VIRTUAL ACTUAL : </h3><br><a href="http://virtual.ffyb.uba.ar/" class="vinculoNE">http://virtual.ffyb.uba.ar/</a><br>

					<h3>CAMPUS VIRTUAL VIEJO :</h3><br><a href="http://campus.ffyb.uba.ar/" class="vinculoNE">http://campus.ffyb.uba.ar/</a><br>  

					<h3>CALENDARIO ACADEMICO :</h3><br>  <a href="http://www.ffyb.uba.ar/ALUMNOS/calendario-academico-2015?es" class="vinculoNE">http://www.ffyb.uba.ar/ALUMNOS/calendario-academico-2015?es</a><br> 
					<h3>INSCRIPCIONES :</h3><br>  <a href="http://www.ffyb.uba.ar/ALUMNOS/inscripciones-1246?es" class="vinculoNE">http://www.ffyb.uba.ar/ALUMNOS/inscripciones-1246?es</a><br>
            </div>
            <div class="modal-footer"><button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button></div>
 
      		</div>
      	</div>
  	</div>

</body>
</html>