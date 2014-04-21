<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
</head>
<body>
 <div class="header-top">
	<div class="wrap">
        <div class="logo">
			<a href="../index.php"><img src=" images/logo.png" alt=""/></a>
		</div>
		<div class="cssmenu">
		  <nav id="nav" role="navigation">
			<a href="#nav" title="Show navigation">Show navigation</a>
			<a href="#" title="Hide navigation">Hide navigation</a>
			<ul class="clearfix">
				<li class="active"><a href="../index.php">Home</a></li>
				<li><a href="start.php"><span>Descarga</span></a></li>
				<li><a href="work.php"><span>Información</span></a></li>
				<li><a href="support.php">Contacto</a></li>
				<div class="clear"></div>
			</ul>
		    </nav>
		  </div>
		   
		   
	     <div class="clear"></div>
		<h2 class="head">Aplicación para <span class="m_1"> </span>encontrar <span class="m_1">tu mejor ruta</span></h2>
     </div>
    </div>
  <div class="main">
     <div class="wrap">
      	 <div class="section group">
				<div class="cont span_2_of_blog">
				  <div class="login-title">
           		<h4 class="title">Iniciar Sesión</h4>
				<div id="loginbox" class="loginbox">
					<form action="../controllers/general.php" method="POST" name="login" id="login-form">
					  <fieldset class="input">
					    <p id="login-form-username">
					      <label for="modlgn_username">Usuario</label>
					      <input id="modlgn_username" type="text" name="usuario" class="inputbox" size="18" autocomplete="off">
					    </p>
					    <p id="login-form-password">
					      <label for="modlgn_passwd">Contrasena</label>
					      <input id="modlgn_passwd" type="password" name="clave" class="inputbox" size="18" autocomplete="off">
					    </p>
					    <p id="login-form-remember">
					      <label for="modlgn_remember" class="checkbox">Empresa</label>
					      <input id="modlgn_remember" type="radio" name="opcion" class="checkbox" value="userEmp" autocomplete="off">
						  <label for="modlgn_remember" class="checkbox">Administrador</label>
					      <input id="modlgn_remember" type="radio" name="opcion" class="checkbox" value="userAdmin" autocomplete="off">
					    </p>
					    <input type="submit" name="Submit"  value="Login">
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
				<li class="active"><a href="../index.php">Home</a></li> 
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
