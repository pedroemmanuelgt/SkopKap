
<style>
        body {
            font-family: Arial, sans-serif;
        }

        .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

        .register-form {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            flex-grow: 1;
            max-width: 600px;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-right: 2rem;
            flex-grow: 1;
        }

        .logo-container img {
            width: 600px;
            margin-bottom: 1rem;
        }

        .register-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .register-content .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            font-weight: bold;
            margin-bottom: 0.5rem;
            display: inline-block;
        }

        input[type="text"], input[type="email"], input[type="password"], select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ced4da;
            border-radius: 4px;
            margin-bottom: 0.5rem;
            font-size: 1rem;
        }

        /* Estilos del botón de registro */
        button {
            width: 100%;
            padding: 0.75rem;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Estilos del enlace de Iniciar sesión */
        .login-button {
            display: block;
            width: 94%;
            padding: 0.75rem;
            background-color: white;
            color: #007bff;
            border: 2px solid #007bff;
            border-radius: 4px;
            font-size: 1rem;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            margin-top: 1rem;
        }

        .login-button:hover {
            background-color: #007bff;
            color: white;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            color: #0056b3;
        }

        .back-link {
            margin-top: 1rem;
            display: block;
            text-align: center;
        }

        /* Responsividad */
        @media (max-width: 768px) {
            .register-content {
                flex-direction: column;
            }

            .logo-container {
                margin-bottom: 2rem;
            }
        }
    </style>

    <div class="register-container">
        <div class="register-content">
            <!-- Columna del logo -->
            <div class="logo-container">
                <img src="{{ asset('images/logo_skop.png') }}" alt="Logo Sk'op K'ap">
            </div>

            <!-- Columna del formulario -->
            <div class="register-form">
                <h2 style="text-align: center; margin-bottom: 2rem;">Regístrate</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Nombre -->
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Correo Electrónico -->
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Contraseña -->
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" name="password" required autocomplete="new-password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirmar Contraseña -->
                    <div class="form-group">
                        <label for="password_confirmation">Repetir contraseña</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <!-- Botón de registro -->
                    <div class="form-group">
                        <button type="submit">Registrarse</button>
                    </div>

                    <!-- Enlace a iniciar sesión -->
                    <div class="form-group">
                        <a class="login-button" href="{{ route('login') }}">Iniciar sesión</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

