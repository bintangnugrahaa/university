<?php

namespace App\Http\Controllers\VisionMission;

use App\Models\Visimisi;
use App\Http\Controllers\Controller;

class VisionMissionController extends Controller
{
    public function index()
    {
        $visiMisi = Visimisi::first();

        if ($visiMisi) {
            $vision = $visiMisi->vision;
            $mission = $visiMisi->mission;
            $image = $visiMisi->image;
        } else {
            $vision = 'No Data Available';
            $mission = 'No Data Available';
            $image = [];
        }

        return view('visimisi', compact('vision', 'mission', 'image'));
    }
}
