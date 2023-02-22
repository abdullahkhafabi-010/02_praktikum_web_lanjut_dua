<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return '2041720050';
    }

    public function articles($id){
        return 'Selamat Datang';
    }
}
