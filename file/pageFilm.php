<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PROJET WEB L3 INFO</title>
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link rel="stylesheet" type="text/css" href="../css/navbar.css">
		<link rel="stylesheet" type="text/css" href="../css/footer.css">
		<link rel="stylesheet" type="text/css" href="../css/main-home.css">
		<link rel="stylesheet" type="text/css" href="../css/main-page-film.css">
            <link rel="stylesheet" type="text/css" href="../css/form.css">
		<link rel="stylesheet" type="text/css" href="../css/recherche.css">
		<script src="../js/jquery/jquery-3.2.0.min.js"></script>
	</head>
	<body>

		<!-- NAVIGATION BAR -->
		<nav>
			<ul class="container">
				<li class="logo-li-navbar">
					<a href="#">
						<img class="logo-img-navbar" alt="navbar" src="../img/logo.jpg">
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
				<!-- Titre d'exemple, en temps normal il sera chargé de la BDD -->
				<h1> Sully </h1>
			</header>
                  <article class="high">
				<section class="page-film-container container">

						<div class="main-page-film-left">
							<!-- Image de présentation du film -->
							<div id="page-film-img-top">
								<img class="page-film-img" alt="Sully" src="../img/sully.jpg">
							</div>

							<!-- Donner une note au film -->
							<div id="page-film-note">
								<p> NOTATION DU FILM </p>
							</div>
						</div>

						<div class="main-page-film-right">
							<!-- Partie champs-à-champs informations du film -->
							<div id="page-film-description">
								<p> Réalisé par <strong>Steven Spielberg</strong></p>
								<p> Avec <strong>JeanClaude Vandam, Mimi Matty</strong></p>
								<p id="page-film-pegi"> Tous public </p>
								<p id="page-film-duration-gender"> Durée: <strong>1h35mn</strong> - Genre: <strong>Sciences-Fiction</strong></p>
							</div>

							<!-- Partie Synopsis du film -->
							<div id="page-film-synopsis">
								<h2> Synopsis </h2>
								<p> Lorem Ipsum Veni Vedi Vici Lorem Ipsum Veni Vedi Vici Lorem Ipsum Veni Vedi Vici Lorem Ipsum Veni Vedi Vici Lorem Ipsum Veni Vedi Vici Lorem Ipsum Veni Vedi Vici Lorem Ipsum Veni Vedi Vici Lorem Ipsum Veni Vedi Vici Lorem Ipsum Veni Vedi Vici Lorem Ipsum Veni Vedi Vici Lorem Ipsum Veni Vedi Vici </p>
							</div>

						<br>

							<div id="page-film-commentaire">
								<!-- Partie pour les commentaires en dessous des synopsis -->
								<p style="text-align: center;"> COMMENTAIRES </p>
							</div>
						</div>

						<br>

						<div class="main-page-film-other">
							<!-- Partie pour les autres films à l'affiche, en dessous des commentaires -->
							<h2> Film favoris </h2>

							<div> <a href="#"> SOLDAT RYAN </a> </div>
							<div> <a href="#"> BRUCE LEE</a> </div>
							<div> <a href="#"> I'M A LEGEND </a> </div>
							<div> <a href="#"> KUNGFU PANDA </a> </div>
							<div> <a href="#"> SAUSAGE PARTY </a> </div>
							<div> <a href="#"> SURVIVAL EVOLVED </a> </div>
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
								<img alt="facebook" src="./img/facebook.png">
							</a>
						</li>
						<li>

						</li>
						<li class="Twiter-header">
							<a href="#">
								<img alt="twitter" src="./img/twitter.png">
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</footer>
	</body>
</html>
