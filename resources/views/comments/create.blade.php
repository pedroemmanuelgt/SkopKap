@extends('layouts.admin')

@section('content')
    <h1 style="text-align: center; color: #333;">Agregar Comentario</h1>

    <form action="{{ route('comments.store') }}" method="POST" style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9;">
        @csrf
        <div style="margin-bottom: 15px;">
            <label for="user_name" style="display: block; font-weight: bold; margin-bottom: 5px;">Nombre:</label>
            <input type="text" name="user_name" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="comment" style="display: block; font-weight: bold; margin-bottom: 5px;">Comentario:</label>
            <textarea name="comment" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px; height: 150px;"></textarea>
        </div>

        <button type="submit" style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">Guardar</button>
    </form>
@endsection
