<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Les formulaires, exercice 1</title>
    </head>
    <!-- Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode $_GET. -->
    <body>
        <!--Il y a deux attributs très importants à connaître pour la balise<form> : la méthode (method) et la cible (action). 
        Il y a 2 façons d'utiliser 'method' : $_GET (Cette méthode est assez peu utilisée car on ne peut pas envoyer beaucoup d'informations dans l'URL),
        ou post.-->
        <p> Merci de renseigner les champs suivants :</p>
        <form method="GET" action="user.php">
            <label for ="lastname"> Votre nom : <input type ="text" name ="lastname" id ="lastname" placeholder="Doe" /></label>
            <label for ="firstname"> Votre prénom : <input type ="text" name ="firstname" id ="firstname" placeholder="Raimu" /></label>
            <input type ="submit" name ="validate" />
        </form>
    </body>
</html>