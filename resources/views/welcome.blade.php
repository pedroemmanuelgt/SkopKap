<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SK'OP K'AP</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Barra de navegación */
        nav {
            background-color: #2a2b2e;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 2rem;
            margin: 0;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        /* Sección principal con gradiente */
        .main-section {
            background: linear-gradient(to right, #FF5733, #5B86E5); /* Gradiente entre rojo y azul */
            color: white;
            padding: 5rem 0;
            text-align: center;
        }

        .main-section h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .main-section p {
            font-size: 1.25rem;
            margin-bottom: 3rem;
        }

        /* Logo y texto en la parte inferior */
        .logo-section {
            text-align: center;
            margin: 3rem 0;
        }

        .logo-section img {
            width: 400px;
        }

        .logo-section h2 {
            font-size: 2rem;
            margin-top: 1rem;
            color: #5B86E5;
        }

        /* Sección de características (cards) */
        .features-section {
            padding: 3rem 1rem;
            background-color: #f8f8f8;
            text-align: center;
        }

        .features-section h2 {
            margin-bottom: 2rem;
            font-size: 2.5rem;
        }

        .features-container {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            width: 300px;
            text-align: center;
        }

        .card img {
            width: 100px;
            margin-bottom: 1rem;
        }

        .card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .card p {
            font-size: 1rem;
            color: #555;
        }

        /* Footer */
        footer {
            background-color: #2a2b2e;
            color: white;
            padding: 1.5rem 0;
            text-align: center;
        }

        footer p {
            margin: 0;
            font-size: 0.9rem;
        }

        footer a {
            color: #5B86E5;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- Barra de navegación -->
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="{{ route('about') }}">Conócenos</a></li>
            <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
        </ul>
    </nav>

    <!-- Sección principal con el título y descripción -->
    <section class="main-section">
        <h1>SK'OP K'AP</h1>
        <p>Innovación tecnológica en la traducción del lenguaje de señas mexicano, facilitando la comunicación inclusiva entre todas las personas.</p>
    </section>

    <!-- Sección del logo y el nombre del proyecto -->
    <section class="logo-section">
        <img src="{{ asset('images/logo_skop.png') }}" alt="Logo Sk'op K'ap">
        <h2></h2>
    </section>

    <!-- Sección de características (cards) -->
    <section class="features-section">
        <h2>Características Principales</h2>
        <div class="features-container">
            <div class="card">
                <!-- <img src="icon1.png" alt="Icono 1"> -->
                <h3>Traducción en Tiempo Real</h3>
                <p>Utiliza tu cámara para traducir el lenguaje de señas al instante.</p>
            </div>
            <div class="card">
                <!-- <img src="icon2.png" alt="Icono 2"> -->
                <h3>Avatares 3D</h3>
                <p>Visualiza las traducciones con avatares 3D que replican los gestos de las manos.</p>
            </div>
            <div class="card">
                <!-- <img src="icon3.png" alt="Icono 3"> -->
                <h3>Interfaz Amigable</h3>
                <p>Diseño intuitivo que facilita la navegación para usuarios de cualquier nivel.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
    <div class="container text-center">
        <p>&copy; 2024 Sk'op K'ap. Todos los derechos reservados.</p>
        <p>Contacto: <a href="mailto:info@skopkap.com">info@skopkap.com</a></p>
       
    </div>
</footer>


</body>
</html>
