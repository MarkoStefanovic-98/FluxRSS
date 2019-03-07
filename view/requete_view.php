<div class="hauteur"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-sm-8 col-xs-12 col-md-offset-3 col-sm-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            Modifier un flux RSS
        </div>
        <div class="panel-body">
            <form method="post">
                <?php
                $requete = $bdd->query("SELECT * FROM flux WHERE id_f=".$id_f);
                while($reponse_liste_flux = $requete->fetch()){ ?>
                    <div class="form-group">
                        <label>Nom du flux:</label>
                        <input type="text" class="form-control" name="titre" value="<?= $reponse_liste_flux['titre']; ?>" />
                        <label>Lien du flux:</label>
                        <input type="text" class="form-control" name="lien" value="<?= $reponse_liste_flux['lien']; ?>" />
                        <button class="btn btn-primary" type="submit" name="case5" ><i class="fa fa-refresh"></i>Modifier</button>
                    </div>
                    <?php } ?>
            </form>
            <?php if(isset($message_case4)){echo $message_case4;} ?>
        </div>
    </div>
</div>
    </div>
    <div class="hauteur-page"></div>
</div>
