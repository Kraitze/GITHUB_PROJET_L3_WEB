<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PROJET WEB L3 INFO</title>
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link rel="stylesheet" type="text/css" href="../css/navbar.css">
		<link rel="stylesheet" type="text/css" href="../css/footer.css">
		<link rel="stylesheet" type="text/css" href="../css/main-home.css">
		<link rel="stylesheet" type="text/css" href="../css/recherche.css">
		<script src="../js/jquery/jquery-3.2.0.min.js"></script>
	</head>
	<body>

		<!-- NAVIGATION BAR -->
		<nav>
			<ul class="container">
				<li class="logo-li-navbar">
					<a href="#">
						<img class="logo-img-navbar" alt="image" src="../img/logo.jpg">
					</a>
				</li>
				<li class="container search-navbar">
					<form action="recherche.php" class="form-search-navbar container">
						<input type="search" placeholder="Rechercher un film, une série ..." class="search-bar-navbar" name="the_search">
						<input type="submit" value="Rechercher">
					</form>
				</li>
				<li class="left-navbar">
					<ul>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="film.php">Film</a>
						</li>
						<li>
							<a href="serie.php">Série</a>
						</li>
					</ul>
				</li>
				<li class="right-navbar">
					<ul>
						<li class="dropdown">
							<a href="#">Connexion</a>
							<div class="dropdown-display">
								<form>
									<ul class="ul-connexion">
										<li>
											<h3> Connexion </h3>
										</li>
										<li>
											<label for="emailco">Email:</label>
											<input type="email" id="emailco" name="email">
										</li>
										<li>
											<label for="passwordco"> Mot de passe :</label>
											<input type="password" id="passwordco" name="password">
										</li>
										<li>
											<input type="submit">
										</li>
									</ul>
								</form>
							</div>
						</li>
						<li>
							<a href="inscription.php">Inscription</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>

		<!-- MAIN PART -->
		<main class="container">
			<header>
				<h1> Home </h1>
			</header>
			<article class="high">
				<aside class="birth-main">
					<h2 class="titre">Anniversaire du jour</h2>
					<div class="container-element">
						<p class="description">
							C'est l'anniversaire de <span class="prenom" > Random </span> <span class="name" > RANDOM </span>
							<a href="#" class="link">
								lien
							</a>
							vers la personne
						</p>
						<div class="div-image">
							<img class="image" alt="image" src="../img/random.jpg">
						</div>
					</div>
				</aside>
				<section class="actualite">
					<h2>Actualité</h2>
					<div class="com-container">
						<span class="last-com-title">
						Dernier commentaire
						</span>
						<ul class="last-com">
							<li>
								<p class="com">
									<a href="#" class="link-personne">
										Anthony
									</a>
									 salut
								</p>
							</li>
							<li>
								<p class="com">
									<a href="#" class="link-personne">
										Anthony
									</a>
									salut
								</p>
							</li>
						</ul>
					</div>
					<div class="episode-container">
						<span class="last-episode-title">
						Dernier épisode
						</span>
						<ul class="last-episode">
							<li>
								<div class="episode">

								</div>
							</li>
							<li>
								<div class="episode">

								</div>
							</li>
						</ul>
					</div>
				</section>
			</article>
			<article class="serie">
				<h2>Serie</h2>
				<section>
					<div class="container-element">
						<div class="container-image">
							<img src="../img/300.jpg" alt="300">
							<span class="description">
								300
							</span>
						</div>
						<div class="container-image">
							<img src="../img/saw8.jpg" alt="Saw8">
							<span class="description">
								Saw8
							</span>
						</div>
						<div class="container-image">
							<img src="../img/Man_of_Steel.png" alt="Superman">
							<span class="description">
								Superman
							</span>
						</div>
						<div class="container-image">
							<img src="../img/troie.jpg" alt="Troie">
							<span class="description">
								Troie
							</span>
						</div>
						<div class="container-image">
							<img src="../img/saw6.jpg" alt="SAW6">
							<span class="description">
								Saw6
							</span>
						</div>
					</div>
				</section>
			</article>
		</main>

		<!-- FOOTER PART -->
		<footer>
			<ul class="container">
				<li>
					<a href="#">Anthony BOURASSEAU - copyright</a>
				</li>
				<li>
					<ul>
						<li class="facebook-header">
							<a href="#">
								<img src="./img/facebook.png" alt="Facebook">
							</a>
						</li>
						<li>

						</li>
						<li class="Twiter-header">
							<a href="#">
								<img src="./img.twitter.png" alt="Twitter">
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</footer>
	</body>
</html>
