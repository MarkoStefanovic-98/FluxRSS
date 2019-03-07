<?php
    require "model/oublimdp.php";

	if(isset($_POST['submit'])) 
    {
        $email = $_POST['email'];        
        if($reponse = verifEmailAndIp($email)){
            $newmdp = randomMdp();
            changeMdp($email,$newmdp);
            mail($email , "Oubli de mot de passe" , "Votre nouveau mot de passe est :".$newmdp);
            echo "<meta http-equiv='refresh' content='2; URL=index.php?page=Accueil' />";
            die("Votre nouveau mot de passe a été envoyé sur votre adresse e-mail");
        }
        else
        {
        	echo "<meta http-equiv='refresh' content='3; URL=index.php?page=oublimdp' />";
            die("Impossible d'envoyer le nouveau mot de passe.");
        }
    }

    require "view/oublimdp.php";
?>
   
    