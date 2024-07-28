<?php

namespace App\Http\Controllers;

use App\Models\AdoptedPet;
use Illuminate\Http\Request;

class AdoptedPetController extends Controller
{
    public function index()
    {
        $pets = AdoptedPet::paginate(25);
        // $pets = AdoptedPet::all();
        return view('adopt', compact('pets'));
    }

    public function show($id)
    {
        $pet = AdoptedPet::findOrFail($id);
        return view('pet', compact('pet'));
    }
}
