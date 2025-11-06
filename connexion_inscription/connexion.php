<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="groupe 3 les blasés du blason">
    <title>Connectez vous a squizzel run</title>
    <link rel="stylesheet" type="text/css" href="./connexion_inscription.css">
</head>

<body>

     <?php  // == [Header] ==
         require_once '../header_footer/header.php'; 
     ?>

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

    <?php  // == [Footer] ==
        require_once '../header_footer/footer.php';  
    ?>
    
</body>

</html>