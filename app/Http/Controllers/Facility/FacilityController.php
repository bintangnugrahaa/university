<?php

namespace App\Http\Controllers\Facility;

use App\Models\Facility as FacilityModel;
use App\Http\Controllers\Controller;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = FacilityModel::all();

        return view('fasilitas', compact('facilities'));
    }
}
