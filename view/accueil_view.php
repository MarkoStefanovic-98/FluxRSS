<!--
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <h3>Voici les derniers articles: </h3>
        </div>
    </div>
</div>
-->
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
                        <?= $v->description; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>