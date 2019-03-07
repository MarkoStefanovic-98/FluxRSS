<?php
    require "model/login_model.php";

	if(isset($_POST['submit'])) 
    {
        $email = htmlentities($_POST['email']);
        $mdp = htmlentities(sha1($_POST['mdp']));
        if($reponse = login($email,$mdp)){
            $_SESSION['connecte']=true;
            $_SESSION['id']= $reponse['id_u'];
            $_SESSION['nom']= $reponse['nom'];
            $_SESSION['prenom']= $reponse['prenom'];
            $_SESSION['email']= $reponse['email'];
            $_SESSION['lvl']= $reponse['lvl'];
             if(isset($_POST['remember']))
            {
                $key = $reponse['id_u']."-----".sha1($reponse['email'].$reponse['mdp'].$_SERVER['REMOTE_ADDR']);
              
                
                
            }
            header("location:".BASE_URL."/accueil");
        }
        else
        {
        	echo "<meta http-equiv='refresh' content='3; URL=index.php?page=accueil' />";
            die("Mauvais identifiant, retour à la page d'accueil dans 3 secondes.");
        }
    }

    if(isset($_COOKIE['Auth']))
    {
        $auth = $_COOKIE['Auth'];
        $auth = explode('-----',$auth);
        $reponse = rememberMe($auth[0]);
        $key = sha1($reponse['email'].$reponse['mdp'].$_SERVER['REMOTE_ADDR']);
       
        
        if($key == $auth[1])
        {
            $_SESSION['connecte'] = true;
            $_SESSION['id'] = $auth[0];
            
            setcookie('Auth', $requete['id_u']."-----".sha1($requete['email'].$requete['mdp'].$_SERVER['REMOTE_ADDR']),time()+(3600*24*3),'/','localhost',false,true);
            header("location:".BASE_URL."/article");
        }
        else
        {
        setcookie('Auth','',time()-3600,'/','localhost',false,true);
            
        }
    }

    require "view/login_view.php";
?>