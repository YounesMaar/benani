<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FiliereController extends Controller
{
    public function index(){
        return view('filieres.index');
    }
    public function create(){
        return view('filieres.create');
    }
}
