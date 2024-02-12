<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data=[
            'title'=>"Lancez votre carrière en tant que Développeur Web | ".config('app.name'),
            'description'=>"Explorez notre formation en développement web chez Développeur Junior.
            Devenez un expert du back-end, du front-end, et du fullstack.
            Préparez-vous à exceller dans l'industrie du développement web avec des cours pratiques et un suivi personnalisé.",
            'active'=>'active',
            // Tout savoir sur Helium le modem ultra rapide nouvelle génération qui va révolutionner l'internet 3.0 et notre approche des technologies.   
        ];
        return view('home.index',$data);
    }
}
