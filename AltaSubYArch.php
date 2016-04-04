<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Nuevo Encuentro | Farmacia y Bioquimica</title>
	
	<?php 
		include("assets/db/conexion.php");
		include("assets/php/funciones.php"); ?>


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
	<?php include("menuAdmin.php"); ?>
<div id="services" class="col-lg-12 pfblock pfblock-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h2>Agregar sub-Sección</h2><br>
					<form action="agregarSubSeccion.php" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="exampleInputText1">Ingresar titulo</label>
                            <input type="text" name="titulo" class="form-control" id="exampleInputText1" placeholder="Titulo de sub-sección">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputTextarea1">Seleccione sección correspondiente</label>
                            <select name="seccion2" class="form-control"  placeholder="Seccion">
                              <?php $query="SELECT * FROM seccion";
                              $resultado = mysqli_query($mysqli,$query);
                              while($fila = mysqli_fetch_array($resultado)){
                                $nombre = $fila['id_seccion'];
                                echo "<option value = '$nombre' >$fila[titulo]</option>";
                                } 
                                ?>
                              </select>
                          </div>
                          
                          <button type="submit" name="submit" class="btn btn-primary">Subir</button><br>
                        </form>
				</div>
				<div class="col-lg-6">

				</div>
			</div>
		</div>
	</div>

</body>
<?php include("footer.php"); ?>
</html>