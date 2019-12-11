<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name= "viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Les formulaires, exercice 6</title>
    </head>
    <!-- Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. 
    Dans le cas contraire, c'est l'inverse. Utiliser qu'une seule page. -->
    <body>
        <nav class="navbar bg-dark justify-content-center">
            <span class="navbar-brand mb-0 h1 text-white">Vos coordonnées</span>
        </nav>
        <p>
            <?php
            //si les cases prénom et nom sont vides
            if (empty($_GET['firstname']) && empty($_GET['lastname'])) {
                ?>   
                <!--Alors on affiche le formulaire complet -->
            <form method="get" action="index.php">
                <div class="form-row">
                    <div class="col-md-3 mb-0 p-2">
                        <label for="civility">Civilité :
                            <select name="civility">
                                <option value="Monsieur">Mr</option>
                                <option value="Madame">Mme</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-3 p-3">
                        <label for="firstname">Votre prénom :</label>
                        <input type="text" class="form-control" name="firstname" placeholder="Prénom" required>
                    </div>
                    <div class="col-md-3 mb-3 p-3">
                        <label for="lastname">Votre nom :</label>
                        <input type="text" class="form-control" name="lastname" placeholder="Nom" required>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3 p-3">
                <button class="btn btn-dark" type="submit" name="validate">Inscription</button>
            </div>
        </form> 
        <?php
        //sinon si les cases sont remplies, on affiche la phrase 'Bienvenue....' 
    } elseif (isset($_GET['lastname']) && ($_GET['firstname'])) {
        echo 'Beenvenue ' . $_GET['civility'] . ' ' . $_GET['lastname'] . ' ' . $_GET['firstname'];
    }
    ?>
</p>
</body>
</html>

