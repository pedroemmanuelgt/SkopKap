<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;


class CommentController extends Controller
{
    public function index(Request $request){
        if ($search = $request->input('search')) {
            $comments = Comment::where('user_name', 'like', "%{$search}%")
                               ->orWhere('comment', 'like', "%{$search}%")
                               ->latest()
                               ->paginate(10);
        } else {
            // Si no hay búsqueda, solo obtener los comentarios más recientes
            $comments = Comment::latest()->paginate(10);
        }

        return view('comments.index', compact('comments'));
    }

    public function create()
    {
        return view('comments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_name' => 'required|max:255',
            'comment' => 'required',
        ]);

        Comment::create($request->all());
        return redirect()->route('comments.index')->with('success', 'Comentario agregado con éxito.');
    }

    public function show(Comment $comment)
    {
        return view('comments.show', compact('comment'));
    }

    public function edit(Comment $comment)
    {
        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'user_name' => 'required|max:255',
            'comment' => 'required',
        ]);

        $comment->update($request->all());
        return redirect()->route('comments.index')->with('success', 'Comentario actualizado con éxito.');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('comments.index')->with('success', 'Comentario eliminado con éxito.');
    }
}
