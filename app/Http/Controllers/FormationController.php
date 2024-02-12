<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function formation(){
       
        $url=url()->current();
        $query=explode('/',$url);
        
        $data=[
            'title'=>$title="Explorez Nos Cours HTML, CSS, JavaScript ,PHP et Plus | Catalogue Développeur Junior
            ",
            'description'=>'Découvrez notre formation en développement web chez Développeur Junior.
            Maîtrisez les langages clés tels que HTML, CSS et JavaScript, PHP, React, Laravel, et forgez votre chemin vers une carrière
            réussie en tant que développeur web junior',
            'query'=>$query[3],
        ];
        return view('formation.formation',$data);
    }
}
