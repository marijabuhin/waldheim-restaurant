
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Waldheim Leingarten &mdash; Caf&eacute; Restaurant Bistro</title>
	<meta name="og:locale" content="de_DE" />
	<meta name="og:type" content="website" />
	<meta name="og:title" content="Waldheim Leingarten" />
	<meta name="og:description" content="Cafe Restaurant Bistro" />
	<!-- add url <meta name="og:url" content="" />-->
	<meta name="og:site_name" content="Waldheim Leingarten" />
	<meta name="og:image" content="img/logo-baum.png" />
	<meta name="article:tag" content="Waldheim Leingarten, Cafe, Restaurant, Bistro, Germany" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="img/logo-baum.png"/>
	<link rel="stylesheet" href="scss/vendors/owl_carousel.css">
	<link rel="stylesheet" href="scss/vendors/owl_theme.css">
	<link rel="stylesheet" href="scss/main.css">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
</head>

<body>
	<div class="grid">
		<nav class="nav nav--mobile">
			<div class="nav__logo">
				<a href="index.php"><img src="img/logo-baum.png" alt="logo" /></a>
			</div>

			<div class="burger"></div>

			<div class="nav--burger">
				<img src="img/logo-baum.png" alt="logo" />

				<ul class="nav__item">
					<li><a href="#news" class="nav__link">News</a></li>
					<li><a href="#restaurant" class="nav__link">Restaurant</a></li>
					<li><a href="#galerie" class="nav__link">Galerie</a></li>
					<li><a href="#speisekarte" class="nav__link">Speisekarte</a></li>
					<li><a href="#kontakt" class="nav__link">Kontakt</a></li>
				</ul>
			</div>
		</nav>

		<nav class="nav nav--desktop">
			<div class="nav__logo">
				<a href="index.php"><img src="img/logo-baum.png" alt="logo" /></a>
			</div>

			<ul class="nav__item">
				<li><a href="#news" class="nav__link">News</a></li>
				<li><a href="#restaurant" class="nav__link">Restaurant</a></li>
				<li><a href="#galerie" class="nav__link">Galerie</a></li>
				<li><a href="#speisekarte" class="nav__link">Speisekarte</a></li>
				<li><a href="#kontakt" class="nav__link">Kontakt</a></li>
			</ul>
		</nav>

		<header id="header" class="header">
			<div class="header__content">
				<div class="header__title">
				<h1>Waldheim Leingarten</h1>
				<h3>Café - Restaurant - Bistro</h3>
			</div>

				<div class="header__img">
					<img src="img/header_logo.png" alt="header_logo" />
				</div>

				<div class="header__sign">
					<div class="header__dot"></div>

					<div class="header__line header__line--left"></div>
					<div class="header__line header__line--right"></div>

					<div class="header__text">
						<h4>Wir haben offen</h4>
						<h6>von Mittwoch - Samstag ab 17:00<br/>
						am Sonntagen &amp; Feiertagen ab 11:30</h6>
					</div>
				</div>
			</div>			
		</header>

		<section id="news" class="section news">
			<h2 class="section__title">~ News ~</h2>

			<div class="news__text">
				<?php echo file_get_contents("news.txt"); ?>
			</div>
		</section>

		<section id="restaurant" class="section">
			<h2 class="section__title">~ Restaurant ~</h2>

			<div class="section__item">
				<div class="section__text">
					<div class="owl-carousel owl-theme carousel carousel--about">
					  <div class="carousel__item">
					  	<h3>Der Gastraum</h3>
					  	<p>Thanks for stopping by. We are the last authentic Italian restaurant in Milan, serving delicious Italian cuisine cooked by the best chefs. It only takes a few minutes to browse through our website and check out our menu. We hope you'll soon join us for a superb Italian culinary experience.</p>
					  </div>

					  <div class="carousel__item">
					  	<h3>Das Nebenzimmer</h3>
					  	<p>Thanks for stopping by. We are the last authentic Italian restaurant in Milan, serving delicious Italian cuisine cooked by the best chefs. It only takes a few minutes to browse through our website and check out our menu. We hope you'll soon join us for a superb Italian culinary experience.</p>
					  </div>

					  <div class="carousel__item">
					  	<h3>Der Biergarten</h3>
					  	<p>Thanks for stopping by. We are the last authentic Italian restaurant in Milan, serving delicious Italian cuisine cooked by the best chefs. It only takes a few minutes to browse through our website and check out our menu. We hope you'll soon join us for a superb Italian culinary experience.</p>
					  </div>
                        
                      <div class="carousel__item">
					  	<h3>Das Billardzimmer</h3>
					  	<p>Thanks for stopping by. We are the last authentic Italian restaurant in Milan, serving delicious Italian cuisine cooked by the best chefs. It only takes a few minutes to browse through our website and check out our menu. We hope you'll soon join us for a superb Italian culinary experience.</p>
					  </div>
					</div>
				</div>

				<div class="section__img--wrap">
					<img src="img/location.jpg" alt="restaurant-image" class="section__img" />
				</div>
			</div>
			
			<div class="section__item">
				<div class="section__img--wrap">
					<img src="img/cuisine.jpg" alt="restaurant-image" class="section__img" />
				</div>

				<div class="section__text">
					<div class="testimonial">
						<div class="testimonial__info">
							<img src="img/portrait-1.png" alt="portrait" class="testimonial__img" />
							<div>
								<h4>Petra Schwarzer</h4>
								<h6>Inhaberin</h6>
							</div>
						</div>
						
						<div class="testimonial__text">
							<h3>Was treibt mich an...</h3>
							<p>nach langer überlegung dachte ich mir ich möchte es wagen mich selbstständig zu machen. so habe ich mich entschlossen diesen schritt zu gehen und habe nach einer Grundsanierung im xxxxxx 2007 das Waldheim wieder eröffnet. Auch wenn der Anfang nicht einfach war, bin ich heute froh das getan zu haben. Es macht mir viel Freude meine Gäste mit gut bürgerlichen Speisen zu verwöhnen</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="galerie" class="gallery">
			<h2 class="section__title">~ Galerie ~</h2>

			<div class="owl-carousel owl-theme carousel--gallery">
		 		<div class="gallery__img--wrap"><img src="img/gallery.png" alt="gallery_pic" class="gallery__img" /></div>
		 		<div class="gallery__img--wrap"><img src="img/header.png" alt="gallery_pic" class="gallery__img" /></div>
                <div class="gallery__img--wrap"><img src="img/billard.png" alt="gallery_pic" class="gallery__img" /></div>
		 	</div> 	
		</section>

		<section id="speisekarte" class="section section speisekarte">
			<h2 class="section__title">~ Speisekarte ~</h2>

			<div class="carousel carousel--menu owl-carousel">
				<div class="carousel__item">
					<h6>Warme Getränke</h6>
					<img src="img/speisekarte_1.png" alt="speisekarte" class="carousel__img" />
				</div>

				<div class="carousel__item">
					<h6>Alkoholfreie Getränke</h6>
					<img src="img/speisekarte_2.png" alt="speisekarte" class="carousel__img" />
				</div>

				<div class="carousel__item">
					<h6>Säfte</h6>
					<img src="img/speisekarte_3.png" alt="speisekarte" class="carousel__img" />
				</div>
				
				<div class="carousel__item">
					<h6>Biere</h6>
					<img src="img/speisekarte_4.png" alt="speisekarte" class="carousel__img" />
				</div>
				
				<div class="carousel__item">
					<h6>Weine</h6>
					<img src="img/speisekarte_5.png" alt="speisekarte" class="carousel__img" />
				</div>
			</div>
		</section>

		<footer id="kontakt" class="footer">
			<h2 class="section__title">~ Kontakt ~</h2>

			<div id="mapid" class="map"></div>

			<div class="footer__info--wrap">
				<div class="footer__info">
					<h3>Schreiben Sie uns einfach...</h3>
					<ul class="footer__text">
						<li><img src="img/icon_marker.png" alt="marker" class="footer__icon"/> Egarten 1, 74211 Leingarten</li>
						<li><img src="img/icon_phone.png" alt="phone" class="footer__icon" /> +49 (0)7131 6429757</li>
						<li><img src="img/icon_email.png" alt="email" class="footer__icon" /> <a class="link" href="mailto:info@gastro-waldheim.de">info@gastro-waldheim.de</a></li>
					</ul>
			  </div>
				<form class="form" action="mail.php" method="POST">
					<div class="form__field">
						<label for="name" class="form__label">Name</label> 
						<input class="form__input" type="text" name="name">
					</div>
					<div class="form__field">
						<label for="email" class="form__label">E-mail</label> 
						<input class="form__input" type="text" name="email">
					</div>
					<div class="form__field">
					 <label for="message" class="form__label">Nachricht</label>
					 <textarea class="form__textarea" name="message" rows="3"></textarea><br />
					</div>
					<div class="form__btn">
						<input class="btn" type="submit" value="Absenden">
					</div>
				</form>

				<div class="footer__rights">
					<div class="copyright">
						<span>Copyright &copy; 2018 Waldheim Leingarten</span>
						<a class="link" href="impressum.html">Impressum</a>
						<a class="link" href="datenschutzerklaerung.html">Datenschutzerklärung</a>
					</div>
					
					<div class="footer__top"><a class="link" href="#header">Back to top</a></div>
				</div>
			</div>
		</footer>
	</div>

	<script src="js/jquery-3.3.1.js"></script>
	<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
	  integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
	  crossorigin=""></script>
	<script src="js/owl_carousel.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/map.js"></script>
	<script src="js/burger.js"></script>
	<script src="js/nav.js"></script>
	<script>
		$(document).ready(function() {
	    $('.carousel--menu').find('.owl-item.active.center').addClass('big');
	    $('.carousel--menu').find('.owl-item.active.center').prev('.owl-item').addClass('medium medium--left');
	    $('.carousel--menu').find('.owl-item.active.center').next('.owl-item').addClass('medium medium--right');
		});
	</script>
</body>

</html>
