<?php
// traitement_quiz.php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Traitement du formulaire
    $titre = $_POST['titre'] ?? '';
    $theme = $_POST['theme'] ?? '';
    $photo = $_FILES['photo'] ?? null;
    
    // Traitement de l'image
    $photoPath = null;
    if ($photo && $photo['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $photoPath = $uploadDir . uniqid() . '_' . basename($photo['name']);
        move_uploaded_file($photo['tmp_name'], $photoPath);
    }
    
    // Récupération des questions
    $questions = [];
    $i = 1;
    while (isset($_POST["question_$i"])) {
        if (!empty($_POST["question_$i"])) {
            $questions[] = [
                'question' => $_POST["question_$i"],
                'reponse_a' => $_POST["reponse_a_$i"] ?? '',
                'reponse_b' => $_POST["reponse_b_$i"] ?? '',
                'reponse_c' => $_POST["reponse_c_$i"] ?? '',
                'reponse_d' => $_POST["reponse_d_$i"] ?? '',
            ];
        }
        $i++;
    }
    
    // Sauvegarde dans la session ou en base de données
    $_SESSION['quiz'] = [
        'titre' => $titre,
        'theme' => $theme,
        'photo' => $photoPath,
        'questions' => $questions
    ];
    
    // Redirection ou affichage de confirmation
    header('Location: confirmation.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de quiz</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 30px;
            backdrop-filter: blur(10px);
        }
        
        h1 {
            color: white;
            margin-bottom: 30px;
            font-size: 28px;
            border-left: 4px solid #4a9eff;
            padding-left: 15px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        label {
            display: block;
            color: #b8c5d6;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: 500;
        }
        
        input[type="text"],
        select {
            width: 100%;
            padding: 12px 15px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 6px;
            color: white;
            font-size: 15px;
            transition: all 0.3s;
        }
        
        input[type="text"]:focus,
        select:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.12);
            border-color: #4a9eff;
        }
        
        input::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }
        
        select option {
            background: #1e3c72;
            color: white;
        }
        
        .photo-upload {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .upload-btn {
            background: rgba(74, 158, 255, 0.2);
            border: 2px dashed #4a9eff;
            padding: 40px 30px;
            border-radius: 8px;
            cursor: pointer;
            text-align: center;
            transition: all 0.3s;
            flex: 1;
        }
        
        .upload-btn:hover {
            background: rgba(74, 158, 255, 0.3);
            border-color: #6bb3ff;
        }
        
        .upload-btn svg {
            width: 40px;
            height: 40px;
            fill: #4a9eff;
            margin-bottom: 10px;
        }
        
        .upload-text {
            color: #4a9eff;
            font-size: 14px;
        }
        
        input[type="file"] {
            display: none;
        }
        
        .question-block {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            position: relative;
        }
        
        .question-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .question-header h3 {
            color: white;
            font-size: 16px;
        }
        
        .delete-btn {
            background: rgba(255, 77, 77, 0.2);
            border: none;
            color: #ff4d4d;
            width: 32px;
            height: 32px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }
        
        .delete-btn:hover {
            background: rgba(255, 77, 77, 0.3);
        }
        
        .responses-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-top: 15px;
        }
        
        .add-question-btn {
            background: rgba(74, 158, 255, 0.2);
            border: 2px solid #4a9eff;
            color: #4a9eff;
            padding: 12px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s;
            width: fit-content;
        }
        
        .add-question-btn:hover {
            background: rgba(74, 158, 255, 0.3);
            transform: translateY(-2px);
        }
        
        .submit-btn {
            background: linear-gradient(135deg, #4a9eff 0%, #357abd 100%);
            color: white;
            border: none;
            padding: 15px 40px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 30px;
            width: 100%;
        }
        
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(74, 158, 255, 0.4);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Création de quiz</h1>
        
        <form method="POST" enctype="multipart/form-data" id="quizForm">
            <div class="form-group">
                <label>Choisir un titre :</label>
                <input type="text" name="titre" placeholder="Titre du quiz" required>
            </div>
            
            <div class="form-group">
                <label>Choisir un thème :</label>
                <select name="theme" required>
                    <option value="">Sélectionner un thème</option>
                    <option value="histoire">Histoire</option>
                    <option value="science">Science</option>
                    <option value="culture">Culture générale</option>
                    <option value="sport">Sport</option>
                    <option value="musique">Musique</option>
                    <option value="cinema">Cinéma</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Ajouter une photo :</label>
                <label for="photo" class="upload-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/>
                    </svg>
                    <div class="upload-text">Cliquez pour ajouter une photo</div>
                </label>
                <input type="file" id="photo" name="photo" accept="image/*">
            </div>
            
            <div id="questionsContainer">
                <!-- Les questions seront ajoutées ici -->
            </div>
            
            <button type="button" class="add-question-btn" onclick="addQuestion()">
                <span style="font-size: 20px;">+</span>
                Ajouter une question
            </button>
            
            <button type="submit" class="submit-btn">Créer le quiz</button>
        </form>
    </div>
    
    <script>
        let questionCount = 0;
        
        function addQuestion() {
            questionCount++;
            const container = document.getElementById('questionsContainer');
            const questionBlock = document.createElement('div');
            questionBlock.className = 'question-block';
            questionBlock.id = `question-${questionCount}`;
            
            questionBlock.innerHTML = `
                <div class="question-header">
                    <h3>Question n°${questionCount} :</h3>
                    <button type="button" class="delete-btn" onclick="deleteQuestion(${questionCount})">×</button>
                </div>
                <div class="form-group">
                    <input type="text" name="question_${questionCount}" placeholder="Tapez une question" required>
                </div>
                <div class="responses-grid">
                    <div class="form-group">
                        <label>Réponse A :</label>
                        <input type="text" name="reponse_a_${questionCount}" placeholder="Réponse A">
                    </div>
                    <div class="form-group">
                        <label>Réponse B :</label>
                        <input type="text" name="reponse_b_${questionCount}" placeholder="Réponse B">
                    </div>
                    <div class="form-group">
                        <label>Réponse C :</label>
                        <input type="text" name="reponse_c_${questionCount}" placeholder="Réponse C">
                    </div>
                    <div class="form-group">
                        <label>Réponse D :</label>
                        <input type="text" name="reponse_d_${questionCount}" placeholder="Réponse D">
                    </div>
                </div>
            `;
            
            container.appendChild(questionBlock);
        }
        
        function deleteQuestion(id) {
            const element = document.getElementById(`question-${id}`);
            element.remove();
        }
        
        // Ajouter automatiquement 5 questions au chargement
        window.onload = function() {
            for (let i = 0; i < 5; i++) {
                addQuestion();
            }
        };
        
        // Preview de l'image uploadée
        document.getElementById('photo').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const uploadBtn = document.querySelector('.upload-btn');
                uploadBtn.querySelector('.upload-text').textContent = file.name;
            }
        });
    </script>
</body>
</html>