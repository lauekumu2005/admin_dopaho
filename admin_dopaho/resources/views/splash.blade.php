<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Splash Screen</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo {
            width: 150px;
            height: 150px;
            animation: zoomIn 5s ease-out forwards;
        }

        @keyframes zoomIn {
            0% {
                transform: scale(1);
                opacity: 0;
            }
            20% {
                transform: scale(0.5);
                opacity: 0.5;
            }
            40% {
                transform: scale(1);
                opacity: 0.8;
            }
            80% {
                transform: scale(0.5);
                opacity: 0.9;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
    </style>
    <script>
        // Rediriger après 3 secondes vers la page de login
        setTimeout(() => {
            window.location.href = "/login";
        }, 5000);
    </script>
</head>
<body>
    <img src="{{ asset('logo.png') }}" alt="Logo" class="logo">
</body>
</html>
