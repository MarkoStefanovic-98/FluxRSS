<?php 

if(isset($_SESSION['connecte']) AND $_SESSION['lvl']>1)
{
    require "model/requete_model.php";
    $id_f = $_GET['id'];

            if(isset($_POST["case5"]))
            {
                if(!empty($_POST['titre']) AND !empty($_POST['lien']))
                {
                    $titre = htmlentities($_POST['titre']);
                    $lien = htmlentities($_POST['lien']);
                    if($reponse = modifFlux($titre,$lien,$id_f)){
                        header("Location:profil");
                    }
                }else{
                    $message_case4 = "Tous les champs doivent être remplis";
                }
            }
  
}else{
    header("Location:accueil");
}
require "view/requete_view.php";
?>