<?php
    require "model/profil_model.php";
?>
    <!-- form php -->
    <?php if(isset($_SESSION['connecte']))
{
?>

    <?php 
        if (isset($_POST['case1']))
        {
            if(!empty($_POST['telephone']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['login']))
                {
                $telephone= htmlspecialchars($_POST['telephone']);
                $login = htmlentities($_POST['login']);
                $prenom = htmlentities($_POST['prenom']);
                $nom = htmlentities($_POST['nom']);
                if ( preg_match ( '#^0[1-9]([ ._-]?[0-9]{2}){4}$#i' , $telephone ))
                {
                if ( preg_match ( '#^[a-z][a-z-éèçàù\']{0,18}[a-zéèçàù]$#i' , $nom ) )
                {
                    if ( preg_match ( '#^[a-z][a-z-éèçàù\']{0,18}[a-zéèçàù]$#i' , $prenom ) )
                    {
                    if($reponse = modifLogin($telephone,$nom,$prenom,$login)){
                        
                    header("Location:profil");
                    }
                }else{
                        $message_co = "Ce prénom a un format non valide";
                    }
                }else{
                    $message_co = "Ce nom a un format non valide";
                }
                }
                else
                {
                    $message_co = "Ce téléphone a un format non adapté.";
                } 
                }
		else
		{
		
                $message_co= "Il n'y a rien à modifier ";
        }
            
        }
        
            
?>

    <?php 

        if(isset($_POST["case2"]))
    {
        if(!empty($_POST['email']) AND !empty($_POST['email2']) AND !empty($_POST['email3']))
        {
            $email = htmlspecialchars($_POST['email']);
            $email2 = htmlspecialchars($_POST['email2']);
            $email3 = htmlspecialchars($_POST['email3']);
            if($email2 == $email3)
            {
            if(preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email))
            {
                if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email2) )
                {
                    if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email3) )
                    {
        
   
                                
                                $reqemail = $bdd -> query("SELECT email FROM user WHERE id_u =".$_SESSION['id']); 
                                $repmail = $reqemail->fetch();
                              
                                if($repmail['email'] == $email ){
                                    
                                if($reponse = modifEmail($email3)){
                                    
                                header("Location:profil");
                                }
                
                                
                            }
                           else
                                {
                                    $message_case2 = "Ce n'est pas votre ancien e-mail.";
                                }
                       
                    }
                     else
                            {
                                $message_case2 = "Cette adresse e-mail n'est pas conforme";
                            }
                } 
                else
                    {
                        $message_case2 = "Cette adresse e-mail n'est pas conforme";
                    } 
            } 
            else
                {
                    $message_case2 = "Cette adresse e-mail n'est pas conforme";
                } 
            }
            else
            {
                $message_case2 = "Les 2 adresses e-mail ne correspondent pas";
            }
                                
        }
            else{
                $message_case2 = "Tous les champs doivent être remplis";
            }
        }
        
?>

    <?php 
        if(isset($_POST["case3"]))
    {
        if(!empty($_POST['mdp']) AND !empty($_POST['mdp2']) AND !empty($_POST['mdp3']))
        {
            $mdp = htmlspecialchars(sha1($_POST['mdp']));
            $mdp2 = htmlspecialchars(sha1($_POST['mdp2']));
            $mdp3 = htmlspecialchars(sha1($_POST['mdp3']));
            if($mdp2 == $mdp3)
            {
                            $reqmdp = $bdd -> query("SELECT mdp FROM user WHERE id_u =".$_SESSION['id']); 
                            $repmdp = $reqmdp->fetch();
                            if($repmdp['mdp'] == $mdp)
                            {
                                if($mdp!=$mdp2)
                                {
                                    
                                    
                                if($reponse = modifMdp($mdp3)){
                                    
                                    
                                header("Location:profil");
                                }
                                }
                                else
                                {
                                    $message_case3 = "Le nouveau mot de passe doit être différent de l'ancien";
                                }
                                }
                                else
                                {
                                    $message_case3 = "Ce mot de passe ne correspond pas";
                                }
            } 
            else
            {
                $message_case3 = "Les 2 adresses e-mail ne correspondent pas";
            }
            }
            else{
                $message_case3 = "Tous les champs doivent être remplis";
            }
                                
        }
  
?>
        <?php 
            if(isset($_POST["case4"]))
            {
                if(!empty($_POST['titre']) AND !empty($_POST['lien']))
                {
                    $titre = htmlentities($_POST['titre']);
                    $lien = htmlentities($_POST['lien']);
                    if($reponse = addFlux($titre,$lien)){
                        header("Location:profil");
                    }
                }else{
                    $message_case4 = "Tous les champs doivent être remplis";
                }
            }
        ?>
        
     

        <?php
    require "view/profil_view.php";
?>

    <?php }else{ header("Location:index.php"); } 
// redirection vers index si le mec veut y accéder sans se connecter
?>
    <div class="hauteur-page"></div>


