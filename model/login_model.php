<?php
function login($email,$mdp){
    global $bdd;
	$requete = $bdd->query("SELECT * FROM user WHERE email ='".$email."' AND mdp = '".$mdp."'");
    $requete->bindValue(":email", $email, PDO::PARAM_STR);
    $requete->bindValue(":mdp", $mdp, PDO::PARAM_STR);
    $requete->execute();
    
    return $requete->fetch();
}


function rememberMe($id_u)
    {
        global $bdd;
        $requete = $bdd->prepare("SELECT * FROM user WHERE id_u =".$id_u);
        $requete->bindValue(":id_u", $id_u, PDO::PARAM_INT);
        $requete->execute();
        
        return $requete->fetch();
    }
?>