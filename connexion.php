<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="groupe 3 les blasés du blason">
    <title>Connectez vous a squizzel run</title>
    <link rel="stylesheet" type="text/css" href="connexion_inscription.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ballet:opsz@16..72&family=Baumans&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik+Gemstones&display=swap" rel="stylesheet">

</head>

<body>

     <?php include 'header.php'; ?>

    <main>

        <span class="se_connecter">|Se connecter</span>

        <section class="section_formulaire">
            <div class="formContainer">
            
                <form action="" method="post" class="form_connexion">
            
                    <div class="email_block">
                        <label for="email" class="email_label">Email :</label>
                        <input type="email" id="email" name="email" class="email" placeholder="email"
                            required>
                    </div>
            
                    <div class="psw_block">
                        <label for="password" class="psw_label">mot de passe :</label>
                        <input type="password" id="password" name="password" class="password"
                            placeholder="mot de passe" required>
                    </div>
            
                    <div class="bottom_links">
                        <a href="forgetpassword.php" class="link_frgt_psw">Mot de passe oublié</a>
                        <a href="inscription.php" class="link_inscription">Pas de compte ? s'inscrire</a>
                    </div>
            
            
                    <div class="div_btn_send">
                        <button type="submit" class="btn_send" name="envoyer" id="submit_btn">Se connecter</button>
                    </div>
            
            
                </form>
            
            </div>
        </section>

    </main>

    <?php include 'footer.php'; ?>
    
</body>

</html>