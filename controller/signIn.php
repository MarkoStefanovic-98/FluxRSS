<?php
    require "model/signIn_model.php";

	if(isset($_POST['submit'])){
        if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']) AND !empty($_POST['login'])){
        $email = htmlentities($_POST['email']);
            $login = htmlentities($_POST['login']);
        $nom = htmlentities($_POST['nom']);
        $prenom = htmlentities($_POST['prenom']);        
        $mdp = htmlentities(sha1($_POST['mdp']));
        $mdp2 = htmlentities(sha1($_POST['mdp2']));
        if($mdp == $mdp2){
            if(preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email))
            {
                if ( preg_match ( '#^[a-z][a-z-éèçàù\']{0,18}[a-zéèçàù]$#i' , $nom ) )
                {
                    if ( preg_match ( '#^[a-z][a-z-éèçàù\']{0,18}[a-zéèçàù]$#i' , $prenom ) )
                    {
        $req = addUser($email,$login,$nom,$prenom,$mdp);
        if($req == true){
            echo "<meta http-equiv='refresh' content='2; URL=index.php?page=accueil' />";
            die("Inscription réussie");
        }
        else
        {
        	echo "<meta http-equiv='refresh' content='3; URL=index.php?page=inscription' />";
            die("Erreur lors de l'inscription, merci de réessayer");
        }
                    }else{
                        $message_error = "Votre prénom n'est pas conforme";
                    }
                }else{
                    $message_error = "Votre nom n'est pas conforme";
                }
            }else{
                $message_error = "Votre e-mail n'est pas conforme";
            }
        }else{
            $message_error = "Vos deux mots de passe ne correspondent pas !";
        }
        }else{
            $message_error = "Tous les champs doivent être replis";
        }
    }

    require "view/signIn_view.php";
?>