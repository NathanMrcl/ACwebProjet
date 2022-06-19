<!DOCTYPE html>
<html lang="fr">
 <head>
 <link rel="stylesheet" type="text/css" href="./styles/MenuHamburger.css" media="screen" /> 
 <link rel="stylesheet" type="text/css" href="./styles/PiedFixe.css" media="screen" />
  <link rel="icon" href="./images/initiales.jpg" />
  <title> Consultation </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Pour bien gérer le RWD -->
  <meta name="author" content="JG" />
  <meta name="description" content="SAE23" />
  <meta name="keywords" content="HTML, CSS" />
  <meta HTTP-EQUIV="Refresh" CONTENT="60; URL=http://localhost/SAE232/consultation.php"> 
 </head>

 <body>
 
 <header>Consultation</header>
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

<!-- menu which appears after clicking on the "hamburger" button-->
<ul id="menu">
					<li><a href="./index.html" class="first">Accueil</a></li>
					<li><a href="./login_admin.php">Administration</a></li>
					<li><a href="./login_gest.php">Gestion</a></li>
					<li><a href="./consultation.php">Consultation</a></li>
					<li><a href="./MentionLégales.html" class="first">Mentions legales</a></li>
				</ul>
			</nav>
</br>
</br>
</br>
<h1> Affichage des mesures des capteurs du bâtiment INFO </h1>
<br>
<br>
	
	<?php
		include ("SAE23.php");


			/* Sélection des pieces en fonction de l'interet */
				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'TB103' ORDER BY MES_DATE DESC LIMIT 3";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';
                    echo "<caption> <strong> Données température de la salle B103 </strong></caption>";
					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (°C)</th>";
				/* Affichage de la liste des pièces  */
				while($ligne=mysqli_fetch_assoc($result))
				 {	
					extract($ligne);
					echo '<tr>';
					echo 	"<td> B103 </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';

				/* Sélection des pieces en fonction de l'interet */
				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'CB103' ORDER BY MES_DATE DESC LIMIT 3";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';
                echo "<caption> <strong> Données du taux de CO2 de la salle B103 </strong></caption>";
					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (PPM) </th>";
				/* Affichage de la liste des pièces  */
				while($line=mysqli_fetch_assoc($result))
				 {	
					extract($line);
					echo '<tr>';
					echo 	"<td> B103 </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';

 			/* Sélection des pieces en fonction de l'interet */
				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'TB204' ORDER BY MES_DATE DESC LIMIT 3";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';
				echo "<caption> <strong> Données de température de la salle B204 </strong></caption>";
					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (°C)</th>";
				/* Affichage de la liste des pièces  */
				while($ligne=mysqli_fetch_assoc($result))
				 {	
					extract($ligne);
					echo '<tr>';
					echo 	"<td> B204 </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';
 
				/* Sélection des pieces en fonction de l'interet */
				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'CB204' ORDER BY MES_DATE DESC LIMIT 3";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table class="fin">';
				echo "<caption> <strong> Données du taux de CO2 de la salle B204 </strong></caption>";
					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (PPM)</th>";
				/* Affichage de la liste des pièces  */
				while($line=mysqli_fetch_assoc($result))
				 {	
					extract($line);
					echo '<tr>';
					echo 	"<td> B204 </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';
	mysqli_close($id_bd);
		?>
  <h1> Affichage des mesures des capteurs du bâtiment RT </h1>
<?php
include ("SAE23.php");

				/* Sélection des pieces en fonction de l'interet */
				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'TE104' ORDER BY MES_DATE DESC LIMIT 3";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';
echo "<caption> <strong> Données de la température de la salle E104 </strong></caption>";
					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (°C)</th>";
				/* Affichage de la liste des pièces  */
				while($ligne=mysqli_fetch_assoc($result))
				 {	
					extract($ligne);
					echo '<tr>';
					echo 	"<td> E104 </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';


				/* Sélection des pieces en fonction de l'interet */
				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'TE104' ORDER BY MES_DATE DESC LIMIT 3";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';
echo "<caption> <strong> Données du taux de CO2 de la salle E104 </strong></caption>";
					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (PPM)</th>";

				/* Affichage de la liste des pièces  */
				while($line=mysqli_fetch_assoc($result))
				 {	
					extract($line);
					echo '<tr>';
					echo 	"<td> E104 </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';


					/* Sélection des pieces en fonction de l'interet */
				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'TE208' ORDER BY MES_DATE DESC LIMIT 3";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';
echo "<caption> <strong> Données de la température de la salle E208 </strong></caption>";
					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (PPM)</th>";

				/* Affichage de la liste des pièces  */
				while($line=mysqli_fetch_assoc($result))
				 {	
					extract($line);
					echo '<tr>';
					echo 	"<td> E208 </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';


					/* Sélection des pieces en fonction de l'interet */
				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'TE208' ORDER BY MES_DATE DESC LIMIT 3";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table class="fin">';
echo "<caption> <strong> Données du taux de CO2 de la salle E208 </strong></caption>";
					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (°C)</th>";

				/* Affichage de la liste des pièces  */
				while($line=mysqli_fetch_assoc($result))
				 {	
					extract($line);
					echo '<tr>';
					echo 	"<td> E208 </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';
	mysqli_close($id_bd);
			?>
</br>
</br>
</br>
 <footer>
    <ul>
	  <li>IUT de Blagnac</li>
	  <li>Etienne/Tudor/Maricaille</li>
      <li>Réseau et Telecom</li>
	</ul>  
  </footer>
  </body>
    
</html>
