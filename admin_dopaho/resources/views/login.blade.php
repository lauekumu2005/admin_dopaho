<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Authentification</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color:white;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            width: 800px;
            height: 500px;
            display: flex;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            transition: all 0.5s ease-in-out;
        }

        .image-side, .form-side {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.5s ease-in-out;
            padding: 20px;
        }

        .image-side {
            background: url('{{ asset("logo.png") }}') no-repeat center;
            background-size: contain;
        }

        .form-container {
            width: 100%;
            max-width: 300px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #007c91;
        }

        .form-container input {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container button {
            width: 100%;
            background-color: #00bcd4;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #0097a7;
        }

        .toggle-link {
            text-align: center;
            margin-top: 10px;
            font-size: 0.9em;
            cursor: pointer;
            color: #007c91;
            text-decoration: underline;
        }

        /* Animation inversion */
        .reversed .image-side {
            order: 2;
        }

        .reversed .form-side {
            order: 1;
        }
    </style>
</head>
<body>

<div class="container" id="authContainer">
    <div class="image-side"></div>
    <div class="form-side">
        <div class="form-container" id="formContainer">
            <h2 id="formTitle">Connexion</h2>
            <form method="POST" action="/login" id="authForm">
                @csrf
                <input type="email" name="email" placeholder="Adresse e-mail" required>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <button type="submit">Se connecter</button>
            </form>
            <div class="toggle-link" onclick="toggleForm()">Créer un compte</div>
        </div>
    </div>
</div>

<script>
    let isLogin = true;

    function toggleForm() {
        const container = document.getElementById('authContainer');
        const form = document.getElementById('authForm');
        const title = document.getElementById('formTitle');
        const toggleLink = document.querySelector('.toggle-link');

        container.classList.toggle('reversed');

        if (isLogin) {
            // Switch to registration form
            form.setAttribute('action', '/register');
            form.innerHTML = `
                @csrf
                <input type="text" name="name" placeholder="Nom complet" required>
                <input type="email" name="email" placeholder="Adresse e-mail" required>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe" required>
                <button type="submit">Créer un compte</button>
            `;
            title.textContent = 'Créer un compte';
            toggleLink.textContent = 'Déjà un compte ? Se connecter';
        } else {
            // Switch back to login form
            form.setAttribute('action', '/login');
            form.innerHTML = `
                @csrf
                <input type="email" name="email" placeholder="Adresse e-mail" required>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <button type="submit">Se connecter</button>
            `;
            title.textContent = 'Connexion';
            toggleLink.textContent = 'Créer un compte';
        }

        isLogin = !isLogin;
    }
</script>

</body>
</html>
