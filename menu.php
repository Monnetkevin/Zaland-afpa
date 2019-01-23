<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style> h1{ text-align: center; color: royalblue;}    
       
    
    </style>

</head>
<br><br>
<div class="col-md-6 offset-md-3 shadow p-3 mb-5 bg-white ">
    <form method="post" action="inscription.php" class="bootstrap-iso" id="form" name="formulaire">
        <div class="row">
            <div class="col-sm-6">
                <h5>Nom :</h5>
                <div class="form-group input-group ">
                    <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </div>
                    <input class="form-control has-error" id="nom" name="nom" placeholder="Nom" type="text" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h5>Prenom :</h5>
                <div class="form-group input-group">
                    <div class="input-group-addon">
                        <i class="far fa-user"></i>
                    </div>
                    <input class="form-control has-error" name="prenom" placeholder="Prenom" type="text" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h5>Genre :</h5>
                <div class="form-group input-group">
                    <div class="input-group-addon">
                        <i class="fas fa-transgender"></i>
                    </div>
                    <select class="form-control has-error" name="genre" type="text">
                        <option>HOMME</option>
                        <option>FEMME</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h5>Date d'anniversaire :</h5>
                <div class="form-group input-group">
                    <div class="input-group-addon">
                        <i class="fas fa-birthday-cake"></i>
                    </div>
                    <input class="form-control has-error" name="dateNaissance" type="date" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <h5>Numéro Rue :</h5>
                <div class="form-group input-group ">
                    <div class="input-group-addon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <input class="form-control has-error" name="numRue" placeholder="Numéro" type="text" />
                </div>
            </div>
            <div class="col-sm-4">
                <h5>Adresse :</h5>
                <div class="form-group input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <input class="form-control has-error" name="nomRue" placeholder="Adresse" type="text" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <h5>Code postal :</h5>
                <div class="form-group input-group ">
                    <div class="input-group-addon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <input class="form-control has-error" name="CP" placeholder="Postal" type="text" />
                </div>
            </div>
            <div class="col-sm-4">
                <h5>Ville :</h5>
                <div class="form-group input-group">
                    <div class="input-group-addon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <input class="form-control has-error" name="ville" placeholder="Ville" type="text" />
                </div>
            </div>
            <div class="col-sm-4">
                <h5>Pays :</h5>
                <div class="form-group input-group">
                    <div class="input-group-addon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <input class="form-control has-error" name="pays" placeholder="Pays" type="text" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h5> E-mail :</h5>
                <div class="form-group input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-at"></i>
                    </div>
                    <input class="form-control has-error" name="mail" placeholder="E-mail" type="email" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h5> Mot de passe :</h5>
                <div class="form-group input-group">
                    <div class="input-group-addon">
                        <i class="fab fa-expeditedssl"></i>
                    </div>
                    <input class="form-control has-error" name="pass" placeholder="Mot de passe" type="password" />
                </div>
            </div>
        </div>
        <input class="btn btn-primary" id="envoyer_mail" type="submit" value="Inscription">
    </form>
</div>
