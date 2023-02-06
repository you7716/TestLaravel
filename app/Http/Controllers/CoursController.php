<?php

namespace App\Http\Controllers;
use App\Models\Cours;

class CoursController {

    public function liste()
    {
       $c = new Cours(1,"laravel",30);
       $c1 = new Cours(2,"java",50);
       $c2 = new Cours(3,"js",60);
       $cours = [$c,$c1,$c2];
       return view('cours',['cours'=>$cours]);


    }

    
}