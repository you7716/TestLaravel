<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index(){
        $etudiants = Etudiant::all();
        return view("liste",["etudiant"=>$etudiants]);
    }
    
}
