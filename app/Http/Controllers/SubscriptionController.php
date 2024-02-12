<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Notifications\SubscriptionNotification;
use Str;
class SubscriptionController extends Controller
{
    public function store(){
        request()->validate([
            'email'=>['required','unique:subscriptions,email'],
        ]);
        $token=Str::uuid();
        $subscript=Subscription::create([
            'email'=>request('email'),
            'token'=> $token,
        ]);
        $subscript->notify(new SubscriptionNotification($subscript));
        $success='souscription reussi';
        return back()->withSuccess($success);
    }
    public function delete($token){
        $unsubscript=Subscription::whereToken($token)->first();
        abort_if(!$unsubscript,403);
        $unsubscript->delete();
        $data=[
            'title'=>$title='se desabonner',
            'description'=>$title,
        ];
        return view('unsubscribe.delete',$data);
    }
}
