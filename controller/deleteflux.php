<?php 

if(isset($_SESSION['connecte']) AND $_SESSION['lvl']>1)
{
    require "model/deleteflux_model.php";
    $id_f = $_GET['id'];
    $requete = $bdd->query("DELETE FROM flux WHERE id_f = ".$id_f);
    header("Location:accueil");
}else{
    header("Location:accueil");
}
require "view/deleteflux_view.php";
?>