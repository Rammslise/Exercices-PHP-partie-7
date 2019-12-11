<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Les formulaires, exercice 3</title>
    </head>
    <!-- Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis. -->
    <body>
        <p> 
            <?php
            //isset = msg(Une erreur s'est produite, veuillez contacter le service informatique)
            if (empty($_GET['lastname']) && empty($_GET['firstname'])) {
                echo 'Merci de remplir les champs demandés';
            } else {
                echo 'Bonjour ' . $_GET['lastname'] . ' ' . $_GET['firstname'];
                ?>
<?php } ?>           
        </p>
    </form>
</body>
</html>
