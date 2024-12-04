

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sk'op K'ap</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="icons/favicon.ico" sizes="any">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Para iconos -->
    @laravelPWA
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            
        }

        header {
            background-color: #007bff;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .logout-button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .logout-button:hover {
            background-color: #c82333;
        }

        .container {
            max-width: 2000px;
            margin: auto;
            padding: 3rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            flex: 1; /* Permitir que el contenedor crezca y ocupe espacio */
        }

        footer {
            background-color: #333333;
            color: white;
            padding: 1rem;
            text-align: center;
        }

        h1, h2 {
            color: #343a40;
            margin-top: 0;
        }

        h1 {
            font-size: 2rem;
        }

        h2 {
            font-size: 1.5rem;
            margin-top: 1.5rem;
        }

        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            color: white;
            transition: background-color 0.3s;
            font-size: 1rem;
            margin-top: 1rem;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            background-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        .card {
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 1.5rem;
            margin-top: 1.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            margin-bottom: 1rem;
            font-size: 1.5rem;
            color: #343a40;
        }

        .table {
            width: 100%;
            margin-top: 1rem;
            border-collapse: collapse;
        }

        .table th, .table td {
            padding: 0.75rem;
            border: 1px solid #dee2e6;
            text-align: left;
        }

        .table th {
            background-color: #007bff;
            color: white;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f2f2f2;
        }

        .text-center {
            text-align: center;
        }

        .icon {
            margin-right: 8px;
        }

        .header-title {
            font-size: 1.5rem;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-title">Sk'op K'ap</div>
        <nav>
            <ul>
                <li><a href="{{ route('dashboard') }}">Inicio</a></li>
                <li><a href="{{ route('users') }}">Gestion de usuarios</a></li>
                <li><a href="{{ route('comments.index') }}">Comentarios</a></li>
                
                <li>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="logout-button">Cerrar Sesión</button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Sk'op K'ap. Todos los derechos reservados.</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        window.addEventListener('online', handleConnection);
        window.addEventListener('offline', handleConnection);

        function handleConnection() {
            if (navigator.onLine) {
                // location.replace('/dashboard');
            } else{
                location.replace('/offline');
            }
        }
    </script>
    <script>
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/service-worker.js')
            .then(() => console.log('Service Worker registrado correctamente'))
            .catch((error) => console.error('Error al registrar el Service Worker:', error));
    }
</script>
</body>
</html>
