<?php
session_start();
include("lib/database/database_connection.php");
?>

<!DOCTYPE html> 
<html> 
	<head>
		<title>Montreal official page</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<link rel="stylesheet" type="text/css" href="lib/css/root.css" />
		<link rel="stylesheet" type="text/css" href="lib/css/style.css" />
		<link rel="stylesheet" type="text/css" href="lib/css/header.css" />
		
		<!-- jQuery library (served from Google) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>
		
		<script src="lib/Javascript/jquery.easing.1.3.js"></script>
		<!-- bxSlider Javascript file -->
		<script src="lib/Javascript/jquery.bxslider.js"></script>
		<!-- bxSlider CSS file -->
		<link href="lib/css/jquery.bxslider.css" rel="stylesheet" />
		<link href="lib/css/navigation_bar.css" rel="stylesheet" />
		<link href="lib/css/article.css" rel="stylesheet" />
	</head>

	<body>
		<form  method="get" action=" <?php echo $_SERVER['PHP_SELF']; ?> ">
		<header>
		<div id="div_header">
			<img src="http://lebaobab.ca/img/le-baobab-logo-1454772857.jpg" alt="logo" />
			<div>
				<a href="">Appelez-nous au:</a> +1 (514) 739-0007
				<a href="">Connexion</a>
				<a href="">Ennregistrement</a>
				<a href="">Contacter-nous</a>
				<br>
				<form>
					<input type="text" name="search" placeholder="Rechercher..." />
					<input type="submit"  name="search_on" value="Rechercher" />
				</form>
			</div>
		</div>
		<?php include("lib/html/menu_bar.html"); ?>
		</header>
		
		<script type="text/javascript" src="lib/Javascript/scrolling_picture.js"></script>
		<ul class="bxslider">
		  <li><img src="lib/picture/01.jpg" width="900px" height="500px" /></li>
		  <li><img src="lib/picture/02.jpg" width="900px" height="500px"/></li>
		  <li><img src="lib/picture/03.jpg" width="900px" height="500px"/></li>
		  <li><img src="lib/picture/04.jpg" width="900px" height="500px"/></li>
		  <li><img src="lib/picture/05.jpg" width="900px" height="500px"/></li>
		  <li><img src="lib/picture/06.jpg" width="900px" height="500px"/></li>
		</ul>
		
		<video id="videoclip" controls="controls" poster="lib/picture/test.jpg" title="Video title">
		  <source id="mp4video" src="lib/video/test.webm" type="video/webm"  />
		</video>
		
		<?php	
			include('lib/html/left_menu.html');
			if(!function_exists('new_article'))
				include("lib/function/new_article.php");
			include('lib/html/article_navigation_bar.php');
			new_article();
		?>
		
		<div class="branche">
			<a href=""><h1>MANUFACTURERS<h1></a>
		</div>
		<ul class="bxslider2">
		  <?php for($i=1; $i<=39; $i++){echo '<li><img src="lib\picture\Manufacturers_'.$i.'.jpg" max-height="3em" max-width="3em" /></li>';}	?>
		</ul>
		
		<footer>
			<div class="full_width">
				<h1>Lettre d'informations</h1>
				<input type="text" name="search_input" placeholder="Votre email addresse" />
			</div>
			<div class="sub_footer">
				<h2>Catégories</h2>
					<ul>
						<li><a href="">Alimentations</a></li>
						<li><a href="">Cosmétiques</a></li>
						<li><a href="">Vêtements</a></li>
						<li><a href="">Bijoux</a></li>
						<li><a href="">Produits Wax</a></li>
						<li><a href="">Accessoires</a></li>
						<li><a href="">Déco-interieur</a></li>
					</ul>
			</div>
			
			<div class="sub_footer">
				<h2>Informations</h2>
					<ul>
						<li><a href=""> Spéciaux </a></li>
						<li><a href="">Nouveaux produits</a></li>
						<li><a href="">Meilleurs vendeurs</a></li>
						<li><a href="">Nos magasins</a></li>
						<li><a href="">Contactez-nous</a></li>
						<li><a href="">A Propos </a></li>
						<li><a href="">Recettes </a></li>
					</ul>
			</div>
			
			<div class="sub_footer">
				<h2>Informations de la boutique</h2>
					<ul>
						<li>Le baobab, 5190A Chemin de la cote des Neiges, Montréal H3T 1X8 Canada</li>
						<li>Appelez-nous au : +1-514-739-0007</li>
						<li>Courriel: <a>info@lebaobab.ca</a></li>
					</ul>
			</div>
			
		</footer>
			
		<?php $conn->close(); ?>	
	</form>
	</body>
</html> 




