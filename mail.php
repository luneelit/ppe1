<?php

function mailsendequipmentier(){
	
	include("password.php");
	$mdp=passgenerator(8)

	$destinataire = 'adresse@fai.com';
	$expediteur = 'adresse@fai.com';
	$copie = 'adresse@fai.com';
	$copie_cachee = 'adresse@fai.com';
	$objet = 'mail ';

	$headers  = 'MIME-Version: 1.0' . "\n"; 
	$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; 
	$headers .= 'Reply-To: '.$expediteur."\n"; 
	$headers .= 'From: "Nom_de_expediteur"<'.$expediteur.'>'."\n";
	$headers .= 'Delivered-to: '.$destinataire."\n"; 
	$headers .= 'Cc: '.$copie."\n"; 
	$headers .= 'Bcc: '.$copie_cachee."\n\n";        

	$message = "Bonjour merci pour votre inscrition"?><br><?php "Pour vous connecter il vous faudra utiliser votre addresse email ainsi que le mot de passe suivant :$mdp" ;

	if (mail($destinataire, $objet, $message, $headers)) 
	{
		echo 'Votre message a bien été envoyé ';
	}
	else
	{
		echo "Votre message n'a pas pu être envoyé";
	}
}
?>

<?php

function mailsendcompetiteur(){
	
	include("password.php");
	$mdp=passgenerator(8)

	$destinataire = 'adresse@fai.com';
	$expediteur = 'adresse@fai.com';
	$copie = 'adresse@fai.com';
	$copie_cachee = 'adresse@fai.com';
	$objet = 'mail ';

	$headers  = 'MIME-Version: 1.0' . "\n"; 
	$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; 
	$headers .= 'Reply-To: '.$expediteur."\n"; 
	$headers .= 'From: "Nom_de_expediteur"<'.$expediteur.'>'."\n";
	$headers .= 'Delivered-to: '.$destinataire."\n"; 
	$headers .= 'Cc: '.$copie."\n"; 
	$headers .= 'Bcc: '.$copie_cachee."\n\n";        

	$message = "Bonjour merci pour votre inscrition"?><br><?php "Pour vous connecter il vous faudra utiliser votre addresse email ainsi que le mot de passe suivant :$mdp" ;

	if (mail($destinataire, $objet, $message, $headers)) 
	{
		echo 'Votre message a bien été envoyé ';
	}
	else
	{
		echo "Votre message n'a pas pu être envoyé";
	}
}
?>