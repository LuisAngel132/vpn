<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Mail\Test;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.Login');
    }
    public function store(Request $request)

    {
        $user=User:: where('email',$request->email)->first();
        if(Hash::check($request->password,$user->password))
        {


         }
            $dd =rand(1000000,9000000);
             $token = $user->createToken($request->email, ['Gratis'])->plainTextToken;
            $details =
            [
                'title'=> 'Sus digitos son',
                'body' => 'Codigo de verificación',
                'digitos'=>$dd
            ];

            Mail::to($request->email)->send(new TestMail($details));

            return View('verification',compact('dd'));

    }
    public function comprobar(Request $request){
      if($request->codigo1 == $request->codigo2){
         return View('session');
      }
        return "NO ES CORRECTO";
    }
}
