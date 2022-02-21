<?php function passgenerator($nbChar) {
	$chaine="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
	$pass = '';
    for($i=0; $i<$nbChar; $i++){
        $pass .= $chaine[rand()%strlen($chaine)];
        }
    return $pass;
	
}
$mdp=passgenerator(8);
echo "Bonjour merci pour votre inscrition"?><br><?php "Pour vous connecter il vous faudra utiliser votre addresse email ainsi que le mot de passe suivant :$mdp" ;

?>