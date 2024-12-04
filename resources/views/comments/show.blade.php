@extends('layouts.admin')

@section('content')
    <h1 style="text-align: center; color: #333;">Comentario de {{ $comment->user_name }}</h1>

    <div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <p style="font-size: 16px; line-height: 1.6; color: #555;">{{ $comment->comment }}</p>
    </div>

    <div style="text-align: center; margin-top: 20px;">
        <a href="{{ route('comments.index') }}" style="background-color: #007bff; color: white; padding: 10px 20px; border-radius: 4px; text-decoration: none; font-size: 16px;">Volver</a>
    </div>
@endsection
