<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Main;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Facades\Mail;
use App\Models\user;

class website extends Controller
{
    //

    // public function cart($req)
    // {
    //    $data =user::all()->where('email',$req->email);
    // }
    public function index()
    {
       // echo "Hello";
       $data=['name'=>"saloni",'data'=>"hello saloni"];
      $user['to']=session('sid')->email;
       Mail::send('mail',$data,function($message) use($user){
        $message->to(session('sid')->email);
        $message->subject('Hello! saloni here');
        
       });
    }
}
