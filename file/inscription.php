<?php
		require_once "./php/connexion.php";

		// Vérification de l'entrée d'arguments via le formulaire
?>

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
		<script src="../js/inscription.js"></script>
	</head>
	<body>

		<!-- NAVIGATION BAR -->
		<nav>
			<ul class="container">
				<li class="logo-li-navbar">
					<a href="#">
						<img class="logo-img-navbar" alt="logo" src="../img/logo.jpg">
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
				<h1> Inscription </h1>
			</header>
                  <article class="high">
					<section class="inscription container">
					<div class="container">
                            <p class="inscription-mess"> Veuillez saisir les informations demandées. Un e-mail de confirmation sera envoyé à l'adresse e-mail indiquée. </p>
                            <p class="inscription-mess"><i>(Tous les champs sont obligatoires)</i></p>
                            <form action="inscription.php" method="POST">

							<table align="center">
								<tr>
									<td class="tdRight"><label for="nom"> Pseudo :</label></td>
									<td><input id="pseudo" type="text" name="userPseudo" placeholder="Nom"></td>
									<td><p id="pseudoError" style="color: red; margin: 0px;"> Pseudo incorrect. </p></td>
								</tr>
								<tr>
									<td class="tdRight"><label for="email"> Email :</label></td>
									<td><input id="email" type="email" name="userEmail" placeholder="E-mail"></td>
									<td><p id="emailError" style="color: red; margin: 0px;"> E-mail incorrect. </p></td>
								</tr>
								<tr>
									<td class="tdRight"><label for="genre"> Genre :</label></td>
									<td><select id="genre" name="userGender">
			                                                <option value="male">Homme</option>
			                                                <option value="female">Femme</option>
			                                                <option value="none">Non renseigné</option>
			                            </select>
									</td>
									<td>
									</td>
								</tr>
								<tr>
									<td class="tdRight"><label for="age"> Age :</label></td>
									<td><input id="age" type="number" min="1" max="150" name="userAge"></td>
									<td>
									</td>
								</tr>
								<tr>
									<td class="tdRight"><label for="mdp"> Mot de passe :</label>
									</td>
									<td><input id="mdp" type="password" name="userPassword" placeholder="Password"></td>
									<td>
									</td>
								</tr>
								<tr>
									<td class="tdRight"><label for="mdp2"> Confirmer le mot de passe :</label></td>
									<td><input id="mdp2" type="password" name="userPasswordConfirm" placeholder="Confirm password"></td>
									<td><p id="passwordError" style="color: red; margin: 0px;"> Les mots de passe sont différent ! </p></td>
								</tr>
								<tr>
									<td></td>
									<td><input id="boutonSubmit" type="submit" value="Inscription !"></td>
									<td></td>
								</tr>
							</table>
						</form>
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
