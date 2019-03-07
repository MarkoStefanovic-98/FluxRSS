<?php   
function getLienSelonId($id)
    {
        global $bdd;
        $requete = $bdd->query("SELECT * FROM flux WHERE id_f=".$id);
        return $reponse = $requete->fetch();
    }