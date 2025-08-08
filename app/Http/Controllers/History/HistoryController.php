<?php

namespace App\Http\Controllers\History;

use App\Models\History;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
    public function index()
    {
        $historys = History::all();

        return view('sejarah', compact('historys'));
    }
}
