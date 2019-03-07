<?php
    require "model/accueil_model.php";

//    $title = "Accueil";
//
//    $articles = get_last_articles(0,5);
//    
//    foreach($articles as $k => $v)
//    {
//        $articles[$k]['contenu'] = str_sub($articles[$k]['contenu']);
//    }

?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-10 col-md-offset-2">
                <h1>Les derniers articles<?php if(!isset($_SESSION['connecte'])){ echo "(connectez vous pour voir plus de contenu)" ; } ?></h1>
            </div>
        </div>
    </div>


    <?php 

    
$reponse = getLien();
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,$reponse['lien']);
var_dump ($reponse);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
$contenu = curl_exec($curl);
$xml = new simpleXMLElement($contenu);
foreach($xml->channel->item as $v){
    
    require "view/accueil_view.php";
    
     } 

 
    
?>