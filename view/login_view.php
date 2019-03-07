<div class="hauteur"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                           CONNEXION
                </div>
                <div class="panel-body">
            <form action="<?= BASE_URL; ?>/login" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control"  id="email" name="email" type="text">
                </div>
                <div class="form-group">
                    <label for="mdp">Mot de passe</label>
                    <input class="form-control" id="mdp" name="mdp" type="password">
                </div>
                <div class="form-group">
                        Se souvenir de moi <input name="remember" type="checkbox">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" id="submit" name="submit" type="submit">
                </div>
                <div class="form-group">
                        <a href="<?= BASE_URL; ?>/oublimdp">Mot de passe oublié?</a>
                </div>
                <div class="form-group">
                    <a href="<?= BASE_URL; ?>/signIn">Pas encore inscrit ?</a>
                </div>
                
            </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-4">
        
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-4">
        
        </div>
    </div>
</div>
<div class="hauteur-page"></div>
