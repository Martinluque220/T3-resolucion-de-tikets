<?php

include("menu_bs.php");
echo '
<div class="container-fluid" id="capa_T">
	<div class="row">
	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container-fluid">

        <!-- IZQUIERDA: Imagen y nombre -->
        <div class="navbar-header" style="display: flex; align-items: center;">
            <img src="images/b_bkg_3.jpg" alt="Perfil" style="height: 40px; width: 40px; border-radius: 50%; margin: 5px 10px 5px 15px;">
            <span class="navbar-text" style="color: white; font-weight: bold;">Martin luque</span>
        </div>

        <!-- DERECHA: Botones de navegación -->
        <ul class="nav navbar-nav navbar-right" style="margin-right: 10px;">
            <li><a href="#">Cartelera</a></li>
			<li><a href="#" onclick="cargar(#capa_C, mostrar_cartelera.php?b=Diseno1)">Diseño 1</a></li>
            <li><a href="#" onclick="cargar(#capa_C, mostrar_cartelera.php?b=Diseno2)">Diseño 2</a></li>
            <li><a href="#">Libro D</a></li>
            <li><a href="#">Libros Impresos</a></li>
            <li><a href="#">Ayuda</a></li>
            <li><a href="#">Usuarios</a></li>
            <li><a href="#">Carteles</a></li>
        </ul>
    </div>
</nav>

	  <div class="col-sm-3">
	  <div id="capa_d">
	  <H3>BIBLIOTECA T1</H3>
	  <H4>Publicaciones Digitales</H4>
	  <ul class="nav nav-pills nav-stacked">
	    <li><a href="#"><span onclick="cargar(\'#capa_C\',\'txts/origen.html\')">Origen</span></a></li>
        <li><a href="#"><span onclick="cargar(\'#capa_C\',\'txts/objetivo.html\')">Objetivo</span></a></li>
        <li><a href="#"><span onclick="cargar(\'#capa_C\',\'txts/tecnologias.html\')">Tecnologias</span></a></li>
        <li><a href="#"><span onclick="cargar(\'#capa_C\',\'txts/proyectos.html\')">Proyectos</a></span></li>
		<li><a href="#"><span onclick="cargar(\'#capa_C\',\'txts/referencias.html\')">Referencias</a></span></li>
           
	  </ul>
	  </div>
	  </div>
	  
	  <div class="col-sm-6">
	  <div id="capa_C">	
	  <div id="titulo">	</div>
	  <div id="contenido">	</div>
	  <H3></H3>
	  </div>
	  </div>
	  
	  <div class="col-sm-3" >
	  <H4>
	  <div id="n_proyecto"  style="position: fixed;color: RED"></div>
	  <br><br></H4>
	  
	  <div id="capa_P" style="position: absolute">	
	  
	  </div>
	  </div>

	</div>
 </div>
 
';
echo "<script>";
echo "cargar('#capa_C','mostrar_cartelera.php?b=Portada');";
echo "</script>";
?>

