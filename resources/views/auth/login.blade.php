
<style>
        body {
            font-family: Arial, sans-serif;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

        .login-form {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            flex-grow: 1;
            max-width: 400px;
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

        .login-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .login-content .form-group {
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

        /* Estilos del botón de inicio de sesión */
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

        /* Estilos del enlace de registro */
        .register-button {
            display: block;
            width: 93%;
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

        .register-button:hover {
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
            .login-content {
                flex-direction: column;
            }

            .logo-container {
                margin-bottom: 2rem;
            }
        }
    </style>

    <div class="login-container">
        <div class="login-content">
            <!-- Columna del logo -->
            <div class="logo-container">
                <img src="{{ asset('images/logo_skop.png') }}" alt="Logo Sk'op K'ap">
            </div>

            <!-- Columna del formulario -->
            <div class="login-form">
                <h2 style="text-align: center; margin-bottom: 2rem;">Iniciar sesión</h2>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Contraseña -->
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" name="password" required autocomplete="current-password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Recordar sesión -->
                    <div class="form-group">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <!-- Enlace de "Olvidaste tu contraseña" -->
                    @if (Route::has('password.request'))
                        <div class="form-group">
                            <a class="forgot-password" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                        </div>
                    @endif

                    <!-- Botón de inicio de sesión -->
                    <div class="form-group">
                        <button type="submit">Iniciar sesión</button>
                    </div>

                    <!-- Enlace de registro -->
                    <div class="form-group">
                        <a class="register-button" href="{{ route('register') }}">Registrarse</a>
                    </div>

                    <!-- Enlace de regreso -->
                    
                </form>
            </div>
        </div>
    </div>

