<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Document</title>
</head>
<?php
include("bdd.php");

if (isset($_POST["nom"])){
    $nom = $_POST["nom"];
}
if (isset($_POST["prenom"])){
    $prenom = $_POST["prenom"];
}
if (isset($_POST["date"])){
    $date = $_POST["date"];
}

if (isset($_POST["mail"])){
    $mail = $_POST["mail"];
}
if (isset($_POST["competiteur"])){
    $competiteur = $_POST["competiteur"];
}

$lettres_chiffres = 'ABCDEFGHIJKLMNOPQRSTUVWabcdefghijklmnopqrstuvwxyz0123456789';
$lettres_chiffres_melanges = str_shuffle($lettres_chiffres);
$mdp = substr($lettres_chiffres_melanges, 10, 20);
                     
if ($competiteur==1) {
    if (isset($_POST["arme"])){
        $arme = $_POST["arme"];
    }
    if ($arme=="sabre") {
        $arme=2;
    }
    if ($arme=="epee") {
        $arme=1;
    }
    if ($arme=="fleuret") {
        $arme=3;
    }

    $sql="INSERT INTO competiteur (nom,prenom,date_de_naissance,id_arme,mail,password) VALUES ('$nom','$prenom','$date','$arme','$mail','$mdp')";
    mysqli_query($link,$sql);
    echo "Vos données ont été envoyées !";

}

if ($competiteur==0){
    if (isset($_POST["Table"])){
        $Table = 1;
    }
    else {
        $Table =  0;
    }
    if (isset($_POST["Armoire"])){
        $Armoire = 1;
    }
    else{
        $Armoire=0;
    }
    if (isset($_POST["Raccordement"])){
        $Raccordement = 1;
    }
    else{
        $Raccordement=0;
    }
    $sql="INSERT INTO equipementier(nom,prenom,date_de_naissance,mail,armoire,tables,raccordement,password) VALUES ('$nom','$prenom','$date','$mail','$Armoire','$Table','$Raccordement','$mdp')";
    mysqli_query($link,$sql);
}
?>
<body>
<h1> Pour confirmer votre inscription veuillez cliquer sur le liens envoyé à votre adresse mail</h1>
</body>
</html>

<?php

$to = $mail;
$subject = 'votre mot de passe';
$msg = $mdp;

mail($to, $subject, $msg);
?>  