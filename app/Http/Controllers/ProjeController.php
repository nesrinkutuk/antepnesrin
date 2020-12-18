<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjeController extends Controller
{
    public function index(){
        return view('proje.index');
    }
}
