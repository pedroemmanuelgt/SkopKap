<!-- resources/views/admin/users.blade.php -->

@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Usuarios Registrados</h1>

    <table id="tabla-usuarios" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo Electrónico</th>
                <th>Fecha de Registro</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d-m-Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
        // Obtener los datos de usuarios desde Laravel
        const usuarios = @json($users);

        // Mostrar usuarios en la vista
        const lista = document.getElementById('tabla-usuarios');
        usuarios.forEach(usuario => {
            const thead = document.createElement('thead');
            thead.textContent = ` ${usuario.name} - ${usuario.email}`;
            // lista.appendChild(li);
            console.log(thead.textContent);
            
        });
        localStorage.setItem('usuarios', JSON.stringify(usuarios)); 
    </script>



@endsection
