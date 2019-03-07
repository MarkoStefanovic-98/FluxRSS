<?php 
function modifLogin($telephone,$nom,$prenom,$login)
{
    global $bdd;
        $requete = $bdd->prepare("UPDATE user SET telephone = :telephone, login = :login, nom = :nom, prenom = :prenom WHERE id_u=".$_SESSION['id']);
                    $requete->execute(array(
                       'telephone' => $telephone,
                        'login' => $login,
                        'nom' => $nom,
                        'prenom' => $prenom
                    ));
        return $requete->fetchAll();  
}
function modifEmail($email3)
{
    global $bdd;
       $requete = $bdd->prepare("UPDATE user SET email = :email3 WHERE id_u=".$_SESSION['id']);
                                $requete->execute(array(
                                'email3' => $email3
                                ));
        $_SESSION['email'] = $email3;
        return $requete->fetchAll();  
}
function modifMdp($mdp3)
{
    global $bdd;
        $requete = $bdd->prepare("UPDATE user SET mdp = :mdp3 WHERE id_u=".$_SESSION['id']);
                                $requete->execute(array(
                                'mdp3' => $mdp3
                                ));
        return $requete->fetchAll();  
}
function addFlux($titre,$lien)
{
    global $bdd;
    $requete = $bdd->prepare("INSERT INTO flux (titre,lien) VALUES (?, ?)");
    $rep = $requete->execute([$titre,$lien]);
    return $rep;
}
