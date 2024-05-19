<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\Request;

class GroupeController extends Controller
{
    public function index(){
        return view('groupes.index');
    }
    public function create(){
        $filieres=Filiere::all();
        return view('groupes.create',compact('filieres'));
    }
}
