<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatosController extends Controller
{
    public function index(){
        // var_dump($_GET);
        return view("site.contatos");
    }

    public function contato(Request $request){
        dd($request);
    }
}
