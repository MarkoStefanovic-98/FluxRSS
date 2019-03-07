<?php
    require "model/flux_model.php";
    $id = $_GET['id'];
    $reponse = getLienSelonId($id);
    var_dump($reponse);
    $curl = curl_init();
    curl_setopt($curl,CURLOPT_URL,$reponse['lien']);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    $contenu = curl_exec($curl);
    $xml = new simpleXMLElement($contenu);

    require "view/flux_view.php";
?>