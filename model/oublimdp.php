<?php
function verifEmailAndIp($email){
    global $bdd;
	$requete = $bdd->query("SELECT email FROM user WHERE email ='".$email."' AND ip = '".$_SERVER['remote_addr']."'");
    return $requete->fetch();
}
function changeMdp($email,$mdp){
    global $bdd;
    $requete = $bdd->prepare ("UPDATE user SET mdp = ? WHERE email = ?");
    $requete->execute([$mdp, $email]);
    return $requete;
}