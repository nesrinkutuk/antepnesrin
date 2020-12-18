<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function ShowView() {
        //$users = DB::table('products')->get();
        $users = User::all();
        return view('hakkimda', compact('users'));
    }

}


