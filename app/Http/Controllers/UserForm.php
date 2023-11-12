<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserForm extends Controller
{
    function showFormResult(){
        return "Formularz działa";
    }

    function showUser(Request $req){
        //return $req->input(); //{'firstName':'Jestem','lastName':'koksem'}
        //return $req->input('lastName'); //koksem
        //return $req->path(); //UserForm (to jest nazwa kontrolera)
        //return $req->url(); //http://127.0.0.1:8000/UserForm
        //return $req->method(); //GET
        //return $req->all(); //{'firstName':'Jestem','lastName':'koksem'}

        $dataUser = [
            'firstName'=>$req->input('firstName'),
            'lastName'=>$req->input('lastName')
        ];

        return view('user.user',['user_data'=>$dataUser]);

    }
}
