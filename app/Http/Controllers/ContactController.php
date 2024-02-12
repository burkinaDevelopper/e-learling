<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\QuestionNotification;
class ContactController extends Controller
{
    public function contact(){
        $url=url()->current();
        $query=explode('/',$url);
        $data=[
            'title'=>$title="Page de contact de ".config('app.name'),
            'description'=>"Contacter les responsables du site ".config('app.name')." pour avoir plus d'information",
            'query'=>$query[3],
        ];
        return view('contact.contact',$data);
    }
    public function sendMailQuestion(){
        request()->validate([
            'name'=>['required','string'],
            'number'=>['sometimes'],
            'email'=>['required','email','string'],
            'message'=>['required'],
        ],[
            'message.required'=>'Veuillez remplir tous les champs',
        ]);
        $name=request('name');
        $email=request('email');
        $number=request('number','');
        $message=request('message');

        $admin=User::whereRole('admin')->firstOrFail();
        $admin->notify(new QuestionNotification($email,$name,$number,$message));
        $success="message envoyer avec success";
        return back()->withSuccess($success);
    }
}
