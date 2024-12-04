<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conócenos - SK'OP K'AP</title>
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
        <h1>Conócenos</h1>
        <p>En Kauil Tech, trabajamos para transformar la inclusión social mediante tecnología innovadora, facilitando la comunicación entre todas las personas.</p>
    </section>

    <!-- Sección de características (cards) -->
    <section class="features-section">
        <h2>¿Quiénes Somos?</h2>
        <div class="features-container">
            <div class="card">
                <h3>Misión</h3>
                <p>Nuestra misión es eliminar las barreras de comunicación, empoderando a las personas con discapacidades auditivas.</p>
            </div>
            <div class="card">
                <h3>Visión</h3>
                <p>Crear un mundo donde todos puedan comunicarse sin limitaciones y ser escuchados.</p>
            </div>
            <div class="card">
                <h3>Valores</h3>
                <p>Innovación, Inclusión y Empatía son los pilares de nuestro trabajo diario.</p>
            </div>
        </div>
    </section>

    <!-- Sección del equipo -->
    <section class="features-section">
        <h2>Nuestro Equipo</h2>
        <div class="features-container">
            <div class="card">
                <h3>Andy García Gonzalez</h3>
                <p>Desarrollador Backend</p>
            </div>
            <div class="card">
                <h3>Pedro Emmanuel Guillen Trujillo</h3>
                <p>Desarrollador Frontend</p>
            </div>
            <div class="card">
                <h3>José Miguel Jiménez Hernández</h3>
                <p>Especialista en IA</p>
            </div>
            <div class="card">
                <h3>Sergio Amaury Montiel Torres</h3>
                <p>Diseñador UX/UI</p>
            </div>
            <div class="card">
                <h3>Bernal Gamboa Barragan</h3>
                <p>Gestor de Proyectos</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 SK'OP K'AP. Todos los derechos reservados.</p>
        <p>Contacto: <a href="mailto:info@skopkap.com">info@skopkap.com</a></p>
    </footer>

</body>
</html>
