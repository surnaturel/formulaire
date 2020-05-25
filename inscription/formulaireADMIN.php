<!DOCTYPE html>
    <html>
    <head>
        <title>Nouveau ADMIN</title>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="s²tylesheet" media="screen" type="text/css"  href="./public/css/formulaire.css"/> 
    </head>
    <body>
        <?php
            include("public/menu.php");
        ?>
        
        <div class="container">
            <div class="jumbotron text-center">
                <h1>Formulaire pour les administrateurs</h1>
                 <p>renseigner tous les champs</p>
            </div>
            <div class="card bg-primary text-white mt-4">
                <div class="card-head">Veillez saisir les donées du client</div>
            </div>
            <div class="card bg-light text-dark">
                <div class="card-body">
                    <form method="POST" action="insertClient.php" class="form">
                        <div class="form_nom form-row">
                            <div class="form-group col-md-6">
                                <label for="nom_client">Entrez votre nom :</label>
                                <input type="text" name="nom_client" class="form-control" id="nom_client" placeholder="Nom">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nom_jeune_fille">Entrez votre nom de jeune fille :</label>
                                <input type="text" name="nom_jeune_fille" class="form-control" id="nom_jeune_fille" placeholder="Entrez votre nom de jeune fille :">
                                <small id="emailHelp" class="form-text text-muted">Si vous etes mariée .</small>
                            </div>
                        </div>
                        <div class="form_nom form-row">
                            <div class="form-group col-md-6">
                                <label for="prenom_client">Entrez votre nom prenom :</label>
                                <input type="text" name="prenom_client" class="form-control" id="prenom_client" placeholder="Entrez votre prenom :">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Entrez votre email :</label>
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                        </div>
                        <div class="form_nom form-row">
                            <div class="form-group  col-md-6">
                                <label for="tel_phone">Entrez votre numero de telephone :</label>
                                <input type="tel" name="tel_phone" class="form-control" id="tel_phone" placeholder="Entrez votre numero de telephone :">
                            </div>
                            <div class="form-group  col-md-6">
                                <label for="ville">Entrez votre ville :</label>
                                <input type="text" name="ville" class="form-control" id="ville" aria-describedby="emailHelp" placeholder="Enter vote ville">
                            </div>
                        </div>
                        <div class="form_nom form-row">
                            <div class="form-group form_nom1 col-md-6">
                                <label for="code_postal">code postal</label>
                                <input type="text" name="code_postal" class="form-control" id="code_postal" placeholder="Entrez votre code postal :">
                            </div>
                            <div class="form-group form_nom1 col-md-6">
                                <label for="date_naissance_client">Entrez votre date naissance :</label>
                                <input type="date" name="date_naissance_client" class="form-control" id="date_naissance_client" aria-describedby="emailHelp" placeholder="Enter vote date naissance ">
                            </div>
                        </div>
                        <div class="from-group">
                            <label for="domaine_competence">Competence :</label>
                        <select name="domaine_competence" class="form-control" id="domaine_competence" onchange="this.form.submit()">
                            <option value="all" <?php if($domaine_competence==='all') echo 'selected' ?> >Tous le Personel</option>
                            <option value="sage femme"   <?php if($domaine_competence==='sage femme')   echo 'selected' ?> >Sage femme</option>
                            <option value="medecin"   <?php if($domaine_competence==='medecin')   echo 'selected' ?> >Medecin</option>
                            <option value="ecographiste"   <?php if($domaine_competence==='ecographiste')   echo 'selected' ?> >Ecographiste</option>
                            <option value="aide soignante"   <?php if($domaine_competence==='aide soignante')   echo 'selected' ?> >Aide soignante</option>
                            <option value="infirmiere"   <?php if($domaine_competence==='infirmiere')   echo 'selected' ?> >Infirmiere</option>
                            <option value="secretaire"   <?php if($domaine_competence==='secretaire')   echo 'selected' ?> >Secretaire</option>
                            <option value="service technique"   <?php if($domaine_competence==='service technique')   echo 'selected' ?> >Service Technique</option>
                            <option value="gardien"   <?php if($domaine_competence==='gardien')   echo 'selected' ?> >Gardien</option>
                            <option value="tresoriere principal"   <?php if($domaine_competence==='tresoriere principal')   echo 'selected' ?> >Tresoriere Principal</option>
                            <option value="tresoriere adjoint"   <?php if($domaine_competence==='tresoriere adjoint')   echo 'selected' ?> >Tresoriere Adjoint</option>
                        </select>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-success mt-2"><span class="fa fa-save"></span>
                        Enregistrer des clients....</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
