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
        <link rel="stylesheet" type="text/css" href="../css/main-film.css">
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
                   <ul class="list-gender-film">
                                    <li><a class="arrondi" href="#">Comédie</a></li>
                                    <li><a class="arrondi" href="#">Sciences-Fictions</a></li>
                                    <li><a class="arrondi" href="#">Drame</a></li>
                                    <li><a class="arrondi" href="#">Théatre</a></li>
                                    <li><a class="arrondi" href="#">Guerre</a></li>
                                    <li><a class="arrondi" href="#">Fantaisie</a></li>
                              </ul>
			</header>
                  <article class="film">
				<h2>Serie</h2>
				<section>
					<div class="container-element">
						<div class="container-image">
							<img alt="300" src="../img/300.jpg">
							<span class="description">
								300
							</span>
						</div>
						<div class="container-image">
							<img alt="Saw8" src="../img/saw8.jpg">
							<span class="description">
								Saw8
							</span>
						</div>
						<div class="container-image">
							<img alt="SuperMan" src="../img/Man_of_Steel.png">
							<span class="description">
								Superman
							</span>
						</div>
						<div class="container-image">
							<img alt="Troie" src="../img/troie.jpg">
							<span class="description">
								Troie
							</span>
						</div>
						<div class="container-image">
							<img alt="saw6" src="../img/saw6.jpg">
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
