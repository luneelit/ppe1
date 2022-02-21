<?php include("bdd.php") ?>

<html>

<head>
<meta content="">
<link rel="stylesheet" href="style.css"/>
</head>

<body marginwidth="50" marginheight="100" topmargin="10" leftmargin="50">

<header>
<h1><b>Bienvenue chère equipementier, c'est ici que tu devra t'inscrire pour la prochaine compétition</b></h1>
</header>
<form action="confirmation.php" method="post">
<h3>Saisi ton nom : <input type="text" name="nom"><br>
	Saisi ton prénom : <input type="text" name="prenom"><br>
	Ta date de naissance (JJ/MM/YYYY): <input type="text" name="date"><br>
	Ton addresse mail : <input type="email" name="mail"></h3>
<br><br><br>

<h2><b>Vocis les equipements optionnelles que tu peux ajouter à ton stand</b></h2>

<h3> Une table :<input type="checkbox" id="Table" name="Table"><br>
	Une armoire :<input type="checkbox" id="Armoire" name="Armoire"><br>
	Un raccordement électrique : <input type="checkbox" id="Raccordement" name="Raccordement" ></h3>
<br><br>

<h4> Nous vous remercions pour votre participation à bientôt</h4>

<input name="competiteur" id="competiteur" value="0" hidden>


<button type="submit">
</form>
	<p> s'inscrire</p>


</button>
<!--"nom"
	"prénom"
	"date"
	"mail"
	"Table"
	"Armoire"
	"Raccordement électrique"
-->
</body>

</html>

