<div class="hauteur"></div>
<div class="container-fluid">


    <div class="row">
        <div class="col-md-2 col-sm-2">
            <?php
            if(isset($_SESSION['id']) AND $_SESSION['lvl'] > 1 ){
        ?>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Vos Flux RSS
                    </div>
                    <div class="panel-body">
                        <?php
                $requete = $bdd->query("SELECT * FROM flux");
                while($reponse_liste_flux = $requete->fetch()){ ?>
                            <div class="form-group">
                                <label>Nom du flux:</label>
                                <p>
                                    <?= $reponse_liste_flux['titre']; ?>
                                </p>
                                <label>Lien du flux:</label>
                                <p>
                                    <?= $reponse_liste_flux['lien']; ?>
                                </p>
                                <a class="btn btn-primary" name="case5" href="<?= BASE_URL; ?>/index.php?p=requete&id=<?= $reponse_liste_flux['id_f']; ?>"><i class="fa fa-refresh"></i>Modifier</a>
                                <a class="btn btn-primary delete-flux" id="<?= $reponse_liste_flux['id_f']; ?>" href="#"><i class="fa fa-trash-o"></i>Supprimer</a>
                            </div>
                            <?php } ?>
                            <?php if(isset($message_case4)){echo $message_case4;} ?>
                    </div>
                </div>

                <?php
            }
        ?>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="panel panel-default">
                <?php
     if(isset($_SESSION['id']))
        {
     $req = $bdd->query("SELECT * FROM user WHERE id_u=".$_SESSION['id']);
     $rep = $req->fetch();
            
         }
         
     ?>
                    <div class="panel-heading">
                        Informations personnelles
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#login" data-toggle="tab">Infos personnelles</a>
                            </li>
                            <li class=""><a href="#email" data-toggle="tab">Email</a>
                            </li>
                            <li class=""><a href="#mdp" data-toggle="tab">Mot de passe</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="login">
                                <form method="post">
                                    <h4>Email:<input class="form-control" type="text" name="email" value="<?php echo $rep['email']; ?>" /></h4>
                                    <h4>Nom:<input class="form-control" type="text" name="nom" value="<?php echo $rep['nom']; ?>" /></h4>
                                    <h4>Prénom:<input class="form-control" type="text" name="prenom" value="<?php echo $rep['prenom']; ?>" /></h4>
                                    <h4>N° de téléphone:<input class="form-control" type="text" name="telephone" value="<?php if(isset($rep['telephone'])) echo $rep['telephone']; ?>" /></h4>
                                    <button class="btn btn-default" type="submit" name="case1"><i class=" fa fa-refresh " ></i> Update</button>
                                </form>
                                <?php if(isset($message_co)){echo $message_co;} ?>
                            </div>
                            <div class="tab-pane fade" id="email">
                                <form method="post">
                                    <h4>Ancien E-mail:<input class="form-control" type="email" name="email" value="" /></h4>
                                    <h4>Nouvelle E-mail:<input class="form-control" type="email" name="email2" value="" /></h4>
                                    <h4>Confirmez:<input class="form-control" type="email" name="email3" value="" /></h4>
                                    <button class="btn btn-default" type="submit" name="case2"><i class=" fa fa-refresh " ></i> Update</button>
                                </form>
                                <?php if(isset($message_case2)){echo $message_case2;} ?>
                            </div>
                            <div class="tab-pane fade" id="mdp">
                                <form method="post">
                                    <h4>Ancien mot de passe:<input class="form-control" type="password" name="mdp" value="" /></h4>
                                    <h4>Nouveau mot de passe:<input class="form-control" type="password" name="mdp2" value="" /></h4>
                                    <h4>Confirmez:<input class="form-control" type="password" name="mdp3" value="" /></h4>
                                    <button class="btn btn-default" type="submit" name="case3"><i class=" fa fa-refresh " ></i> Update</button>
                                </form>
                                <?php if(isset($message_case3)){echo $message_case3;} ?>
                            </div>
                        </div>
                    </div>




            </div>

        </div>
        <?php
            if(isset($_SESSION['id']) AND $_SESSION['lvl'] > 1 ){
        ?>
            <div class="col-md-2 col-sm2-col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Ajouter un flux RSS
                    </div>
                    <div class="panel-body">
                        <form method="post">
                            <label>Nom du flux:</label>
                            <input type="text" class="form-control" name="titre" />
                            <label>Lien du flux:</label>
                            <input type="text" class="form-control" name="lien" />
                            <button class="btn btn-primary" type="submit" name="case4"><i class="fa fa-plus"></i>Ajouter</button>
                        </form>
                        <?php if(isset($message_case4)){echo $message_case4;} ?>
                    </div>
                </div>
            </div>
            <?php
            }
        ?>

                
    </div>
    <div id="myalertbox" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <p id="modal-text"></p>
                                <a id="yes" class="btn btn-success" href="">Oui</a>&nbsp;<a class="btn btn-danger" data-dismiss="modal">Non</a>
                            </div>
                        </div>
                    </div>
                </div>

</div>