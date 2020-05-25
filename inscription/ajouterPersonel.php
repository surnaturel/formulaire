<!DOCTYPE html>
    <html>
    <head>
        <title>Nouveau Personage</title>
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
            <div class="jumbotron text-center mt-2">
                <h1>Formulaire des patiens et Personel de travail</h1>
                 <p>precisez toutes vos donées</p>
            </div>
            <div class="card bg-primary text-white mt-4">
                <div class="card-head">Veillez saisir les donées du Personel</div>
            </div>
            <div class="card bg-light text-dark">
                <div class="card-body">
                    <form method="POST" action="insertPersonel.php" class="form">
                        <div class="form_nom form-row">
                            <div class="form-group col-md-6">
                                <label for="nom_personel">Entrez votre nom :</label>
                                <input type="text" name="nom_personel" class="form-control" id="nom_personel" placeholder="Nom">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="prenom_personel">Entrez votre pernom :</label>
                                <input type="text" name="prenom_personel" class="form-control" id="prenom_personel" placeholder="Entrez votre Prenom :">
                                <small id="emailHelp" class="form-text text-muted">Si vous etes mariée .</small>
                            </div>
                        </div>
                        <div class="form_nom form-row">
                            <div class="form-group  col-md-6">
                                <label for="tel_personel">Entrez votre numero de telephone :</label>
                                <input type="tel" name="tel_personel" class="form-control" id="tel_personel" placeholder="Entrez votre numero de telephone :">
                            </div>
                            <div class="form-group  col-md-6">
                                <label for="sexe">Entrez votre sexe :</label>
                                <input type="text" name="sexe" class="form-control" id="sexe" aria-describedby="emailHelp" placeholder="Enter vote sexe(M/F)">
                            </div>
                        </div>
                        <div class="form_nom form-row">
                            <div class="form-group form_nom1 col-md-6">
                                <label for="code_postale_personel">code postal</label>
                                <input type="text" name="code_postale_personel" class="form-control" id="code_postale_personel" placeholder="Entrez votre code postal :">
                            </div>
                            <div class="form-group form_nom1 col-md-6">
                                <label for="date_naissance_personel">Entrez votre date naissance :</label>
                                <input type="date" name="date_naissance_personel" class="form-control" id="date_naissance_personel" aria-describedby="emailHelp" placeholder="Enter vote date naissance ">
                            </div>
                        </div>
                         <div class="form_nom form-row">
                            <label for="email_personel">Entrez votre email :</label>
                            <input type="email" name="email_personel" class="form-control" id="email_personel" aria-describedby="emailHelp" placeholder="Enter email">
                            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div><br>
                          <div class="from-group">
                            <label for="domaine_competence">Competence :</label>
                            <select name="domaine_competence" class="form-control" id="             domaine_competence">
                                <option value="all" <?php if($domaine_competence==='all')   echo 'selected' ?> >Choisir un domaine</option>
                                <option value="sage femme" <?php if($domaine_competence==='sage femme')   echo 'selected' ?> >Sage femme</option>
                                <option value="medecin" <?php if($domaine_competence==='medecin')   echo 'selected' ?> >Medecin</option>
                                <option value="ecographiste"   <?php if($domaine_competence==='ecographiste')   echo 'selected' ?> >Ecographiste</option>
                                <option value="aide soignante" <?php if($domaine_competence==='aide soignante')   echo 'selected' ?> >Aide soignante</option>
                                <option value="infirmiere"   <?php if($domaine_competence==='infirmiere')   echo 'selected' ?> >Infirmiere</option>
                                <option value="secretaire"   <?php if($domaine_competence==='secretaire')   echo 'selected' ?> >Secretaire</option>
                                <option value="service technique" <?php if($domaine_competence==='service technique')   echo 'selected' ?> >Service Technique</option>
                                <option value="gardien" <?php if($domaine_competence==='gardien')   echo 'selected' ?> >Gardien</option>
                                <option value="tresoriere principal"   <?php if($domaine_competence==='tresoriere principal')   echo 'selected' ?> >Tresoriere Principal</option>
                                <option value="tresoriere adjoint"   <?php if($domaine_competence==='tresoriere adjoint')   echo 'selected' ?> >Tresoriere Adjoint</option>
                            </select>
                        </div>
                        <div id="validation_texte">
                            <p class="validation">Si Vous attestez toutes vos information veiller valider :  <button type="submit" name="envoi" class="btn btn-success mt-2"><span class="fa fa-save"></span>
                                valider vos Informations</button></p>
                        </div>              
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" src="./public/js/index.js"></script>
        <!-- <script type="text/javascript" src="./public/js/indexE.js"></script>-->
    </body>
</html>
