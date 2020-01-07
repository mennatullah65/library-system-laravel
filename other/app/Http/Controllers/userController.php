<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\user; 


class userController extends Controller
{
    public function get_user(){
        $user = Auth::user();
        //dd($user);
        $so=user::where('email',$user->email)->get();
        //dd($so);
        $dataview=[
            'data'=>$so
        ];
        return view('userProfile')->with($dataview);
    }
}
