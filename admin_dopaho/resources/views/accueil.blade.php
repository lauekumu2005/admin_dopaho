<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue sur l'application</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            text-align: center;
            animation: fadeInUp 2s ease;
        }

        h1 {
            color: #2c3e50;
            font-size: 2.5em;
        }

        p {
            font-size: 1.2em;
            color: #555;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenue sur l'application de gestion des hôpitaux</h1>
        <p>Votre santé, notre priorité.</p>
    </div>
</body>
</html>

