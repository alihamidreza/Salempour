<?php

namespace App\Http\Controllers;

use App\ActivationCode;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Activation($token)
    {
        $activationCode = ActivationCode::whereCode($token)->first();

        if (! $activationCode){
            dd('not exist');
            redirect('/');
        }

        if ($activationCode->used == 1){
            dd('this token used');
            redirect('/');
        }

        if ($activationCode->expire < Carbon::now()){
            dd('this token expired');
            redirect('/');
        }

        $activationCode->update([
           'used' => 1
        ]);

        $activationCode->user()->update([
           'active' => 1
        ]);

        auth()->loginUsingId($activationCode->user->id);
        return redirect('/');
    }
}
