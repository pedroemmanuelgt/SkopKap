<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        $users = User::all(); // Obtén todos los usuarios
        return view('admin.users', compact('users')); // Vista de la tabla de usuarios
    }

    public function offline()
    {
        return view('offline');
    }

}
