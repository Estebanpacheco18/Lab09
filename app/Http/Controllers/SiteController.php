<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
    
    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }
    public function handleContact (Request $request)
    {
       $name = $request->name;
       $email = $request->email;
       $message = $request->message;
/*
       return response()->json([
         'message' => 'We received your message!',
         'name' => $name,
         'email' => $email,
         'content' => $message
       ]);
    }  -----> Hacemos un lado este codigo
*/
    $data = [
    'name' => $name,
    'email' => $email,
    'message' => $message
    ];

    return view('response', $data);
    }
}
   