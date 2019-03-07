<?php 
function modifFlux($titre,$lien,$id_f)
{
    global $bdd;
        $requete = $bdd->prepare("UPDATE flux SET titre = :titre, lien = :lien WHERE id_f=".$id_f);
                                $requete->execute(array(
                                'titre' => $titre,
                                'lien'  => $lien
                                ));
        return $requete->fetchAll();  
}