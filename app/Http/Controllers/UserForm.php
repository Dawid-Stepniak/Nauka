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
        $req->validate(
            //w pierwszym kwadratowym nawiasie definiujemy kryteria które ma spełniać formularz
            [
                'email' => 'required|email',
                'firstName'=>'min:10|max:20',
                'lastName' => 'required|min:20|max:30'
            ],
            //w drugim kwadratowym nawiasie zapisujemy treść errorów, które będą się wyświetlać w przypadku niespełnienia kryteriów formularza
            [   
                'firstName.min' =>'Za krótkie imie masz lol',
                'email.required' => 'Pole adres email jest puste',
                'email.email' => 'W polu email jest podany nieprawidłowy email',
                'lastName.required' => 'kupa musisz to uzupełnić',
                'lastName.min' => 'To twoje pole kochany musi mieć min 20 znaków',
                'lastName.max' => 'Hola hola za dużo znaków żeś naklikał'
                
             ]);
        $dataUser = [
            'firstName'=>$req->input('firstName'),
            'lastName'=>$req->input('lastName'),
            'email'=>$req->input('email')
        ];

        return view('user.user',['user_data'=>$dataUser]);

    }
}
