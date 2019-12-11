<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name= "viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Les formulaires, exercice 8</title>
    </head>
    <!-- Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf. -->
    <body>
        <!--Header du site avec une image -->
        <header>
            <img src="assets/img/header.png" class ="img-fluid" alt="Responsive image"/>
        </header>
        <!-- Navbar avec les exercices 7 et 8-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand">Partie 7 php, Les formulaires </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../exercice7/index.php">Ex.7<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../exercice8/index.php">Ex.8<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Recherche">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Recherche</button>
                </form>
            </div>
        </nav>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#registration">Inscription</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#connexion">Connexion</a>         
            </li>
        </ul>
        <div id="content" class="tab-content">
            <div class="tab-pane fade" id="registration">                   
                <?php
                if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_FILES['file']['name'])) {
                    ?>                            
                    <div class="row justify-content-center">
                        <div class="card border-info mb-3 text-center ">
                            <h3 class="card-header">Formulaire</h3>
                            <div class="card-body">
                                <h5 class="card-title">Vos coordonnées</h5>
                                <h6 class="card-subtitle text-muted">Merci de remplir les champs demandés</h6>
                            </div>
                            <div class="card-body text-center">
                                <!--il faut ajouter l'attribut 'enctype', pour que le navigateur du visiteur sait qu'il s'apprête à envoyer des fichiers. -->
                                <form method="post" action="index.php" enctype="multipart/form-data"> 
                                    <div class="form-row">
                                        <div class="col-md-3">
                                            <label for="civility">Civilité :
                                                <select name="civility">
                                                    <option value="Monsieur">Mr</option>
                                                    <option value="Madame">Mme</option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">                                   
                                        <label for="firstname">Votre prénom :</label>
                                        <input type="text" class="form-control" name="firstname" placeholder="Prénom" required>                                 
                                    </div>
                                    <div class="card-body text-center">
                                        <label for="lastname">Votre nom :</label>
                                        <input type="text" class="form-control" name="lastname" placeholder="Nom" required>
                                    </div>
                                    <div class="card-body text-center">                           
                                        <label for="send">Envoyer votre fichier :</label>
                                        <input type="file" class="form-control" name="file">
                                        <small id="fileHelp" class="form-text text-muted">Insérer votre fichier.</small>
                                        <button class="btn btn-info" type="submit" name="register">Inscription</button>
                                    </div>
                                    <!-- Footer du fornulaire -->
                                    <div class="card-body text-center">
                                        <a href="#" class="card-link">Cookies</a>
                                        <a href="#" class="card-link">Mentions légales</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- Modal -->
                <div class="modal fade" id="buttonRegistration" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-show="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Bienvenue</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>          
                                    <?php
                                    if (isset($_POST['lastname']) && isset($_POST['firstname'])) {
                                        $infoFile = pathinfo($_FILES['file']['name']);
                                        $extensionUpload = $infoFile['extension'];
                                        $extensionOk = array('pdf');
                                        if (in_array($extensionUpload, $extensionOk)) {
                                            echo 'Bonjour ' . $_POST['civility'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . '. <br/> ' . 'Votre fichier a été correctement téléchargé.';
                                        } else {
                                            echo 'Merci de mettre votre fichier au format pdf.';
                                        }
                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-info">Sauvegarder</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>                                                   -
                            </div>
                        </div>
                    </div>
                </div>
            </div>              
            <!-- Page de la connexion et actualités-->
            <div class="tab-pane fade show active" id="connexion">
                <div class="row">
                    <form class="form-menu-md-3 mb-4 p-4">
                        <div class="form-group">
                            <label for="login">Identifiant</label>
                            <input type="email" class="form-control" id="loginMail" placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="passwordID">Mot de passe</label>
                            <input type="password" class="form-control" id="passwordID" placeholder="Entrez votre mot de passe">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">
                                    Se souvenir de moi
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Se connecter</button>
                    </form>
                    <div class="card mb-3">
                        <h3 class="card-header">Actualités</h3>
                        <div class="card-body">
                            <h5 class="card-title">Blacksad</h5>
                            <h6 class="card-subtitle text-muted">PC, PS4, One, Switch</h6>
                        </div>
                        <img style="height: 200px; width: 100%; display: block;" src="assets/img/BlackSad.jpg" alt="Card image">
                        <div class="card-body">
                            <p class="card-text">Jeu regroupant l'univers de la bd, permettant de raconter nos déboires humains à travers ces animaux.</p>
                        </div>
                        <div class = "card-body">
                            <a href = "#" class = "card-link">Lire notre test</a>
                            <a href = "#" class = "card-link">Le jeu vous intéresse</a>
                        </div>
                        <div class = "card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>
                <div class = "row justify-content-center">
                    <div class = "card mb-3">
                        <h3 class = "card-header">Actualités</h3>
                        <div class = "card-body">
                            <h5 class = "card-title">Disco Elysium</h5>
                            <h6 class = "card-subtitle text-muted">PC</h6>
                        </div>
                        <img style = "height: 200px; width: 100%; display: block;" src = "assets/img/DiscoElysium.jpg" alt = "Card image">
                        <div class = "card-body">
                            <p class = "card-text">Voilà le commencement : vous êtes amnésique, un foutu raté et ce n'est pas qu'une question de fringues.</p>
                        </div>
                        <div class = "card-body">
                            <a href = "#" class = "card-link">Lire notre test</a>
                            <a href = "#" class = "card-link">Le jeu vous intéresse</a>
                        </div>
                        <div class = "card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src = "assets/js/jquery-3.4.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
        <script src="assets/js/script.js"></script>
        <!--Utilisation de javascript pour permettre au modal d'afficher les informations du php -->
        <?php if (isset($_POST['register'])) { ?>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#buttonRegistration').modal('show');
                });
            </script>
        <?php } ?>
    </body>
</html>