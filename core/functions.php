<?php
    function getFlux()
    {
        global $bdd;
        $requete = $bdd->query("SELECT * FROM flux");
        return $reponse = $requete->fetch();
    }
