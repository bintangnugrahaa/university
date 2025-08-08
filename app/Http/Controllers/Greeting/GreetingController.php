<?php

namespace App\Http\Controllers\Greeting;

use App\Models\Greeting as GreetingModel;
use App\Http\Controllers\Controller;

class GreetingController extends Controller
{
    public function index()
    {
        $greetings = GreetingModel::all();

        return view('sambutan', compact('greetings'));
    }
}
