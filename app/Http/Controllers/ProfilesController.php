<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index($id)
    {
        $id = User::findOrFail($id);
        return view('home', [
            'user' => $id,
        ]);
    }
}
