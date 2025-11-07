<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="createquizz.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ballet:opsz@16..72&family=Baumans&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik+Gemstones&display=swap" rel="stylesheet">
    <title>Squizzel_RUN/Création_de_quizz</title>
</head>
<body>
    <header>
        <?php include('header.php') ?>
    </header>

    <main>
        <span class="titre">|Création de quizz</span>

        <section>
            <form action="" method="post">

                <!-- En-tête du formulaire -->
                <div id="header_form">
                    <div id="header_lvl1_form">
                        <div id="header_lvl2_form">
                            <label for="title_quizz">Choisir un titre :</label>
                            <input id="theme_quizz_id" type="text" name="title_quizz" placeholder="Titre du quizz" maxlength="50">
                        </div>
                        <div id="header_lvl2_form">
                            <label for="champs">Choisir un thème :</label>
                            <select name="theme_quizz" id="theme_quizz_id">
                                <option value="nature_option">Nature</option>
                                <option value="chasse_option">Chasse</option>
                                <option value="peche_option">Pêche</option>
                                <option value="potager_option">Potager</option>
                                <option value="charcuterie_option">Charcuterie</option>
                                <option value="voyage_option">Voyage</option>
                                <option value="art_option">Art Contemporain</option>
                            </select>
                        </div>
                    </div>
                    <label class="file_choose">
                        <input id="file_choose_img" type="file" name="image_quizz">
                        <span class="file_choose_img_custom"><img src="img/Add_img.png" alt=""></span>
                        <span class="file_choose_img_text">Ajouter une photo</span>
                    </label>
                </div>

                <!-- Question et réponse à remplir dans le formulaire -->

                <!-- La question posée -->
                <div class="my_question_quizz">
                    <label for="question_quizz">Question n°""</label>
                    <input class="my_question_create" type="text" name="question_quizz_?" placeholder="Inscrire une question">
                        <!-- Les réponses possibles -->
                    <div class="my_response_quizz">
                        <div class="column_class">
                            <label for="response_quizz_a">Réponse A :</label>
                            <input class="size_input_response" type="text" name="response_quizz_a">                        
                        </div>     
                        <div class="column_class">
                            <label for="response_quizz_b">Réponse B :</label>
                            <input class="size_input_response" type="text" name="response_quizz_b">                        
                        </div>
                        <div class="column_class">
                            <label for="response_quizz_c">Réponse C :</label>
                            <input class="size_input_response" type="text" name="response_quizz_c">
                        </div>
                        <div class="column_class">
                            <label for="response_quizz_d">Réponse D :</label>
                            <input class="size_input_response" type="text" name="response_quizz_d">
                        </div>
                    </div>                      

                    <div class="answer-selector-v1">
                        <span class="label-v1">Bonne Réponse :</span>
                        <div class="buttons-v1">
                            <input type="radio" name="answer-v1" id="v1-a" value="a">
                            <label for="v1-a">A</label>
                            <input type="radio" name="answer-v1" id="v1-b" value="b">
                            <label for="v1-b">B</label>
                            <input type="radio" name="answer-v1" id="v1-c" value="c">
                            <label for="v1-c">C</label>
                            <input type="radio" name="answer-v1" id="v1-d" value="d">
                            <label for="v1-d">D</label>
                        </div>
                    </div>
                </div>

                <!-- Ajout d'un bouton pour une question de plus -->
                <div class="row_class">
                    <input type="button" name="add_button" class="add_button_none">
                    <span><img class="add_button" src="img/Button_+++.png" alt=""></span>
                    <label class="add_button_label" for="add_button_add">Ajouter une question</label>
                </div>
                 
            </form>


        </section>







    </main>



    <footer>
        <?php include('footer.php') ?>
    </footer>
    
</body>
</html>