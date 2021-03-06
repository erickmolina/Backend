<?php
?>
<!DOCTYPE HTML>
<html>
<head>
<title>BusStation</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href=" views/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
<link href=" views/css/calendar-eightysix-default.css" rel="stylesheet" type="text/css" media="all" />
<link href=" views/css/calendar-eightysix-osx-dashboard.css" rel="stylesheet" type="text/css" media="all" />
<link href=" views/css/calendar-eightysix-vista.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src=" views/js/mootools-1.2.4-core.js"></script>
<script type="text/javascript" src=" views/js/mootools-1.2.4.2-more.js"></script>
<script type="text/javascript" src=" views/js/calendar-eightysix-v1.0.1.js"></script>
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
			<a href="index.php"><img src=" views/images/logo.png" alt=""/></a>
		</div>
		<div class="cssmenu">
		  <nav id="nav" role="navigation">
			<a href="#nav" title="Show navigation">Show navigation</a>
			<a href="#" title="Hide navigation">Hide navigation</a>
			<ul class="clearfix">
				<li class="active"><a href="index.php">Home</a></li>
				<li><a href="views/start.php"><span>Descarga</span></a></li>
				<li><a href="views/work.php"><span>Información</span></a></li>
				<li><a href="views/support.php">Contacto</a></li>
				<div class="clear"></div>
			</ul>
		    </nav>
		  </div>
		  
		  <!--Parte del login-->
		  <div class="buttons">
		  <div class="content-box-right">
				
				<div class="get_btn">
					<a href="views/login.php">Iniciar Sesiòn</a>
				</div>
			</div>		
				
				
				
				
		   </div>
		   <!--Parte del login-->
		   
		   
	     <div class="clear"></div>
		<h2 class="head">Aplicación para <span class="m_1"> </span>encontrar <span class="m_1">tu mejor ruta</span></h2>
     </div>
    </div>
     
	 <!--Imagen del mapa opcional-->
	 <div class="map">
     	<img src=" views/images/map.jpg" alt=""/>
     </div>
	 <!--Imagen del mapa opcional-->
	 


     <div class="footer">
     	<div class="wrap">
     	  <div class="footer-menu">
     		<ul>
				<li class="active"><a href="index.php">Home</a></li> 
				<li><a href="views/start.php">Descarga</a></li> 
				<li><a href="views/work.php">Informacion</a></li> 
				<li><a href="views/support.php">Contacto</a></li> 
				
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