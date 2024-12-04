<!-- resources/views/admin/dashboard.blade.php -->

@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Panel de Administrador</h1>
    <p>Bienvenido, {{ auth()->user()->name }}. Tienes acceso de administrador.</p>
    <!-- Contenido específico para administradores -->
</div>
@endsection
