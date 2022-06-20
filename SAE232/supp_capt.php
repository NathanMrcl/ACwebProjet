<?php
	// Démarrage de la session
session_start(); 
	if ($_SESSION["auth"]!=TRUE)
		header("Location:erreur.php");
?>

<!DOCTYPE html>
<html lang="fr">
 <head>
 <link rel="stylesheet" type="text/css" href="./styles/MenuHamburger.css" media="screen" /> 
<link rel="stylesheet" type="text/css" href="./styles/PiedFixe.css" media="screen" />
  <link rel="icon" href="./images/initiales.jpg" />
  <title> Administrateur </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Pour bien gérer le RWD -->
  <meta name="author" content="Nathan wati bg" />
  <meta name="description" content="SAÉ 23" />
  <meta name="keywords" content="HTML, CSS" />
 </head>

 <body>
 
 <header>Administration</header>
   <nav>
  <div id="menu-hamburger">
    <!--
    Box used to receive all the clicks
    -->
    <input type="checkbox" />
    
    <!--
   Hamburger menu features.
    -->
    <span></span>
    <span></span>
    <span></span>

<!-- Menu which appears when the "hamburger" button is clicked-->
<ul id="menu">
					<li><a href="./index.html" class="first">Accueil</a></li>
					<li><a href="./login_admin.php">Administration</a></li>
					<li><a href="./login_gest.php">Gestion</a></li>
					<li><a href="./consultation.php">Consultation</a></li>
					<li><a href="./MentionLégales.html" class="first">Mentions legales</a></li>
				</ul>
			</nav>
  
<section>
<?php
	
        include("SAE23.php");
		$CAPT_NOM = $_POST['CAPT_NOM'];
		$requete = "DELETE FROM `MESURE` WHERE `CAPT_NOM` = '$CAPT_NOM'";
		$resultat = mysqli_querry($id_bd, $requete)
			or die("La requête n'a pas pu être effectuée : $requete");
		mysql_close($id_bd);

		echo '<div class="ajout">';
		echo "Le batiment à été supprimé";
		echo "<ul>
				<li> Nom du Capteur : $CAPT_NOM </li>;
			</ul>
			</div>";
?>
</section>

<footer>
    <ul>
	  <li>IUT de Blagnac</li>
	  <li>Etienne/Tudor/Maricaille</li>
      <li>Réseau et Telecom</li>
	</ul>  
  </footer>
 </body>   
</html>
