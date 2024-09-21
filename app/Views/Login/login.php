<?xml version="1.0" encoding="UTF-8" ?>

<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml" xmlns:b="http://www.google.com/2005/gml/b"
    xmlns:data="http://www.google.com/2005/gml/data" xmlns:expr="http://www.google.com/2005/gml/expr">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2KV3RS6HZY"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-2KV3RS6HZY');
    </script>
    <!-- MetaInfo al compartir -->
    <meta content="https://i.ibb.co/CVfKQ4c/min.webp" property="og:image" />
    <meta content="GRIP Clothing Store" property="og:title" />
    <meta content="Vistiéndote dentro y fuera del gimnasio" property="og:description" />
    <meta content="https://www.gripclothingstore.com" property="og:url" />

    <!-- Más meta tags -->    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="https://fonts.googleapis.com/css2?family=Arkhip:wght@400;700&display=swap" rel="stylesheet">

    <meta content="ie=edge" http-equiv="X-UA-Compatible" />
    <link rel="stylesheet" href="https://cdn.rawgit.com/alvarogarciapiz/grip-web/main/styles.css" />
    <link rel="stylesheet" href="/assets/styles.css" />


    <title>Grip</title>
 
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h1>GRIP</h1>
            <form action="<?= base_url('login/validarIngreso') ?>" method="post">
    <div class="input-group">
        <label for="usuario_login">User</label>
        <input type="text" id="usuario_login" name="usuario_login" placeholder="Usuario" required />
    </div>
    <div class="input-group">
        <label for="contrasenia_login">Password</label>
        <input type="password" id="contrasenia_login" name="contrasenia_login" placeholder="Password" required />
    </div>
    <button type="submit" class="submit-btn">Submit</button>
</form>

            <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
        </div>
    </div>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

</body>


<script>
        function login(event) {
            event.preventDefault(); // Evita el envío del formulario tradicional

            var formData = new FormData(event.target);
            fetch('/login/validarIngreso', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    // Mostrar mensaje de éxito
                    alert(data.message);
                } else {
                    // Mostrar mensaje de error
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
</html>

