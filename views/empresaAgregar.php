<?php
	include '../controllers/sesion.php';
	check_login();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Agregar Empresa</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.7.2.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/empresas.js"></script>
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
     </div>
    </div>
  <div class="main">
     <div class="wrap">
      	 <div class="section group">
				<div class="cont span_2_of_blog">
				  <div class="login-title">
           		<h4 class="title">Agregar Empresa</h4>
				<div id="loginbox" class="loginbox">
					<form action="" method="POST" id="addform">
					  <fieldset class="input">
					    
						<p id="nombre">
					      <label for="modlgn_username">Nombre Empresa</label>
					      <input id="modlgn_nombre" type="text" name="modlgn_nombre" class="inputbox" size="18" autocomplete="off">
					    </p>
						
						<p id="telefono">
					      <label for="modlgn_username">Teléfono</label>
					      <input id="modlgn_telefono" type="text" name="modlgn_telefono" class="inputbox" size="18" autocomplete="off">
					    </p>
						
						<p id="Nombre-admin">
					      <label for="modlgn_username">Nombre Usuario</label>
					      <input id="modlgn_admin" type="text" name="modlgn_admin" class="inputbox" size="18" autocomplete="off">
					    </p>
						
						<p id="Email-admin">
					      <label for="modlgn_username">Correo</label>
					      <input id="modlgn_email" type="email" name="modlgn_email" placeholder="me@example.com" class="inputbox" size="18" autocomplete="off">
					    </p>
						
						<p id="Email-admin">
					      <label for="modlgn_username">Clave</label>
					      <input id="modlgn_clave" type="password" name="modlgn_clave"class="inputbox" size="18" autocomplete="off">
					    </p>
						
					    <input type="submit" name="Submit"  value="Agregar">
					  </fieldset>
					 </form>
				</div>
			</div>   
			</div>
		
	   </div>
	   <div class="clear"></div>
	  </div>
   </div>
    <div class="footer">
     	<div class="wrap">
     	  <div class="footer-menu">
     		<ul>
				<li class="active"><a href="indexAdmin.php">Home</a></li> 
				<li><a href="about.php">Descarga</a></li> 
				<li><a href="work.php">Informacion</a></li> 
				<li><a href="industries.php">Contacto</a></li> 
				
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
