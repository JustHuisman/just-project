<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\User;

class UserController extends Controller
{
    public function index($team)
    {
        return Inertia::render('Teams/Index', [
            'users' => User::where('current_team_id', $team)->paginate(5)->through(function ($user) {
            return [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                ];
            }),
        ]);  
    }
}
