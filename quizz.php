<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./quizz.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ballet:opsz@16..72&family=Baumans&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik+Gemstones&display=swap" rel="stylesheet">

</head>


<body>
    <?php  // == [Header] ==
        require_once 'header.php'; 
    ?>
    <main>
        <section class="squizz">

            <div class="theme-question">
                <span class="thematique">Thématique : Musée du Louvre</span>
                <span class="question-line">Quel est le mot de passe du Louvre ? 1/10</span>
            </div>

            <div class="answer-block">
                <div class="answers-top">
                    <button class="answer-top-left">A : 1234</button>
                    <button class="answer-top-right">B : Musée</button>
                </div>
                <div class="answers-bottom">
                    <button class="answer-bottom-left">C : Mot de passe</button>
                    <button class="answer-bottom-right">D : Louvre</button>
                </div>

                <button class="btn-validate">Valider ma réponse</button>
            </div>
        </section>
    </main>

    <?php  // == [Footer] ==
        require_once 'footer.php';  
    ?>
</body>



</html>
