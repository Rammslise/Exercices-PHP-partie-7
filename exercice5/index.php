<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name= "viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Les formulaires, exercice 5</title>
    </head>
    <!-- Créer un formulaire sur la page index.php avec :
    .Une liste déroulante pour la civilité (Mr ou Mme)
    .Un champ texte pour le nom
    .Un champ texte pour le prénom
Ce formulaire doit rediriger vers la page index.php.
Vous avez le choix de la méthode. -->
    <body>
        <h1> Merci de renseigner les champs suivants</h1>
        <form method="GET" action="index.php">
            <p>
                <label for="civility">Civilité :
                    <select name="civility">
                        <option value="Monsieur">Mr</option>
                        <option value="Madame">Mme</option>
                    </select>
                </label>
            </p>
            <p>
                <label for ="lastname">Votre nom : <input type="text" name="lastname" placeholder="Nom"></label>
            </p>
            <p>
                <label for="firstname">Votre prénom : <input type="text" name="firstname" placeholder="Prénom"></label>
            </p>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="exampleCheck1">Se souvenir de moi !</label>
            </div>
            <p>
                <input type ="submit" name ="validate">
            </p>
        </form>
        <p>
            <?php
            if (isset($_GET['civility']) && isset($_GET['lastname']) && isset($_GET['firstname'])) {
                echo 'Bonjour et bienvenue ' . $_GET['civility'] . ' ' . $_GET['lastname'] . ' ' . $_GET['firstname'];
            } else {
                echo 'Une erreur est survenue, merci de remplir les champs demandés';
                ?>
            <?php } ?>           
        </p>
    </body>
</html>

