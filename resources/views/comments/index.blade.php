@extends('layouts.admin')

@section('content')
    <h1 style="text-align: center; color: #333;">Lista de Comentarios</h1>

    <a href="{{ route('comments.create') }}" style="display: inline-block; margin-bottom: 20px; background-color: #007bff; color: white; padding: 10px 20px; border-radius: 4px; text-decoration: none; font-size: 16px;">Agregar Comentario</a>

    <form method="GET" action="{{ route('comments.index') }}" style="max-width: 600px; margin: 0 auto 20px; display: flex; justify-content: space-between;">
        <input type="text" name="search" placeholder="Buscar por nombre o comentario..." value="{{ request('search') }}" style="width: 70%; padding: 10px; border-radius: 4px; border: 1px solid #ccc;">
        <button type="submit" style="width: 20%; background-color: #28a745; color: white; padding: 10px; border: none; border-radius: 4px; font-size: 16px; cursor: pointer;">Buscar</button>
    </form>
    
    @foreach($comments as $comment)
        <div style="border: 1px solid #ddd; padding: 15px; border-radius: 8px; margin-bottom: 10px; background-color: #f9f9f9;">
            <strong>{{ $comment->user_name }}</strong>: {{ $comment->comment }}
            <div style="margin-top: 10px;">
                <a href="{{ route('comments.show', $comment->id) }}" style="text-decoration: none; color: #007bff; margin-right: 10px;">Ver</a>
                <a href="{{ route('comments.edit', $comment->id) }}" style="text-decoration: none; color: #ffc107; margin-right: 10px;">Editar</a>
                <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background-color: #dc3545; color: white; padding: 5px 10px; border: none; border-radius: 4px; cursor: pointer; font-size: 14px;">Eliminar</button>
                </form>
            </div>
        </div>
    @endforeach

    <div style="text-align: center;">
        {{ $comments->links() }}
    </div>
@endsection
