<?php


namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function ShowView()
    {
        //$users = DB::table('products')->get();
        $products = Product::with('user')->get();
        return view('hakkimda', compact('products'));
    }

}


