<?php
  function listarSeccion($mysqli){
      $consultaSeccion = "SELECT * FROM seccion";

      $resultado = mysqli_query($mysqli,$consultaSeccion);
      
// DIBUJO LA TABLA ANTES DE LOS CAMPOS

      echo "<div class='table-responsive' id='listado'>
            <table class='table table-striped' >
            
            <thead><tr>
            <th>ID</th><th>Nombre de Seccion</th></tr></thead>";
// TRAIGO EN LA TABLA LOS DATOS QUE QUIERO  
        while($seccion = mysqli_fetch_array($resultado)){
         echo "<tbody><tr>";
         echo "<td>$seccion[id_seccion]</td><td>$seccion[titulo]</td>";
        } 
// CUANDO NO HAY MÄS DATOS CIERRO LA TABLA
      echo "<tr></tbody></table>";
    }  

    function listarSubSeccion($mysqli){
      $consultaSubSeccion = "SELECT * FROM subseccion INNER JOIN seccion on subseccion.id_seccion=seccion.id_seccion";
      $resultado = mysqli_query($mysqli,$consultaSubSeccion);
    
          echo "<div class='table-responsive' id='listado'>
            <table class='table table-striped'>
            
            <thead><tr>
            <th>ID</th><th>Nombre de Sub-seccion</th><th>id seccion</th></tr></thead>";
        while($seccion = mysqli_fetch_array($resultado)){
         echo "<tbody><tr>";
         echo "<td>$seccion[id_sub]</td><td>$seccion[tituloSub]</td><td>$seccion[titulo]</td>";
         echo "<td> </td>";
        } 
      echo "<tr></tbody></table>";
    }  
  
    function listarArchivo($mysqli){
      
      $consultaArchivo = "SELECT * FROM archivo INNER JOIN subseccion on subseccion.id_sub=archivo.id_subseccion";
      $resultado = mysqli_query($mysqli,$consultaArchivo);
    
          echo "<div class='table-responsive' id='listado'>
            <table class='table table-striped' >
            
            <thead><tr>
            <th>ID</th><th>Nombre de archivo</th><th>Sub-seccion</th><th>URL</th></tr></thead>";
        while($seccion = mysqli_fetch_array($resultado)){
         echo "<tbody><tr>";
         echo "<td>$seccion[id_archivo]</td><td>$seccion[nombre]</td><td>$seccion[tituloSub]</td><td>$seccion[url]</td>";
         echo "<td> </td>";
        } 
      echo "<tr></tbody></table>";
    }  


    function armarMenu($mysqli){
      $consultaMenu = "SELECT DISTINCT * FROM seccion";
      
      $resultado = mysqli_query($mysqli,$consultaMenu);

      while( $datos = mysqli_fetch_array($resultado)){ // FILTRA CADA SECCIÓN
           if($datos[url] == ''){// EN CASO DE NO TENER URL LE ASIGNA UN NUMERAL
             $datos[url] = "../#";
                    }
                 
          $consultaSub = "SELECT DISTINCT * FROM subseccion WHERE $datos[id_seccion] = id_seccion";
          $resultadoSub = mysqli_query($mysqli,$consultaSub);
          $result = mysqli_num_rows($resultadoSub);

          if($result != 0){
              echo "<li class='dropdown dropdown-submenu' id='apunte'><a href='$datos[url]' class='dropdown-toggle' data-toggle='dropdown'>$datos[titulo]</a>
              <ul id='ul-sub'class='dropdown-menu'>";
              
                while($datosSub = mysqli_fetch_array($resultadoSub,MYSQLI_ASSOC)){
              // DEVUELVE LAS SUBSECCIONES RELACIONADAS
                echo "<li id='li-sub'><a onclick='armarVista($datosSub[id_sub]);return false;'>$datosSub[tituloSub]</a></li>";
             
                }
              echo "</ul>";
            }else{
              echo "<li><a href='$datos[url]'>$datos[titulo]</a>";
            }
            echo "</li>";
            
        }
   }
     function armarVista($id){
      include('../db/conexion.php');
      $query = "SELECT * FROM archivo WHERE $id = id_sub";

      $resultado = mysqli_query($mysqli,$resultado);
      
      echo "<div class='paginaNueva col-lg-12 pfblock pfblock-gray'>
              <div class='container'>
                <h2>Apuntes y guías</h2>
                  <div class='row'>
                    <div class='col-lg-12'>";
          
      while($datos = mysqli_fetch_array($resultado)){
          echo "<p id='listadoEspecial' class='Negrit'>$datos[nombre] <a class='vinculoNE' href='$datos[url]' target='_NEW'>Descarguelo aqui</a></p>";
        
        }
        echo "</div></div></div></div>";
    }



?>