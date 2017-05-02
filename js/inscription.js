// Fichier JavaScript pour le formulaire d'inscription

$(document).ready(function(){

      console.log("Fichier JS Inscription.php chargé.");

      // Empêcher les messages d'erreurs de formulaire de s'afficher
      $('#pseudoError').css("visibility", "hidden");
      $('#emailError').css("visibility", "hidden");
      $('#passwordError').css("visibility", "hidden");

      console.log("Messages d'erreur(s) effacés avec succès");


      // Check RegEx pour le pseudo de l'utilisateur
      $('#pseudo').on("change",function(){

      		var pseudo = $('#pseudo').val();
      		console.log("Pseudo modifié ! " + pseudo);      		

      		var regexPseudo = new RegExp('^[A-Za-z0-9]{2,36}$');

      		if(pseudo == ""){
      			$('#pseudoError').css("visibility", "hidden");
      		}
      		else{
      			if(regexPseudo.test(pseudo)){
      				$('#pseudoError').html("<p style=\"color: green; margin: 0px;\"> Pseudo correct ! </p>");
      				$('#pseudoError').css("visibility", "visible");
      			}
      			else{
      				$('#pseudoError').html("<p style=\"color: red; margin: 0px;\"> Pseudo incorrect ! </p>");
      				$('#pseudoError').css("visibility", "visible");
      			}
      		}
 
      		
      });

      // Check RegEx pour l'email de l'utilisateur
      $('#email').on("change", function(){

      		var userEmail = $('#email').val();
      		console.log("Email modifié ! " + userEmail);

      		var regexEmail = new RegExp('^[A-Za-z0-9.-_]{2,255}@[A-Za-z0-9.-_]{2,255}(.com|.fr|.ch|.net|.eu)$');

      		if(userEmail == ""){
      			$('#emailError').css("visibility", "hidden");
      		}
      		else{
      			if(regexEmail.test(userEmail)){
      				$('#emailError').html('<p style=\"color: green; margin: 0px;\"> E-mail correct ! </p>');
      		}
	      		else{
	      			$('#emailError').html('<p style=\"color: red; margin: 0px;\"> E-mail incorrect ! </p>');
	      		}

	      		$('#emailError').css("visibility", "visible");
      		}
      		
      });

      // Check RegEx pour la correspondace des mots de passe
      $('#mdp2').on("change", function(){

      		var userPassword 	 = $('#mdp').val();
      		var userPasswordConf = $('#mdp2').val();
      		console.log('Mot(s) de passe modifié(s) ! ' + userPasswordConf);

      		if(userPasswordConf == ""){
      			$('#passwordError').css("visibility", "hidden");
      		} 
      		else{
      			if(userPasswordConf != userPassword){
      				$('#passwordError').html('<p style=\"color: red; margin: 0px\"> Mots de passe différents ! </p>');
      			}
      			else{
      				$('#passwordError').html('<p style=\"color: green; margin: 0px;\"> Mots de passe corrects ! </p>');
      			}

      			$('#passwordError').css("visibility","visible");
      		}

      });

});
