<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Accueil</title>
  <link rel="stylesheet" href="accueil.css" />
  <script src="script.js" defer></script>


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ballet:opsz@16..72&family=Baumans&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik+Gemstones&display=swap" rel="stylesheet">

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


      <div>
        <div class="lancer-quizz">
          <a href="quizz.php" class="lancer-btn-img" name="lancer-quizz">
            <img src="img/bouton-quizz.png" alt="bouton lancer le quizz"/>
          </a>
        </div>
        <div>
          <a href="createquizz.php" class="bouton-creer-quizz" name="creer-quizz">
            <span class="plus-sign">+</span> Créer un Quizz
          </a>
        </div>
      </div>

    </section>

  </main>

    <?php include 'footer.php'; ?>

</body>

</html>