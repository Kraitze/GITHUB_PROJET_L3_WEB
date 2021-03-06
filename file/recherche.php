<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PROJET WEB L3 INFO</title>
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link rel="stylesheet" type="text/css" href="../css/navbar.css">
		<link rel="stylesheet" type="text/css" href="../css/footer.css">
		<link rel="stylesheet" type="text/css" href="../css/main-home.css">
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
                  <article class="high">
                        <header> <br> </header>
				<section class="recherche container">
                                    <table>
                                          <tr><td> IMAGE FILM </td><td> DUREE FILM </td><td> PEGI </td><td> Synopsis </td></tr>
                                    </table>
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
