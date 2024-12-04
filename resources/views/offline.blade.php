@extends('layouts.admin')

@section('content')
    <h1>Estás en modo offline</h1>
    <p>Estos son los datos de los usuarios disponibles:</p>
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo Electrónico</th>
        </tr>
    </thead>
    <tbody id="cuerpo-tabla" >
        <!-- Los usuarios se agregarán aquí -->
    </tbody>
</table>

    <script>
        const cuerpoTabla = document.getElementById('cuerpo-tabla');

        if (navigator.onLine) {
            // Si está online, puedes intentar cargar datos del servidor (por ejemplo, desde un API o una ruta de Laravel)
            // Usar AJAX o Fetch para cargar los datos si es necesario
            console.log('Conectado a Internet, cargando datos desde el servidor...');
        } else {
            // Si está offline, cargar datos desde LocalStorage
            console.log('Modo offline, cargando datos desde LocalStorage...');
            const usuarios = JSON.parse(localStorage.getItem('usuarios'));

                const cuerpoTabla = document.getElementById('cuerpo-tabla');

                // Verificar si los datos existen en LocalStorage
                if (usuarios && usuarios.length > 0) {
                    usuarios.forEach(usuario => {
                        const fila = document.createElement('tr'); // Crear una fila nueva para cada usuario
                        const celdaNombre = document.createElement('td'); // Celda para el nombre
                        const celdaEmail = document.createElement('td');  // Celda para el correo electrónico

                        // Asignar los datos del usuario a las celdas
                        celdaNombre.textContent = usuario.name;
                        celdaEmail.textContent = usuario.email;

                        // Agregar las celdas a la fila
                        fila.appendChild(celdaNombre);
                        fila.appendChild(celdaEmail);

                        // Agregar la fila a la tabla
                        cuerpoTabla.appendChild(fila);
                    });
            } else {
                const mensaje = document.createElement('p');
                mensaje.textContent = 'No hay usuarios disponibles en el almacenamiento local.';
                lista.appendChild(mensaje);
            }
        }
    </script>
@endsection
