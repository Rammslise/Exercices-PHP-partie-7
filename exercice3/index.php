<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Les formulaires, exercice 3</title>
    </head>
    <!-- Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis. -->
    <body>
        <p> Merci de renseigner les champs suivants :</p>
        <form method="GET" action="user.php">
            <label for ="lastname"> Votre nom : <input type ="text" name ="lastname" id ="lastname" placeholder="Doe" /></label>
            <label for ="firstname"> Votre prénom : <input type ="text" name ="firstname" id ="firstname" placeholder="Raimu" /></label>
            <input type ="submit" name ="validate" />
        </form>
    </body>
</html>