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
    <div class="formContainer">
        <form action="" method="post" class="">
            <div class="champ margin1">
                <label for="email" class="nomChamp whiteGrey">Email :</label>
                <input type="email" id="email" name="email" class="contentChamp BGMediumBlue" placeholder="email"
                    required>
            </div>
            <div class="champ margin1">
                <label for="password" class="nomChamp whiteGrey">mot de passe :</label>
                <input type="password" id="password" name="password" class="contentChamp BGMediumBlue"
                    placeholder="mot de passe" required>
            </div>
            <div class="liens ">

                <a href="forgetpassword.php" class="lien lightBlue">Mot de passe oublié</a>
                <a href="inscription.php" class="lien lightBlue">Pas de compte ? s'inscrire</a>

            </div>
            <div class="button margin1">
                <button type="submit" class="BGOrange" name="envoyer">Envoyer</button>
            </div>
        </form>
    </div>
</body>

</html>