<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Game;

class GamesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Return games by user ID.
     *
     * @return App\Game;
     */
    public function listGamesByUser()
    {
        $games = Game::where('user_id', Auth::id())
            ->select('id', 'name', 'campaign', 'rule_set', 'status')
            ->get();

        return $games;
    }
}
