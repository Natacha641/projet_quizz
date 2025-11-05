<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js" defer></script>
    </head>

  <body>

    <?php include 'header.php'; ?>

    <main>
        
      <section class="accueil">
        <div class="colonne-themes">
            <h2>Thèmes</h2>
            <div class="filtre">
                <label><input type="checkbox" value="art"><span>Art contemporain</span></label>
                <label><input type="checkbox" value="chasse"><span>Chasse</span></label>
                <label><input type="checkbox" value="peche"><span>Pêche</span></label>
                <label><input type="checkbox" value="nature"><span>Nature</span></label>
                <label><input type="checkbox" value="potager"><span>Potager</span></label>
                <label><input type="checkbox" value="nourriture"><span>La bouffe, la bouffe, la bouffe !</span></label>
                <label><input type="checkbox" value="devweb"><span>Développement web</span></label>
            </div>
        </div>

        <div class="lancer-quizz">
            <a href="page-du-quizz.html" class="lancer-btn-img"> 
                <img src="bouton-lancer-le-quizz.png" alt="bouton lancer le quizz"/>
            </a>
        </div>
      </section>

      <a href="connexion.php" class="bouton-creer-quizz">
        <span class="plus-sign">+</span> Créer un Quizz
      </a>

    </main>

    <?php include 'footer.php'; ?>

  </body>
</html>
