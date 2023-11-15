<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularzUzytkownikaController extends Controller
{
    public function PrzekazanieDanych(Request $req){

        $req->validate(
            [
                'firstName' =>  'required|min:5|max:25',
                'lastName'  =>  'required|min:5|max:25',
                'password'  =>  'required|min:12|max:25',
                'email' =>  'required|email'

            ],
            [
                'firstName.min'=>'Za krótkie Imię',
                'firstName.max'=>'Za długie Imię',
                'lastName.required' =>  'Podaj nazwisko',
                'lastName.min'  =>  'Za krótkie nazwisko',
                'lastName.max'  =>  'Za długie nazwisko',
                'password.required'=>   'Podaj hasło',
                'password.min'  => 'Za krótkie hasło',
                'password.max'  =>  'Za długie hasło',
                'email.required'    => 'Podaj email',
                'email.email'   =>  'Podaj poprawny email'
                
            ]);

        $dane = [
            'firstName'=>$req->input('firstName'),
            'lastName'=>$req->input('lastName'),
            'hobby'=>['koszykówka','programowanie','śpiew','aktorstwo']
        ];

        $inneDane = [
            'odpoczynek' => ['robienie muzyki', 'śpiewanie', 'aktorstwo']
        ];
        return view('user.DaneUzytkownika',['dane'=>$dane, 'inneDane'=>$inneDane]);
    }
}
