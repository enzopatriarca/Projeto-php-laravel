<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1,int $p2){
        // echo "soma = ".($p1+$p2);
        // compact
        // return view('site.Teste',compact('p1','p2'));
        // array associativo

        // return view('site.Teste',['p1' => $p1, 'p2' => $p2]);

        // with
        return view('site.Teste')->with('p1',$p1)->with('p2',$p2);
    }
}
