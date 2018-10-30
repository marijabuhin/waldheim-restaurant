<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Waldheim Leingarten &mdash; Caf&eacute; Bistro Restaurant</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="img/logo-baum.png"/>
	<link rel="stylesheet" href="scss/main.css">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
</head>

<body>
	<div class="grid">
		<nav class="nav">
			<div class="nav__logo">
				<img src="img/logo-baum.png" alt="logo" />
			</div>

			<ul class="nav__item">
				<li><a href="#news">News</a></li>
				<li><a href="#restaurant">Restaurant</a></li>
				<li><a href="#galerie">Galerie</a></li>
				<li><a href="#speisekarte">Speisekarte</a></li>
				<li><a href="#kontakt">Kontakt</a></li>
			</ul>
		</nav>

		<header class="header">
			<div class="header__title">
				<h1 class="header__title--bigger">Waldheim Leingarten</h1>
				<h3 class="header__title--smaller">Café - Restaurant - Bistro</h3>
			</div>

			<div class="header__img">
				<img src="img/header_logo.png" alt="header_logo" />
			</div>

			<div class="header__txt">
				<p class="header__txt--larger">Wir haben offen</p>
				<p class="header__txt--smaller">von Mittwoch - Samstag ab 17:00<br/>
				am Sonntagen & Feiertagen ab 11:30</p>
			</div>
		</header>

		<section id="news" class="section news">
			<h2>~ News ~</h2>

			<div class="news__text">
				<?php echo file_get_contents("news.txt"); ?>
			</div>
		</section>

		<section id="restaurant" class="section">
			<h2>~ Restaurant ~</h2>

			<div class="section__item">
				<div class="section__text">
					<div class="carousel carousel-about">
					  <div class="carousel__item">
					  	<h3>Der Gastraum</h3>
					  	<p>Thanks for stopping by. We are the last authentic Italian restaurant in Milan, serving delicious Italian cuisine cooked by the best chefs. It only takes a few minutes to browse through our website and check out our menu. We hope you'll soon join us for a superb Italian culinary experience.</p>
					  </div>

					  <div class="carousel__item">
					  	<h3>A Unique Experience</h3>
					  	<p>Thanks for stopping by. We are the last authentic Italian restaurant in Milan, serving delicious Italian cuisine cooked by the best chefs. It only takes a few minutes to browse through our website and check out our menu. We hope you'll soon join us for a superb Italian culinary experience.</p>
					  </div>

					  <div class="carousel__item">
					  	<h3>New one</h3>
					  	<p>Thanks for stopping by. We are the last authentic Italian restaurant in Milan, serving delicious Italian cuisine cooked by the best chefs. It only takes a few minutes to browse through our website and check out our menu. We hope you'll soon join us for a superb Italian culinary experience.</p>
					  </div>
					</div>
				</div>

				<div class="section__img">
					
				</div>
			</div>
		</section>

		<section id="galerie" class="gallery">
			<h2>~ Gallery ~</h2>

			<div class="owl-carousel owl-theme gallery--wrap">
		 		<img src="img/gallery.png" alt="gallery_pic" class="item" />
		 		<img src="img/header.png" alt="gallery_pic" class="item" />
		 	</div>
		</section>

	</div>


		

	

	<!--<div id="restaurant" class="section">
		<div class="section__title">
			<h1>Restaurant</h1>
		</div>
		<div class="section__text">
			<h1>Der Gastraum</h1>
			<p>Thanks for stopping by. We are the last authentic Italian restaurant in Milan, serving delicious Italian cuisine cooked by the best chefs. It only takes a few minutes to browse through our website and check out our menu. We hope you'll soon join us for a superb Italian culinary experience.</p>
			<h2>A Unique Experience</h2>
			<p>Thanks for stopping by. We are the last authentic Italian restaurant in Milan, serving delicious Italian cuisine cooked by the best chefs. It only takes a few minutes to browse through our website and check out our menu. We hope you'll soon join us for a superb Italian culinary experience.</p>
		</div>
		<div class="section__img">
				<img src="img/location.jpg" alt="location" />
		</div>
	</div>

	<div class="section">
			<div class="section__img">
				<img src="img/cuisine.jpg" alt="cuisine" />
			</div>
			<div class="section__text">
				<img class="portrait" src="img/Portrait-1.png" alt="portrait" />
				<h1>Was treibt mich an...</h1>
				<p>nach langer überlegung dachte ich mir ich möchte es wagen mich selbstständig zu machen. so habe ich mich entschlossen diesen schritt zu gehen und habe nach einer grund sanierung im xxxxxx 2007 das Waldheim wieder eröffnet. heute bin ich froh das getan zu haben. es macht mir viel freude meine Gäste mit gut bürgerlichen speisen zu verwöhnen</p>
			</div>
	</div>-->


	<div id="speisekarte" class="menu">
		<div class="section__title">
			<h1>~ Unsere Speisekarte ~</h1>
		</div>
		<!--<div class="menu__list">
		    <div class="item"><img src="img/SPEISEKARTE_1.png" alt="SPEISEKARTE1" /></div>
		    <div class="item"><img src="img/SPEISEKARTE_2.png" alt="SPEISEKARTE2" /></div>
		    <div class="item"><img src="img/SPEISEKARTE_3.png" alt="SPEISEKARTE3" /></div>
		    <div class="item"><img src="img/SPEISEKARTE_4.png" alt="SPEISEKARTE4" /></div>
		    <div class="item"><img src="img/SPEISEKARTE_5.png" alt="SPEISEKARTE5" /></div>
		</div>-->
	</div>

	<div id="kontakt" class="contact">
		<div class="section__title">
			<h1>~ Kontakt/Anfahrt ~</h1>
		</div>
		<div id="mapid"></div>	
	</div>

	<div class="footer">
		<div class="footer__info">
			<div class="footer__title">
				<h1>Contact Us</h1>
			</div>
			<div class="footer__text">
				<img src="img/icon_marker.png" alt="marker" />
				<p>Eingarten 1, 74211 Leingarten</p>
				<img src="img/icon_phone.png" alt="phone" />
				<p>+49 (0)7131 6429757</p>
				<img src="img/icon_email.png" alt="email" />
				<p>info@gastro-waldheim.de</p>
			</div>
		</div>
		<div class="form">
			<div class="input">
				<p>Name</p>
				<input class="form__input" placeholder="Name" type="text" name="Name">
			</div>
			<br/>
			<div class="input">
				<p>E-mail</p>
				<input class="form__input" placeholder="E-mail" type="email" id="e-mail" name="e-mail" />
			</div>
			<br/>
			<div class="input">
				<p>Message</p>
				<textarea class="textarea" placeholder="This is a message." ></textarea>
			</div>
			<br/>
			<div class="button">
				<button class="btn">SEND</button>
			</div>
		</div>
		<hr />
		<div class="footer__rights">
			<p class="text-center">Copyright &copy; 2018 Waldheim Leingarten</p>
			<a class="nav-link" href="impressum.html">Impressum</a>
			<a class="nav-link" href="datenschutzerklaerung.html">Datenschutzerklärung</a>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
	   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
	   crossorigin=""></script>
	<script src="js/owl_carousel.min.js"></script>
	<script src="js/carousel.js"></script>
	<script>
	   var map = L.map('mapid').setView([49.1342171, 9.1158031,19], 15);
		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	    attribution: '&copy;<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
		}).addTo(map);
		L.marker([49.1342171, 9.1158031,19]).addTo(map)
	    .bindPopup('<b>Café Bistro Waldheim</b><br>Egarten 1, 74211 Leingarten')
	    .openPopup()
	</script>
	<script>
		$(function () {
		$(document).scroll(function () {
		var $nav = $(".nav");
		$nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
		});
		});
	</script>
</body>
