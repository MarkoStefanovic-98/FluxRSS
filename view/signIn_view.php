<div class="hauteur"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    INSCRIPTION
                </div>
                <div class="panel-body">
                    <form action="<?= BASE_URL; ?>/signIn" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" name="email" type="text">
                        </div>
                           <div class="form-group">
                            <label for="login">Login</label>
                            <input class="form-control" id="login" name="login" type="text">
                        </div>
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input class="form-control" id="nom" name="nom" type="text">
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prenom</label>
                            <input class="form-control" id="prenom" name="prenom" type="text">
                        </div>
                        <div class="form-group">
                            <label for="mdp">Mot de passe</label>
                            <input class="form-control" id="mdp" name="mdp" type="password">
                        </div>
                        <div class="form-group">
                            <label for="mdp2">Confirmez Mot de passe</label>
                            <input class="form-control" id="mdp2" name="mdp2" type="password">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" id="submit" name="submit" value="S'inscrire" type="submit">
                        </div>
                    </form>
                    <?php if(isset($message_error)){ echo $message_error; } ?>
                </div>
                                     
                <div class="col-md-12">
                    <a href="<?= BASE_URL; ?>/login">Si vous etes déjà inscrit</a>
                </div>
                
            </div>
            
        </div>
    </div>
</div>
<div class="hauteur"></div>