<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {

        $nome = "Fabio";
        $idade = 30;
    
        $a = 10;
        $b = 11;
    
        return view('welcome',['nome' => $nome,'idade'=>$idade], ['$a' => $a, '$b'=> $b]);
       
    }

    public function create() {
        return view('events.create');
    }
}
