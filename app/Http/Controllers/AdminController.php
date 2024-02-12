<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    User,Course,Subscription
};
class AdminController extends Controller
{
    
    public function index(){
        
        $url=url()->current();
        $query=explode('/',$url);
        $users=User::get();
        $newspapers=Subscription::get();
        $data=[
            'title'=>"Page admin",
            'description'=>"Page admin",
            'users'=>$users,
            'query'=>$query[3],
            'newspapers'=>$newspapers,
        ];
        return view('admin.index',$data);
    }
}
