<?php

namespace App\Http\Controllers\Admin; // ✅ Namespace correct

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // ✅ Ajout de cette ligne pour importer le bon Controller

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:admin', 'role:admin']);
    }

    public function index()
    {
        dd(auth()->user()); // Affiche les infos de l'admin connecté
    }
}

