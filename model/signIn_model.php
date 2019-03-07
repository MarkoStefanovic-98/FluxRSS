<?php
function addUser($email,$login,$nom,$prenom,$mdp){
    global $bdd;
	$requete = $bdd->prepare("INSERT INTO user (email,login,nom,prenom,mdp) VALUES (?, ?, ? ,?, ?)");
    $req = $requete->execute([$email,$login,$nom,$prenom,$mdp]);
    return $req;
}
?>