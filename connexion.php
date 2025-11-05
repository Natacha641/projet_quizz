<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="groupe 3 les blasés du blason">
    <title>Connectez vous a squizzel run</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="connexion.css">
</head>

<body class="BGBlue margin1">
    <h1 class="white">|Se connecter</h1>
    <div class="center flex t100">
        <form action="" method="post" class="center t100 h90vh flex wrap column margin0">
            <div class="column t50 ">
                <label for="email" class="left white size10  ">Email :</label>
                <input type="email" id="email" name="email" class="t100 BGMediumBlue marginTop-10" placeholder="email" required>
            </div>
            <div class="column t50 wrap">
                <label for="password" class="t100 left white size10 margin0">mot de passe :</label>
                <input type="password" id="password" name="password" class="t100 BGMediumBlue marginTop-10" placeholder="mot de passe" required>
            </div>
            <div class="flex  buttonContainer ">

                <a href="forgetpassword.php" class="space-between t100">Mot de passe oublié</a>
                <a href="inscription.php" class="space between t100">Pas de compte ? s'inscrire<a>

            </div>
            <div class="right buttonContainer">
                <button type="submit" class="BGOrange">Envoyer</button>
            </div>
        </form>
    </div>
</body>

</html>