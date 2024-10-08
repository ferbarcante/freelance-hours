<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */

     //__invoke significa que não havera nenhum outro método na classe somente esse
    public function __invoke(Request $request)
    {
        return view('welcome');
    }
}
