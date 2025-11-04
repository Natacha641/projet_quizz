<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/form.css">
    <title>Squizzel_RUN/Création_de_quizz</title>
</head>
<body>
    <header>

    </header>

    <main>
        <h3>| Création de quizz</h3>

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
                        <span class="file_choose_img_custom"><img src="src/img/Add_img.png" alt=""></span>
                        <span class="file_choose_img_text">Ajouter une photo</span>
                    </label>
                </div>

                <!-- Question et réponse à remplir dans le formulaire -->

                <!-- La question posée -->
                <label for="question_quizz">Question n°""</label>
                <input type="text" name="question_quizz_?" placeholder="Inscrire une question">
                <!-- Les réponses possibles -->
                <label for="response_quizz_a">Réponse A :</label>
                <input type="text" name="response_quizz_a">
                
                <label for="response_quizz_b">Réponse B :</label>
                <input type="text" name="response_quizz_b">
                
                <label for="response_quizz_c">Réponse C :</label>
                <input type="text" name="response_quizz_c">
                
                <label for="response_quizz_d">Réponse D :</label>
                <input type="text" name="response_quizz_d">

                <!-- La question posée -->
                <label for="question_quizz">Question n°""</label>
                <input type="text" name="question_quizz_?" placeholder="Inscrire une question">
                <!-- Les réponses possibles -->
                <label for="response_quizz_a">Réponse A :</label>
                <input type="text" name="response_quizz_a">
                
                <label for="response_quizz_b">Réponse B :</label>
                <input type="text" name="response_quizz_b">
                
                <label for="response_quizz_c">Réponse C :</label>
                <input type="text" name="response_quizz_c">
                
                <label for="response_quizz_d">Réponse D :</label>
                <input type="text" name="response_quizz_d">

                <!-- La question posée -->
                <label for="question_quizz">Question n°""</label>
                <input type="text" name="question_quizz_?" placeholder="Inscrire une question">
                <!-- Les réponses possibles -->
                <label for="response_quizz_a">Réponse A :</label>
                <input type="text" name="response_quizz_a">
                
                <label for="response_quizz_b">Réponse B :</label>
                <input type="text" name="response_quizz_b">
                
                <label for="response_quizz_c">Réponse C :</label>
                <input type="text" name="response_quizz_c">
                
                <label for="response_quizz_d">Réponse D :</label>
                <input type="text" name="response_quizz_d">

                <!-- La question posée -->
                <label for="question_quizz">Question n°""</label>
                <input type="text" name="question_quizz_?" placeholder="Inscrire une question">
                <!-- Les réponses possibles -->
                <label for="response_quizz_a">Réponse A :</label>
                <input type="text" name="response_quizz_a">
                
                <label for="response_quizz_b">Réponse B :</label>
                <input type="text" name="response_quizz_b">
                
                <label for="response_quizz_c">Réponse C :</label>
                <input type="text" name="response_quizz_c">
                
                <label for="response_quizz_d">Réponse D :</label>
                <input type="text" name="response_quizz_d">

                <!-- La question posée -->
                <label for="question_quizz">Question n°""</label>
                <input type="text" name="question_quizz_?" placeholder="Inscrire une question">
                <!-- Les réponses possibles -->
                <label for="response_quizz_a">Réponse A :</label>
                <input type="text" name="response_quizz_a">
                
                <label for="response_quizz_b">Réponse B :</label>
                <input type="text" name="response_quizz_b">
                
                <label for="response_quizz_c">Réponse C :</label>
                <input type="text" name="response_quizz_c">
                
                <label for="response_quizz_d">Réponse D :</label>
                <input type="text" name="response_quizz_d">

                <!-- Ajout d'un bouton pour une question de plus -->
                 <input type="button" name="add_button" class="add_button_id">
                 <label for="add_button_add">Ajouter une question</label>
            </form>


        </section>







    </main>



    <footer>

    </footer>
    
</body>
</html>