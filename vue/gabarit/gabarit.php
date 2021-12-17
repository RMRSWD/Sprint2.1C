<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de la banque</title>
    <link rel="stylesheet" href="vue/style/style.css">
</head>
<body>
    <h1>Bienvenue</h1>
    <h2>Je vous présente un site de gestion d'une banque</h2>
    <form class="form1" action="site.php" method="post">
        <fieldset>
            <legend>Contactez-vous</legend>
            <p>
                <label for="login">Login:</label>
                <input type="text" name="login" id="login" value=""required/>
            </p>
            <p>
                <label for="pass">Mot de passe:</label>
                <input type="password" name="mdp"
                 id="pass" value="" required/>
            </p>
            <p>
                <input type="submit" name="connect" value="Connect" />
            </p>
        </fieldset>
    </form>
    <?php
        echo $contenu;
    ?>
    
</body>
</html>