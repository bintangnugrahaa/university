<?php

namespace App\Http\Controllers\HumanResources;

use App\Models\Admin;
use App\Models\Lecture;
use App\Http\Controllers\Controller;

class HumanResourcesController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        $lectures = Lecture::all();

        return view('sdm', compact('admins', 'lectures'));
    }
}
