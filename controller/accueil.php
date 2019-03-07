<?php

interface Loader {
  public function load($opts);
}

interface Parser {
  public function parse($content);
}

abstract class Adapter implements Loader, Parser {
  abstract public function load($content);
  abstract public function parse($content);

  public function get($url) {
    $content = $this->load($url);
    return $this->parse($content);
    
  }
}

trait HTTPLoader {
  public function load($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_USERAGENT, "curl/7.54.0");
    if( ! $rawContent = curl_exec($curl)) { 
        trigger_error(curl_error($curl)); 
    } 
    curl_close($curl);
    return $rawContent;
  }
}

trait RSSParser {
  public function parse($content) {
    $res = simplexml_load_string($content) or die("Error: Cannot create object");
    return $res;
  }
}

class RemoteRSSAdapter extends Adapter {
  use HTTPLoader, RSSParser;
}

$remoteRSSAdapter = new RemoteRSSAdapter();


//$xml = $remoteRSSAdapter->get("https://www.estrepublicain.fr/sport-lorrain/rss");
//echo $xml->channel->title . "\n";

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

$xml = $remoteRSSAdapter->get($reponse["lien"]);
/*
$xml = $remoteRSSAdapter->get("https://www.estrepublicain.fr/sport-lorrain/rss");
*/
foreach($xml->channel->item as $v){
    
    require "view/accueil_view.php";
    
     } 

 
    
?>