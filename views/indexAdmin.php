<?php
	include '../controllers/sesion.php';
	check_login();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Bus Station</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href=" css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
<link href=" css/calendar-eightysix-default.css" rel="stylesheet" type="text/css" media="all" />
<link href=" css/calendar-eightysix-osx-dashboard.css" rel="stylesheet" type="text/css" media="all" />
<link href=" css/calendar-eightysix-vista.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src=" js/mootools-1.2.4-core.js"></script>
<script type="text/javascript" src=" js/mootools-1.2.4.2-more.js"></script>
<script type="text/javascript" src=" js/calendar-eightysix-v1.0.1.js"></script>
<script type="text/javascript">
		window.addEvent('domready', function() {
			new CalendarEightysix('exampleI', 	 { 'offsetY': -4 });
			new CalendarEightysix('exampleII', 	 { 'startMonday': true, 'format': '%m.%d.%Y', 'slideTransition': Fx.Transitions.Back.easeOut, 'draggable': true, 'offsetY': -4 });
	});	
</script>

</head>
<body>
  <div class="header-top">
	<div class="wrap">
        <div class="logo">
			<a href="indexAdmin.php"><img src=" images/logo.png" alt=""/></a>
		</div>
		<div class="cssmenu">
		  <nav id="nav" role="navigation">
			<a href="#nav" title="Show navigation">Show navigation</a>
			<a href="#" title="Hide navigation">Hide navigation</a>
			<ul class="clearfix">
				<li class="active"><a href="indexAdmin.php">Home</a></li>
				<li><a href="start.php"><span>Descarga</span></a></li>
				<li><a href="work.php"><span>Información</span></a></li>
				<li><a href="support.php">Contacto</a></li>
				<div class="clear"></div>
			</ul>
		    </nav>
		  </div>
		  
		   <!--Parte del Usuario-->
		  <div class="buttons">
				
				<div class="login_btn">
					<a>Usuario Admin</a>
				</div>
				<div class="get_btn">
					<a href="logout.php">Cerrar Sesion</a>
				</div>
		   </div>
		   <!---->
		   
		   
	     <div class="clear"></div>
		<h2 class="head">Aplicación para <span class="m_1"> </span>encontrar <span class="m_1">tu mejor ruta</span></h2>
     </div>
    </div>
     
	 <!--Imagen del mapa opcional-->
	 <div class="map">
     	<img src=" images/map.jpg" alt=""/>
     </div>
	
	<!--Contenidos-->
     <div class="main">
     	<div class="wrap">
     		<div class="section group">
			<!--Primer contenido -->
				<div class="col_1_of_3 span_1_of_3">
					<img src=" images/Empresa.png" alt=""/>
					
					  <div class="desc">
						<h3><a href="#">Empresas</a></h3>
						
					   </div>
					   
					   
					   <div class="section group example">
					   
					   
						<div class="col_1_of_3 span_1_of_3">
						   <ul>
							 <li>
								<div class="buttonsType">
								<div class="get_btnType">
									<a href="empresaEditar.php">Editar</a>
								</div>
								</div>
								
							 </li>
						   </ul>
		 				</div>
						<div class="col_1_of_3 span_1_of_3">
						  <ul>
							 <li><div class="get_btnType">
									<a href="empresaAgregar.php">Agregar</a>
								</div>
							</li>
						  </ul>
						</div>
						<div class="col_1_of_3 span_1_of_3">
						  <ul>
							 <li><div class="get_btnType">
									<a href="empresaEliminar.php">Eliminar</a>
								</div>
							</li>
						  </ul>
						</div>
						<div class="clear"></div>
					</div>
					   
				</div>
				
				
				<!--Segundo contenido contenido -->
				
				<div class="col_1_of_3 span_1_of_3">
					<img src=" images/paradas.png" alt=""/>
					
					  <div class="desc">
						<h3><a href="#">Paradas</a></h3>
						
					   </div>
					   
					   
					   <div class="section group example">
					   
					   
						<div class="col_1_of_3 span_1_of_3">
						   <ul>
							 <li>
								<div class="buttonsType">
								<div class="get_btnType">
									<a href="paradaEditarAdmin.php">Editar</a>
								</div>
								</div>
								
							 </li>
						   </ul>
		 				</div>
						<div class="col_1_of_3 span_1_of_3">
						  <ul>
							 <li><div class="get_btnType">
									<a href="paradaAgregarAdmin.php">Agregar</a>
								</div>
							</li>
						  </ul>
						</div>
						<div class="col_1_of_3 span_1_of_3">
						  <ul>
							 <li><div class="get_btnType">
									<a href="paradaEliminarAdmin.php">Eliminar</a>
								</div>
							</li>
						  </ul>
						</div>
						<div class="clear"></div>
					</div>
					   
				</div>
				
					  
					  
					  
					  
				<!--Tercer contenido contenido -->
				
				<div class="col_1_of_3 span_1_of_3">
					<img src=" images/ruta.png" alt=""/>					
						<div class="desc">
						<h3><a href="#">Rutas</a></h3>
						</div>
					  
					   <div class="section group example">
					   	<div class="col_1_of_3 span_1_of_3">
						   <ul>
							 <li>
								<div class="buttonsType">
								<div class="get_btnType">
									<a href="rutaEditarAdmin.php">Editar</a>
								</div>
								</div>
								
							 </li>
						   </ul>
		 				</div>
						<div class="col_1_of_3 span_1_of_3">
						  <ul>
							 <li><div class="get_btnType">
									<a href="rutaAgregarAdmin.php">Agregar</a>
								</div>
							</li>
						  </ul>
						</div>
						<div class="col_1_of_3 span_1_of_3">
						  <ul>
							 <li><div class="get_btnType">
									<a href="rutaEliminarAdmin.php">Eliminar</a>
								</div>
							</li>
						  </ul>
						</div>
						<div class="clear"></div>
					</div>
					   
				</div>
			
			
			
			<!--Seccion de otros 3-->
			
			<div class="section group">
				
				
				<div class="col_1_of_3 span_1_of_3">
					<img src=" images/unidades.png" alt=""/>
					
					  <div class="desc">
						<h3><a href="#">Unidades</a></h3>
					   </div>
					   <div class="section group example">
					   <div class="col_1_of_3 span_1_of_3">
						   <ul>
							 <li>
								<div class="buttonsType">
								<div class="get_btnType">
									<a href="unidadesEditarAdmin.php">Editar</a>
								</div>
								</div>
								
							 </li>
						   </ul>
		 				</div>
						<div class="col_1_of_3 span_1_of_3">
						  <ul>
							 <li><div class="get_btnType">
									<a href="unidadesAgregarAdmin.php">Agregar</a>
								</div>
							</li>
						  </ul>
						</div>
						<div class="col_1_of_3 span_1_of_3">
						  <ul>
							 <li><div class="get_btnType">
									<a href="unidadesEliminarAdmin.php">Eliminar</a>
								</div>
							</li>
						  </ul>
						</div>
						
						
						
						<div class="clear"></div>
		    		  </div>
				</div>
				
				
				 <div class="clear"></div>
			</div>
		</div>
     </div>
	 
	 
	 
	 
	 
	 
	 
	 
	 
     <div class="footer">
     	<div class="wrap">
     	  <div class="footer-menu">
     		<ul>
				<li class="active"><a href="indexAdmin.php">Home</a></li> 
				<li><a href="start.php">Descarga</a></li> 
				<li><a href="work.php">Informacion</a></li> 
				<li><a href="support.php">Contacto</a></li> 
				
				<div class="clear"></div>
			</ul>
     	  </div>
     	  <div class="footer-bottom">
     	  	
		    <div class="social">	
			   <ul>	
				  <li class="facebook"><a href="#"><span> </span></a></li>
				  <li class="twitter"><a href="#"><span> </span></a></li>
				  <li class="linked"><a href="#"><span> </span></a></li>	
				  <li class="arrow"><a href="#"><span> </span></a></li>	
				  <li class="dot"><a href="#"><span> </span></a></li>
				  <li class="rss"><a href="#"><span> </span></a></li>		
			   </ul>
		    </div>
		    <div class="clear"></div>
     	  </div>
       </div>
     </div>
</body>
</html>
