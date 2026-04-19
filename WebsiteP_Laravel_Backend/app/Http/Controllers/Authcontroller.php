<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;            
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Authcontroller extends Controller
{
   public function register(Request $request)
   {
    $user=User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password)
    ]);
    return response()->json([
        'message'=>'User Registered Successfully', 
        'user'=>$user
    ]);
   }
}
