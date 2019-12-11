<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Les formulaires, exercice 4</title>
    </head>
    <!-- Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises. -->
    <body>
        <p> 
            <?php
            if (!empty($_POST['lastname']) && !empty($_POST['firstname'])) {
                echo 'Bonjour et bienvenue ' . $_POST['lastname'] . ' ' . $_POST['firstname'];
            } else {
                echo 'Une erreur est survenue, veuillez remplir les champs correctement';
                ?>
            <?php } ?>           
        </p>

    </body>
</html>

