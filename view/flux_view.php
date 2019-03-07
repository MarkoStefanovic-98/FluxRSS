<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-sm-10 col-md-offset-2">
            <h3>Ce flux RSS est récupéré depuis <?= $reponse["titre"]; ?></h3>
        </div>
    </div>
</div>
<?php foreach($xml->channel->item as $v){
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-10 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>
                            <?= $v->title; ?>
                        </h3>
                    </div>
                    <div class="panel-body">

                    <?php $date = date_create($v->pubDate); 
            echo $date->format("D, d M Y H:i:s"); ?>
                        <div><?= $v->description; ?></div>
                        <div>Retrouvez cette actualité directement sur <a href="<?= $v->guid; ?>" target="_blank"><?= $reponse['titre']; ?></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
