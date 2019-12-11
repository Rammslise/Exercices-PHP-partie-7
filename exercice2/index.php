<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Les formulaires, exercice 2</title>
    </head>
    <!-- Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST. -->
    <body>
        <!--Il y a deux attributs très importants à connaître pour la balise<form> : la méthode (method) et la cible (action). 
        Il y a 2 façons d'utiliser 'method' : $_POST (Les données ne transiteront pas par l'URL, l'utilisateur ne les verra donc pas passer dans la barre d'adresse.
        Cette méthode permet d'envoyer autant de données que l'on veut, ce qui fait qu'on la privilégie le plus souvent.) ou $_GET.-->
        <p> Merci de renseigner les champs suivants :</p>
        <form method="POST" action="user.php">
            <label for ="lastname"> Votre nom : <input type ="text" name ="lastname" id ="lastname" placeholder="Doe" /></label>
            <label for ="firstname"> Votre prénom : <input type ="text" name ="firstname" id ="firstname" placeholder="Raimu" /></label>
            <input type ="submit" name ="validate" />
        </form>
    </body>
</html>