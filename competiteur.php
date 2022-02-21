<?php include("bdd.php") ?>
<?php include("password.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body marginwidth="50" marginheight="100" topmargin="10" leftmargin="50">

<header>
<h1><b>Bienvenue chère compétiteur, c'est ici que tu devra t'inscrire pour la prochaine compétition</b></h1>
</header>
<form action="confirmation.php" method="post">
<h3> saisi ton nom :  <input type="text" name="nom"><br>
	saisi ton prénom :  <input type="text" name="prenom"><br>
	ta date de naissance (JJ/MM/YYYY):  <input type="text" name="date"><br>

	<label>
		Type arme :
		<select name="arme">
		<option value="sabre">Sabre</option>
		<option value="epee">épée</option>
		<option value="fleuret">Fleuret</option>   
		</select>
	</label><br>

	Ton addresse mail :  <input type="email" name="mail"></h3>
<br><br><br>


<h4> Nous vous remercions pour votre participation à bientôt</h4>

<input name="competiteur" value="1" hidden>

<button type="submit">
</form>
	<p> s'inscrire</p>
	
	<?php
	
	//$pass=passgenerator(8); 
	//$nom = $_POST["nom"];
	//$prenom = $_POST["prénom"];
	//$date = $_POST["date"];
	//$arme = $_POST["arme"];
	//$arme = $_POST["mail"];
	
	//mysql_query("INSERT INTO `competiteur` (`Nom`, `Prenom`, `Date de naissance`, `Type arme`, `Mail`, `Mot de passe`)
	//VALUES('$nom', 'prenom', '$date', '$arme', '$mail','$pass'");	
	?>

</button>


</body>
</html>
