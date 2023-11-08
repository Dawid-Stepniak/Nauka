<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInformations extends Controller
{
    public function showUserInformations(){
        $user_informations=[
            'firstName'=>'Dawid',
            'lastName'=>'Superowy',
            'sex'=>'mężczyzna',
            'city'=>'Poznań',
            'hobby'=>['taniec','śpiew','aktorstwo']
        ];
        return view('user.user_informations',['informations'=>$user_informations]);
    }
}
