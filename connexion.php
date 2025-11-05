<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="groupe 3 les blasés du blason">
    <title>Connectez vous a squizzel run</title>
    <link rel="stylesheet" type="text/css" href="style0.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>     
    <link href="https://fonts.googleapis.com/css2?family=Ballet:opsz@16..72&family=Baumans&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik+Gemstones&display=swap" rel="stylesheet">
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