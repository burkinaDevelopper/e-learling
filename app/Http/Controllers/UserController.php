<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    User,Course
};
use App\Notifications\FromationNotification;
class UserController extends Controller
{
    public function __construct(){
        $this->middleware(['auth','verified']);
    }
    public function index(){
        $url=url()->current();
        $query=explode('/',$url);
        $user=User::firstOrFail();
        $data=[
            'title'=>$title="Page d'un utilisateur",
            'description'=>$title,
            'query'=>$query[3],
            'user'=> $user,
        ];
        return view('user.cours',$data);
    }
    public function store(){
        request()->validate([
            'country'=>['required','string'],
            'cours'=>['required','string'],
            'status'=>['required','string'],
        ]);
       $course=auth()->user()->courses()->create([
        'country'=>request('country'),
        'cours'=>request('cours'),
        'status'=>request('status'),
       ]);
       $user=auth()->user();
       $admin=User::whereRole('admin')->firstOrFail();
       $admin->notify(new FromationNotification($user,$course));
       $message="Merci pour l'intérêt que vous porte a la formation
       vous allez recevoir un email";
       return back()->withSuccess($message);
    }
}
